@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        
        <div class="article-details">
            <p><strong>Символьный код:</strong> {{ $article->symbol_code }}</p>
            <p><strong>Содержание:</strong> {{ $article->content }}</p>
            <p><strong>Автор:</strong> {{ $article->author }}</p>
            <p><strong>Дата создания:</strong> {{ $article->created_at->format('d.m.Y H:i') }}</p>
        </div>

        @if ($tags->isNotEmpty())
            <div class="tags">
                <h3>Теги</h3>
                <ul>
                    @foreach ($tags as $tag)
                        <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>
            </div>
        @else
            <p>У этой статьи нет тегов.</p>
        @endif
    </div>
@endsection
