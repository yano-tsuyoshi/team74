@extends('layouts.app')
 
@section('content')

<div class="course_top">
    <div class="course_inner">
        <h1 class="my-3 ml-3">コース一覧</h1>
        <!-- <div class ="register-link" >
            <a href= "/courses/register">追加</a>
        </div> -->
        
            <table class="table_table-bordered" >
                <tr>
                    <!-- <th class="col-1 text-center"></th> -->
                    <th class="col-3 text-center"> コース名</th>
                    <th class="col-4 text-center"> 施術内容</th>
                    <th class="col-1 text-center"> 施術時間</th>
                    <th class="col-2 text-center"> 料金</th>
                    <!-- <th class="col-1 ">&nbsp; </th> -->
                
                
                </tr>    

                @foreach($course as $value)
                    <tr>
                        <!-- <td class="text-center">{{$value->id}}</td> -->
                        <td class="text-center"> {{$value->name}} </td>
                        <td class="text-center"> {{$value->detail}} </td>
                        <td class="text-center"> {{$value->time}} 分</td>
                        <td class="text-center"> {{$value->price}} 円</td>
                        <!-- <td class="text-center"><a href="/courses/edit/{{$value->id}}">編集</a></td> -->

                    </tr>    
                @endforeach
                    
            </table>
    </div>

        <div class="course_bottom">
            <div class="course1" >
                <h1>鍼灸治療</h1>
                <img class='course_img' src="/images/鍼images.jpeg">
                <img class='course_img' src="/images/image.png">
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
                

            </div>
            <div class="course2">
                <h1>整体治療</h1>
                <img class='course_img' src="/images/seitai.jpg">
                <img class='course_img' src="/images/image.png">
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
            </div>
        </div>
        
       
    
</div>


    


 
<!-- <div class="course">
    <div class="course-top">
        <h1>施術コース</h1>
    </div>

    <div class="course1">
        <img class=hariimg src="/images/鍼images.jpeg">
        <ul>
            <b>鍼灸治療</b>
            <li>30分3000円</li>
            <li>30分3000円</li>
            <li>30分3000円</li>
        </ul>
    </div>

    <div class="course2">
        <img class=seitaiimg src="/images/seitai.jpg">
        <ul>
            <b>整体治療</b>
            <li>30分3000円</li>
            <li>30分3000円</li>
            <li>30分3000円</li>
        </ul>
    </div>

</div> -->

@endsection
