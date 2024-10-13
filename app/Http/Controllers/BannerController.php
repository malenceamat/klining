<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::firstORCreate();

        return view('admin.content.banner.banner',compact('banner'));
    }
    public function create(BannerRequest $req)
    {
        $helper = new BaseHelperController();
        $banner = Banner::first();
        if (!empty($banner) && $req['image'] != $banner['image']) {
            Storage::disk('public')->delete('image', $banner['image']);
            $banner['image']  = $helper->store_base64_image($req['image']);
        }
        $banner->text = $req['text'];
        $banner->sub_text = $req['sub_text'];
        $banner->save();

        return redirect()->route('banner');
    }
}
