<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;


class SellController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('sell_index');
    }

    public function sell()
    {
        return view('sell');
    }

    public function sell_store(ArticleRequest $request)
    {

        $articles = Article::create(
            [
                'name' => $request->name,
                'mail' => $request->mail,
                'price' => $request->price,
                'object' => $request->object,
                'description' => $request->description,
                // 'img' => $request->file('img')->store('public/articles/img'), //?uso l'altro metodo fuori con "if" così posso lasciare all'utente decidere se caricare un'immagine o meno
            ]
        );

        if ($request->img) {
            $articles->img = $request->file('img')->store('public/article/img');
            $articles->save();
        }
        return redirect(route('welcome'));
    }

    public function sell_index()
    {
        $articles = Article::all()->sortByDesc('created_at');
        return view('sell_index', compact('articles'));
    }

    public function articles_show(Article $article)
    {

        return view('articles_show', compact('article'));
    }

    public function articles_edit(Article $article)
    {

        return view('articles_edit', compact('article'));
    }

    //?Catturo i dati nuovi(Request $request)   //?Prendo l'annuncio da modificare(Article $article)
    public function articles_update(Request $request, Article $article)
    {
        $article->update([
            $article->mail = $request->mail,
            $article->name = $request->name,
            $article->price = $request->price,
            $article->description = $request->description,
            $article->object = $request->object,

        ]);

        if ($request->img) {
            $article->img = $request->file('img')->store('public/articles/img');
        }
        $article->save();

        return redirect(route('sell_index'));
    }

    public function article_delete(Article $article)
    {
        $article->delete();

        return redirect(route('sell_index'));
    }
}
