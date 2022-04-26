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
    <link rel="stylesheet" href="{{asset('/css/list.css')}}">

</head>
 
<body>


<div class="course_top">
    <h4 class="my-3 ml-3">コース一覧</h4>
    <div class ="register-link" >
        <a href= "/courses/register">追加</a>
    </div>
    
        <table class="table table-bordered " >
          
            <tr>
                <th class="col-1 text-center"></th>
                <th class="col-3 text-center"> コース名</th>
                <th class="col-4 text-center"> 施術内容</th>
                <th class="col-1 text-center"> 施術時間</th>
                <th class="col-2 text-center"> 料金</th>
                <th class="col-1 ">&nbsp; </th>
            
            
            </tr>    

            @foreach($course as $value)
                <tr>
                    <td class="text-center">{{$value->id}}</td>
                    <td class="text-center"> {{$value->name}} </td>
                    <td class="text-center"> {{$value->detail}} </td>
                    <td class="text-center"> {{$value->time}} </td>
                    <td class="text-center"> {{$value->price}} </td>
                    <td class="text-center"><a href="/courses/edit/{{$value->id}}">編集</a></td>

                </tr>    
            @endforeach
                 
        </table>        
    



</div>

</body>
</html>