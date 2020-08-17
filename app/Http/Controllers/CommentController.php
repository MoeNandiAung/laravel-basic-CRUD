<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use auth;

class CommentController extends Controller
{
    //

    public function create($ArticleId)
    {
    	//dd('Comment');
    	return view('commentCreate', [ 'article' => $ArticleId]);
    }

    public function show($ArticleId)
    {
    	$comment = new Comment();

    	$comment->ArticleId = $ArticleId;
    	$comment->comment = Request('comment');
    	$comment->User = auth::user()->name;

    	$comment->save();

    	$comment = Comment::where('ArticleId', '=',(int)$ArticleId)->get();
    	$article = Article::where('ArticleId', '=',(int)$ArticleId)->first();
    	return view('articleShow', ['comments' => $comment],['articles' => $article]);

    }
}
