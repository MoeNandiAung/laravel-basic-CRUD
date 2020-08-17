<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use auth;

class ArticleController extends Controller
{
    //
    public function show($ArticleId){

        
        $article = Article::where('ArticleId', '=',(int)$ArticleId)->first();
        $comment = Comment::where('ArticleId', '=',(int)$ArticleId)->get();
        //dd($article->title);
    	//$article = Article::find(rticleId);
        //return $article;
    	return view('articleShow', ['articles'=> $article],['comments' => $comment]);
    }

    public function create()
    {
    

        return view('articleCreate');
    }

    public function store()
    {

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->category = request('category');
        $article->Creator_name = auth::user()->name;

        $article->save();
        return redirect('/article');
    }

    public function edit($ArticleId)
    {
        $article = Article::where('ArticleId', '=',(int)$ArticleId)->first();
        

        return view('articleEdit',['articles'=> $article]);

    }

    public function update($ArticleId)
    {

        //$article = Article::where('ArticleId', '=',(int)$ArticleId)->first();
        $user = auth::user()->name;
        Article::where('ArticleId', '=', $ArticleId)->update(['title'=> request('title')], ['excerpt' => request('excerpt')],['body' => request('body')],['category'=> request('category')],['Creator_name' => $user]);
        /*
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->category = request('category');
        $article->Creator_name = auth::user()->name;*/

        return redirect('/article');

    }

    public function delete($ArticleId)
    {


        Article::where('ArticleId', '=',(int)$ArticleId)->delete();

        

        return redirect('/article');


    }

   
}
