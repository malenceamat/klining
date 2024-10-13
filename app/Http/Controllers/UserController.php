<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantages;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Statistic;

class UserController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $about = About::first();
        $statistics = Statistic::get();
        $advantages = Advantages::get();
        $skills = Skills::get();
        $services = Services::get();
        $contact = Contact::first();
        $gallery = Gallery::get();
        return view('content.index_content',compact('banner','about','statistics','advantages','skills','services','contact','gallery'));
    }
}
