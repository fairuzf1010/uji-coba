<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\City;
use App\State;

class HomeController
{
    public function index()
    {
        $guna = User::all();

        return view('home',['user'=>$guna]);
    }


    public function data()
    {
        $guna = User::all();

        return view('adminpage',['user'=>$guna]);
    }

    public function wilayah()
    {
        $cities = City::all();
        $states = State::all();
        return view('daftarkota',['city'=>$cities,'state'=>$states]);
    }

}
