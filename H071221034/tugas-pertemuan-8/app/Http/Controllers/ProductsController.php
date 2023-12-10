<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductLines;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        // $productlines = ProductLines::all();
        // return view('index', compact('productlines'));
        return view('index', [
            'productlines' => ProductLines::all()
        ]);
    }

    public function show_all_products(){
        $productlines = ProductLines::all();
        $products = Products::all();
        return view('products', compact('products', 'productlines'));
    }

    public function get_details($value){
        $productlines = ProductLines::all();
        foreach($productlines as $item){
            if($value === $item->productLine){
                $products = Products::all()->where('productLine', $value);
                $description = $item->textDescription;
                return view('products', compact('products', 'productlines', 'description'));
            }
        }

        $productdetails = Products::all()->where('productCode', $value);
        $description = '';
        
        foreach ($productdetails as $item) {
            $description = ProductLines::all()->where('productLine', $item->productLine)->first()->textDescription;
        }

        return view('product_details', compact('productdetails', 'productlines', 'description'));
    }
}
