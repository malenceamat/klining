<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatisticRequest;
use App\Models\Statistic;

class StatisticController extends Controller
{
    public function index($id = null)
    {
        $statistics = $id ? Statistic::find($id) : new Statistic();

        return view('admin.content.statisctics.statistics_create',compact('statistics'));
    }
    public function create(StatisticRequest $req)
    {
        Statistic::create($req->all());

        return redirect()->route('statistics_show');
    }
    public function show()
    {
        $statistics = Statistic::orderBy('created_at')->get();

        return view('admin.content.statisctics.statistics_show', compact('statistics'));
    }
    public function update(StatisticRequest $req)
    {
        $statistics = Statistic::find($req['id']);

        $statistics->fill($req->only('text', 'sub_text'))->save();

        return redirect(route('statistics_show'));
    }
    public function delete($id)
    {
        $delete = Statistic::find($id);
        $delete->delete();

        return redirect(route('statistics_show'));
    }
}
