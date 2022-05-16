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
</div>   
    <form action="/courseEdit" method="post">
        @csrf
        <input class="form-control mt-5" type="text" name="id" value="{{$course->id}}" hidden>
            <div class="form-group row justify-content-center ">
                <div class="col-4">
                    <label class="mt-5">コース名:</label>
                    <input class="form-control mt-2" type="text" name="name" value="{{$course->name}}">
                    <label class="mt-4">施術内容:</label>
                    <input class="form-control mt-2" type="text" name="detail" value="{{$course->detail}}">
                    <label class="mt-4">施術時間:</label>
                    <input class="form-control mt-2" type="text" name="time" value="{{$course->time}}">
                    <label class="mt-4">料金:</label>
                    <input class="form-control mt-3" type="text" name="price" value="{{$course->price}}">
            
                    <button type="submit" class="btn btn-secondary mt-4">編集</button>
                        
           
                    <div class="form-group mt-3">
                        <a href="/courseDelete/{{$course->id}}"><button type ="button" class="btn btn-secondary mt-2">削除</button></a>
                    </div>
                </div>
            </div>    


    </form>   






</body>
</html>