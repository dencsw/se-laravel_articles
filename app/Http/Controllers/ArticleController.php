<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        
        $symbol_code = $request->get('symbol_code');
        $title = $request->get('title');
        $tag = $request->get('tag');

        // Запрос к бд
        $query = Article::query();

        // Фильтрация по символьному коду
        if ($symbol_code) {
            $query->where('symbol_code', 'like', '%' . $symbol_code . '%');
        }

        // Фильтрация по названию
        if ($title) {
            $query->where('title', 'like', '%' . $title . '%');
        }

        // Фильтрация по тегу
        if ($tag) {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('symbol_code', 'like', '%' . $tag . '%');
            });
        }

        //статьи с постраничной навигацией
        $articles = $query->paginate(10);

        
        $tags = Tag::all();

        return view('posts.index', compact('articles', 'tags'));
    }

public function show($code)
    {
        // Поиск статьи по коду
        $article = Article::where('symbol_code', $code)->first();

        // Если не найдена, вывод 404
        if (!$article) {
            abort(404, 'Статья не найдена');
        }


        $tags = $article->tags()->orderBy('name')->get();

     
        return view('posts.show', compact('article', 'tags'));
    }
}
