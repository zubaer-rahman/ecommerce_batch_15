<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static $product, $image, $imageNewName, $imgUrl, $directory;
    public static function saveProduct($request){
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = self::getImgUrl($request);
        self::$product->save();
    }
    private static function getImgUrl($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'adminAsset/product-image/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    public static function changeStatus($id){
        self::$product = Product::find($id);
        if(self::$product->status == 1){
            self::$product->status = 0;
        } else{
            self::$product->status = 1;
        }
        self::$product->save();
    }
}
