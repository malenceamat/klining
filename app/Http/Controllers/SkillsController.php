<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\BaseHelperController;
use App\Http\Requests\SkillsRequest;
use App\Models\Skills;
use Illuminate\Support\Facades\Storage;

class SkillsController extends Controller
{
    public function index($id = null)
    {
        $skills = $id ? Skills::find($id) : new Skills();

        return view('admin.content.skills.skills_create',compact('skills'));
    }
    public function create(SkillsRequest $req)
    {
        $helper = new BaseHelperController();

        Skills::create(array_merge($req->all(),['image' => $helper->store_base64_image($req['image'])]));

        return redirect()->route('skills_show');
    }
    public function show()
    {
        $skills = Skills::orderBy('created_at')->get();

        return view('admin.content.skills.skills_show', compact('skills'));
    }
    public function update(SkillsRequest $req)
    {
        $helper = new BaseHelperController();

        $skills = Skills::find($req['id']);

        if (empty($req['image'])) {
            Storage::disk('public')->delete('image', $skills['image']);
        } elseif ($skills['image'] != $req['image']) {
            $skills['image']  = $helper->store_base64_image($req['image']);
        }
        $skills->update([
            'text' => $req->text,
            'sub_text' => $req->sub_text
        ]);

        return redirect(route('skills_show'));
    }
    public function delete($id)
    {
        $delete = Skills::find($id);
        Storage::disk('public')->delete('image', $delete['image']);
        $delete->delete();

        return redirect(route('skills_show'));
    }
}
