<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        echo 'List product';
    }
    public function getProduct($id, $name){
        echo $id;
        echo $name;
    }
}
