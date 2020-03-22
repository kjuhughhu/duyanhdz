<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
//    public function listStudent(){
////        $students = [
////            [
////                "id"=> 1,
////                "firstname"=> 'Nhat',
////                "lastname"=>'Anh',
////                "hometown"=>'hd',
//////                "datbirth"=>'1996-10-27',
//////                "created"=>'1996-10-27',
//////                "updated"=>'1996-10-27',
////            ],
////            [
////                "id"=> 2,
////                "firstname"=> 'Duy',
////                "lastname"=>'Anh',
////                "hometown"=>'hd',
//////                "datbirth"=>'1996-10-27',
//////                "created"=>'1996-10-27',
//////                "updated"=>'1996-10-27',
////            ],
////        ];
////        return view("student_listing",['students'=>$students]);
////    }
    public function home(){
        $product=Product::all();
        return view('home',['product'=>$product]);
    }

}
