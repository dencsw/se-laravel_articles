@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список статей</h1>

        <!-- Форма для фильтров -->
        <form method="GET" action="{{ route('posts.index') }}">
            <div class="form-group">
                <label for="symbol_code">Символьный код</label>
                <input type="text" name="symbol_code" id="symbol_code" class="form-control" value="{{ request('symbol_code') }}">
            </div>

            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ request('title') }}">
            </div>

            <div class="form-group">
                <label for="tag">Тег</label>
                <select name="tag" id="tag" class="form-control">
                    <option value="">Выберите тег</option>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->symbol_code }}" {{ request('tag') == $tag->symbol_code ? 'selected' : '' }}>
                            {{ $tag->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Применить фильтры</button>
        </form>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Символьный код</th>
                    <th>Содержание</th>
                    <th>Автор</th>
                    <th>Дата создания</th>
                    <th>Теги</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->symbol_code }}</td>
                        <td>{{ Str::limit($article->content, 100) }}</td>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->created_at }}</td>
                        <td>
                            @foreach($article->tags as $tag)
                                <span class="badge badge-secondary">{{ $tag->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Постраничная навигация -->
        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
