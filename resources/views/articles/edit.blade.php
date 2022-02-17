<head>
    <title>feed</title>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

@extends ('layout')
@section('content')

    <form method ="POST" action="/articles/ {{$article->id}}">
        @csrf
        @method('PUT')
        <label for="title">title:</label><br>
        <input type="text" name="title" value="{{$article->title}}"><br>
        <label for="excerpt">excerpt:</label><br>
        <input type="text"  name="excerpt"value="{{$article->excerpt}}"><br><br>
        <label for="body">body:</label><br>
        <input type="text"  name="body"value="{{$article->body}}"><br><br>
        <input type="submit" value="Submit">

    </form>
<br><br><br><br>
    <h1>DELETE BUTTON</h1>
    <form method="POST" action="/articles/{{ $article->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>

    </form>

@endsection
