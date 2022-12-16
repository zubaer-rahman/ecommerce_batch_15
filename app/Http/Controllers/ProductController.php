<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view('admin.product.add-product');
    }
    public function saveProduct(Request $request){
        Product::saveProduct($request);
        return redirect(route('manage.product'));
    }
    public function manageProduct(){
        return view('admin.product.manage-product', [
            'products'=> Product::all()
        ]);
    }
    public function changeStatus($id){
        Product::changeStatus($id);
        return redirect(route('manage.product'));
    }
}
