<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdventagesRequest;
use App\Models\Advantages;

class AdvantagesController extends Controller
{
    public function index($id = null)
    {
        $advantages = $id ? Advantages::find($id) : new Advantages();

        return view('admin.content.advantages.advantages_create',compact('advantages'));
    }
    public function create(AdventagesRequest $req)
    {
        Advantages::create($req->all());

        return redirect()->route('advantages_show');
    }
    public function show()
    {
        $advantages = Advantages::orderBy('created_at')->get();

        return view('admin.content.advantages.advantages_show', compact('advantages'));
    }
    public function update(AdventagesRequest $req)
    {
        $advantages = Advantages::find($req['id']);

        $advantages->fill($req->only('text', 'sub_text'))->save();

        return redirect(route('advantages_show'));
    }
    public function delete($id)
    {
        $delete = Advantages::find($id);
        $delete->delete();

        return redirect(route('advantages_show'));
    }
}
