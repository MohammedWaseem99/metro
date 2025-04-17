<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash()
    {
        return view('admin.index');
    }
    public function add_cat()
    {
        return view('admin.page-add-category');
    }
    public function list_cat()
    {
        return view('admin.page-list-category');
    }
   
    public function add_product()
    {
        return view('admin.page-add-product');
    }
    public function edit_product()
    {
        return view('admin.page-update-product');
    }

    public function add_sale()
    {
        return view('admin.page-add-sale');
    }
    public function list_sale()
    {
        return view('admin.page-list-sale');
    }
    public function add_purchases()
    {
        return view('admin.page-add-purchase');
    }
    public function list_purchases()
    {
        return view('admin.page-list-purchase');
    }
    public function add_returns()
    {
        return view('admin.page-add-return');
    }
    public function list_returns()
    {
        return view('admin.page-list-returns');
    }


}
