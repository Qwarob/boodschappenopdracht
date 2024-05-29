@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Articles</h1>
    <form method="GET" action="{{ route('articles.index') }}">
        <div class="form-group">
            <label for="category">Filter by Category</label>
            <select id="category" name="category" class="form-control">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
