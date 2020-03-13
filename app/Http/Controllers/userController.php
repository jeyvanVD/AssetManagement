<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function store(){

        request()->validate([
            'full_name' => ['required','max:255','min:4'],
            'email' => ['required','max:255','min:4'],
            'phone_number' => ['required','digits_between:9,12'],
            'password' => ['required','max:255','min:8','confirmed'],
        ]);
        $User = new User();
        $User -> full_name = request('full_name');
        $User -> email = request('email');
        $User -> country_code = request('country_code');
        $User -> phone_number = request('phone_number');
        $User -> password = bcrypt(request('password'));
        $User -> save();

        return view('signup-2');
    }
}
