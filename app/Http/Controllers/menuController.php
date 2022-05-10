<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    public function indexAction(){
        $product = $_GET["product"];
        return view('client/menupage', ['prod' => $product]);
    }
}
