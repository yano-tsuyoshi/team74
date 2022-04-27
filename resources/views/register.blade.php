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
    <link rel="stylesheet" href="{{ asset('css/staff.css')}}">


</head>
 
<body>



<div style="width:500px; text-align:center; margin:100px auto;">
    <h4>管理者登録</h4>
    <form action="/staffRegister" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control mt-5" type="text" name="name" placeholder="名前">
            
            <button type="submit" class="btn btn-secondary mt-3 ">登録</button>
        </div>
</form>   





</div>
</body>
</html>