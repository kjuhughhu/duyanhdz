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
        $newests = Product::take(3)->orderBy('created_at','desc')->get();
        $max_price = Product::take(3)->orderBy('price','desc')->get();
        $min_price = Product::take(3)->orderBy('price','asc')->get();
        return view("home",['max_price'=> $max_price,'newests'=>$newests,'min_price'=>$min_price]);
    }

    public function product(){
        $product =Product::find(1)->get(); //tra ve 1 object theo id
        $category_product= Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(10)->get();
        $brand_product= Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
    }
    public function listproduct($id){
        $listproduct = Product::where("category_id",$id)->take(1)->orderBy('created_at','desc')->get();
        return view('listproduct',['listproduct'=>$listproduct]);
    }
    public function shop(){
        return view("html.shop");
    }
    public function shop_single(){
        return view("html.shop_single");
    }



}
