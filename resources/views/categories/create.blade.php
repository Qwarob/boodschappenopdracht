@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nieuwe categorie toevoegen</h1>
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Naam van de categorie:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
@endsection
