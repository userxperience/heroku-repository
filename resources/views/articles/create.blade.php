<head>
    <title>feed</title>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

@extends ('layout')
@section('content')

    <form method ="POST" action="/articles">
        @csrf
        <label for="title">title:</label><br>
        <input type="text" name="title"><br>
        <label for="excerpt">excerpt:</label><br>
        <input type="text"  name="excerpt"><br><br>
        <label for="body">body:</label><br>
        <input type="text"  name="body"><br><br>
        <input type="submit" value="Submit">

    </form>
@endsection
