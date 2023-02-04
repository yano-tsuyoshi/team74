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


    <div class="list_top">
     <h4 class="my-3 ml-3">予約一覧</h4>
         <table class="table table-bordered" >
            <tr>
                <th class="col-1 text-center">&nbsp;</th>
                <th class="col-2 text-center">お客様氏名</th>
                <th class="col-2 text-center">予約コース</th>
                <th class="col-1 text-center">担当</th>
                <th class="col-1 text-center">予約日</th>
                <th class="col-1 text-center">予約時間</th>
                <th class="col-3 text-center">症状</th>
            </tr>    

            @foreach($reserve as $value)
                <tr>
                    <td class="text-center">{{$value->id}}</td>
                    <td class="text-center">{{$value->name}}</td>
                    <td class="text-center">{{$value->staff_id}}</td>
                    <td class="text-center">{{$value->course_id}}</td>
                    <td class="text-center">{{$value->date}}</td>
                    <td class="text-center">{{$value->time}}</td>
                    <td class="text-center">{{$value->detail}}</td>
                </tr>    
            @endforeach
                 
         </table>        
    



    </div>

</body>
</html>