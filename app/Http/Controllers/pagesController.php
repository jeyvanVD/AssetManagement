<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function signup_1(){
        return view('signup-1');
    }

    public function signup_2(){
        return view('signup-2');
    }

    public function assetList(){
        return view('asset-list');
    }

    public function assetNew(){
        return view('asset-new');
    }

    public function assetReturn(){
        return view('asset-return');
    }

    public function assetUsage(){
        return view('asset-usage');
    }

    public function assetDelete(){
        return view('asset-delete');
    }
}
