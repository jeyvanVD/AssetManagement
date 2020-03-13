<?php

namespace App\Http\Controllers;

use App\Assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class assetController extends Controller
{
    public function index()
    {
        $assets = Assets::all();

        return view('asset-list', compact('assets'));
    }

    public function store()
    {

        request()->validate([
            'brand' => ['required', 'min:2', 'max:255'],
            'serial_number' => ['required', 'min:1', 'max:20'],
            'date_of_purchase' => ['required'],
            'series_number' => ['required', 'min:2', 'max:255'],
            'model' => ['required', 'min:2', 'max:255'],

        ]);
        $Asset = new Assets();
        $Asset->category = request('category');
        $Asset->brand = request('brand');
        $Asset->model = request('model');
        $Asset->serial_number = request('serial_number');
        $Asset->date_of_purchase = request('date_of_purchase');
        $Asset->series_number = request("series_number");
        $Asset->user = ('');
        $Asset->availability = ('YES');
        $Asset->save();

        return view('asset-new-complete');

    }

    public function edit(Request $request)
    {
        request()->validate([
            'serial_number' => 'required_without:series_number',
            'series_number' => 'required_without:serial_number',
        ]);
        $serial_number = $request->serial_number;
        $series_number = $request->series_number;
        $article = Assets::where('serial_number', $serial_number)->orWhere('series_number' , $series_number)->first();
        return view('asset-usage-2', compact('article'));
    }

    public function edit2(Request $request)
    {
        request()->validate([
            'serial_number' => 'required_without:series_number',
            'series_number' => 'required_without:serial_number',
        ]);

        $serial_number = $request->serial_number;
        $series_number = $request->series_number;
        $article = Assets::where('serial_number', $serial_number)->orWhere('series_number' , $series_number)->first();
        return view('asset-return-2', compact('article'));
    }

    public function edit3(Request $request)
    {
        request()->validate([
            'serial_number' => 'required_without:series_number',
            'series_number' => 'required_without:serial_number',
        ]);

        $serial_number = $request->serial_number;
        $series_number = $request->series_number;
        $article = Assets::where('serial_number', $serial_number)->orWhere('series_number' , $series_number)->first();
        return view('asset-delete-2', compact('article'));
    }


    public function update(Request $request)
    {
        $article = Assets::find($request->id);
        $article->user = $request->user;
        $article->availability = ('NO');
        $article->save();

        return view('asset-usage-complete');

    }

    public function update2(Request $request)
    {
        $article = Assets::find($request->id);
        $article->user = ('');
        $article->availability = ('YES');
        $article->save();

        return view('asset-return-complete');

    }

    public function delete(Request $request)
    {
        $article = Assets::find($request->id);
        $article->delete();

        return view('asset-delete-complete');

    }

}
