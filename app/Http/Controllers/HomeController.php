<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;



class HomeController extends Controller
{
    public function home() {
        $data =[

            'viaggi' => Trip::all()
            
        ];
        return view('home', $data);
    }
}

