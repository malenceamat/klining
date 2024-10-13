<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\ServicesRequest;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index($id = null)
    {
        $services = $id ? Services::find($id) : new Services();

        return view('admin.content.services.services_create',compact('services'));
    }
    public function create(ServicesRequest $req)
    {
        $helper = new BaseHelperController();

        Services::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]));

        return redirect()->route('services_show');
    }
    public function show()
    {
        $services = Services::orderBy('created_at')->get();

        return view('admin.content.services.services_show', compact('services'));
    }
    public function update(ServicesRequest $req)
    {
        $helper = new BaseHelperController();

        $services = Services::find($req['id']);

        if (empty($req['image'])) {
            Storage::disk('public')->delete('image', $services['image']);
        } elseif ($services['image'] != $req['image']) {
            $services['image']  = $helper->store_base64_image($req['image']);
        }
        $services->update([
            'text' => $req->text,
            'sub_text' => $req->sub_text
        ]);

        return redirect(route('services_show'));
    }
    public function delete($id)
    {
        $delete = Services::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();

        return redirect(route('services_show'));
    }
}
