<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function menu()
    {
        return view('menu');
    }
    public function events()
    {
        return view('events');
    }
    public function chefs()
    {
        return view('chefs');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function BookingTable()
    {
        return view('BookingTable');
    }
}
