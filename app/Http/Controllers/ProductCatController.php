<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCat;
use Illuminate\Http\Request;

class ProductCatController extends Controller
{
    //
    function index($name) {
        $product_brands = ProductBrand::where('status', '=', 'Active')->get();

        $product_cats = ProductCat::where('status', '=', 'Active')->get();

        $products = Product::select('products.*', 'product_cats.name AS cat_name')
        ->join('product_cats', 'products.cat_id', 'product_cats.id')
        ->where([
            ['product_cats.name', '=', $name],
            ['products.status', '=', 'Active'],
        ])->paginate(9);

        $check_cat = ProductCat::where([
            ['status', '=', 'Active'],
            ['name', '=', $name],
            ])->first();
            
        if($check_cat == null) {
            return redirect()->route('home_page');
        }

        return view('customer.product.category', compact('products', 'product_cats', 'product_brands', 'name'));
    }

}
