<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index($id = null)
    {
        $gallery = $id ? Gallery::find($id) : new Gallery();

        return view('admin.content.gallery.gallery_create',compact('gallery'));
    }
    public function create(GalleryRequest $req)
    {
        $helper = new BaseHelperController();

        Gallery::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]));

        return redirect()->route('gallery_show');
    }
    public function show()
    {
        $gallery = Gallery::orderBy('created_at')->get();

        return view('admin.content.gallery.gallery_show', compact('gallery'));
    }
    public function update(GalleryRequest $req)
    {
        $helper = new BaseHelperController();

        $gallery = Gallery::find($req['id']);

        if (empty($req['image'])) {
            Storage::disk('public')->delete('image', $gallery['image']);
        } elseif ($gallery['image'] != $req['image']) {
            $gallery['image']  = $helper->store_base64_image($req['image']);
        }
//        $gallery->update([
//            'type' => $req->type
//        ]);

        return redirect(route('gallery_show'));
    }
    public function delete($id)
    {
        $delete = Gallery::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();

        return redirect(route('gallery_show'));
    }
}
