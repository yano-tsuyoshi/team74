<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- タイトル -->
    <title>{{ config('app.name', '') }}</title>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/list.css')}}">


</head>
 
<body>
<div style="width:500px; text-align:center; margin:100px auto;">
    <h4>編集</h4>
    <form action="/courseEdit" method="post">
        @csrf
        <input class="form-control mt-5" type="text" name="id" value="{{$course->id}}" hidden>
        <div class="form-group">
            <input class="form-control mt-5" type="text" name="name" value="{{$course->name}}">
            <input class="form-control mt-5" type="text" name="detail" value="{{$course->detail}}">
            <input class="form-control mt-5" type="text" name="time" value="{{$course->time}}">
            <input class="form-control mt-5" type="text" name="price" value="{{$course->price}}">
            
            <button type="submit" class="btn btn-secondary mt-3">編集</button>
        </div>
        <div class="form-group">
            <a href="/courseDelete/{{$course->id}}"><button type ="button" class="btn btn-secondary mt-2">削除</button></a>
        </div>



    </form>   





</div>
</body>
</html>