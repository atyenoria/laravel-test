<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Article;
use Session;
use App\Http\Requests;

use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{

    public function index(){
        // $articles = Article::all();
        // $articles = Article::latest('published_at')->get();
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
        }

    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create(){
        $test= array();
        $test['now'] = \Carbon\Carbon::now();
        $test['time'] = \Carbon\Carbon::now();
        $first_name = "Luke";
        $last_name = "Skywalker";
        return view('articles.create', compact('test'));
    }

    public function store(ArticleRequest $request){
        Article::create($request->all());
        Session::flash('flash_message', '記事を追加しました。');
        return redirect()->route('articles.index');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect(url( 'articles' , [$article->id]) );
    }

    public function destroy($id){
        $article = Article::findOrFail($id);
        $article->delete();
        \Session::flash('flash_message', '記事を削除しました。');

        return redirect('articles');
    }

}