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
        <h4>コース登録</h4>
    </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
        <form action="/courseRegister" method="post">
            @csrf
            <div class="form-group row justify-content-center">
                <div class="col-4">
                    <label class="mt-5">コース名：</label>
                    <input class="form-control mt-2" type="text" name="name" placeholder="コース名">
                    <label class="mt-4">施術内容：</label>
                    <input class="form-control mt-2" type="text" name="detail" placeholder="施術内容">
                    <label class="mt-4">施術時間：</label>
                    <input class="form-control mt-2" type="text" name="time" placeholder="施術時間">
                    <label class="mt-4">料金：</label>
                    <input class="form-control mt-2" type="text" name="price" placeholder="料金">
                    <button type="submit" class="btn btn-secondary mt-4 ">登録</button>
                </div>
            </div>
                 
        </form>   

    </div>



    
</body>
</html>