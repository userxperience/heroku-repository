<!DOCTYPE html>
<html lang="en">

<head>
    <title>my profile</title>

    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body id=body>


@extends ('layout')
@section('content')
<br><br><br>
you are not logged in, if you have an account you can <a href="login">log in here</a>.
<br>
If you want to make an account, <a href="register">register here</a>
<br><br>
</body>
@endsection
