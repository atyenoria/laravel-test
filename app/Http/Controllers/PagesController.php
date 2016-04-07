<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

public function about(){

    $first_name = "akirnori";
    $second_name = "nakajima";

    return view('pages.about', compact('first_name','second_name'));

}

}
