<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodbeverage(){
        return view('produk')
        ->with('judul','Daftar Food Beverages')
        ->with('products',['Minuman Boba Kekinian','Minuman Organik Vegan','Rice Box','Sushi dan Ramen','Food Truck']);
    }

    public function beautyhealth(){
        return view('produk')
        ->with('judul','Daftar Beauty Health')
        ->with('products',['Skincare','Pomade','Masker Wajah','haircare','Salep Jerawat']);
    }

    public function homecare(){
        return view('produk')
        ->with('judul','Daftar Home Care')
        ->with('products',['Soklin','Sunlight','Downy','Daia','Molto']);
    }

    public function babykid(){
        return view('produk')
        ->with('judul','Daftar Baby Kid')
        ->with('products',['Popok','Tisu Basah','Popok Krim','Losion','Bedak Bayi']);
    }
}
