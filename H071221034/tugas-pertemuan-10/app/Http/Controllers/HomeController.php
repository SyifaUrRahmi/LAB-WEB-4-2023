<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend/welcome');
    }

    public function contact(){
        return view('frontend/contact');
    }

    public function detail(){
        return view('frontend/detail');
    }

    public function get_all_cars(){
        $cars = Car::all();
        return view('frontend/cars', compact('cars'));
    }
}
