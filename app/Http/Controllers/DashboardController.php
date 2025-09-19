<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //for count
    public function index(){
        $totalCategories=Category::count();
        $totalProducts=Product::count();

        return view('dashboard.index',compact('totalCategories','totalProducts'));
    }
}
