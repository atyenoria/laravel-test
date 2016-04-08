<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

public function about(){



    // $result = "sample";
    // $sample = \App\Article::all()->toArray();

    // echo "<pre>";
    // var_dump($sample);
    // echo "</pre>";

    // $sample = \App\Article::find(1)->toArray();

    // echo "<pre>";
    // var_dump($sample);
    // echo "</pre>";
    // $result = $sample['title'];


    // echo "<pre>";
    // var_dump($sample);
    // echo "</pre>";


    // $result = \App\Article::count();
    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";



    // $result = \App\Article::where('id', '>', 1)->count();
    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";

    // $result = \App\Article::where('id', '>', 1)->count();
    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";
    \App\Article::create(['title' => '３件目の記事', 'body' => '吾輩は猫である', 'published_at' => \Carbon\Carbon::now()]);

    var_dump(\App\Article::all()->toArray());

    // $result = \App\Article::where('title', '=', 'sample');
    // echo "<pre>";
    // var_dump($result);
    // $result->delete();


    $article = new \App\Article();

    $article->title = \Carbon\Carbon::now();
    $article->body = str_random(40);
    $article->save();




    $result ="sample";
    return view('pages.about', compact('result'));

}

}
