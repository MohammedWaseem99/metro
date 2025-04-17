<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('cliant.index');
    }

    public function contact()
    {
        return view('cliant.contact');
    }
    public function cart()
    {
        return view('cliant.shoping-cart');
    }
    public function wishlist()
    {
        return view('cliant.wishlist');
    }
    public function checkout()
    {
        return view('cliant.checkout');
    }
    public function blog_details()
    {
        return view('cliant.blog_details');
    }


}
