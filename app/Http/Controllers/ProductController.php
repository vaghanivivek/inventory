<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    //
    function listproduct()
    {
        $data=Product::all();
        return view('_productlist',["data"=>$data]);
    }

    function addproduct(Request $req)
    {
        //return $req->input();
        $pro = new Product;
        $pro->product_id;
        $pro->product_name=$req->input('pname');
        $pro->product_desc=$req->input('pdesc');
        $pro->product_price=$req->input('pprice');
        $pro->save();
        $req->session()->flash('status','Product Added Sucessfully');
        return redirect('product_list');
    }

    function deleteproduct($product_id)
    {
        
        DB::delete('delete from products where product_id = ?',[$product_id]);
        // $pro = new Product;
        // $pro->product_name=$req->input('pname');
        // $pro->product_desc=$req->input('pdesc');
        // $pro->product_price=$req->input('pprice');
        // $pro->save();
        // $req->session()->flash('status','Product Added Sucessfully');
        return redirect('product_list');
    }
}
