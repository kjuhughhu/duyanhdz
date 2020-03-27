<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category(){
        $category = Category::all();
        return view('admin.category.index',['category'=>$category]);
    }
}
