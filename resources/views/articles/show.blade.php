@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    @if($article->is_premium && !Auth::user()->is_premium)
        <p>This content is for premium users only.</p>
    @else
        <p>{{ $article->content }}</p>
        @if($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image">
        @endif
    @endif
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to Articles</a>
</div>
@endsection
