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
    <link rel="stylesheet" href="{{asset('/css/staff.css')}}">

</head>
 
<body>


<div class="top">
    <h4 class="my-3 ml-3">管理者一覧</h4>
    <div class ="register-link" >
        <a href= "/register">追加</a>
    </div>
    
        <table class="table table-bordered" >
          
            <tr>
                <th class="col-2 text-center">No</th>
                <th class="col-8 text-center"> 名前</th>
                <th class="col-2 ">&nbsp; </th>
            </tr>    

            @foreach($staff as $value)
                <tr>
                    <td class="text-center">{{$value->id}}</td>
                    <td class="text-center"> {{$value->name}} </td>
                    <td class="text-center"><a href="/edit/{{$value->id}}">編集</a></td>

                </tr>    
            @endforeach
                 
        </table>        
    



</div>

</body>
</html>