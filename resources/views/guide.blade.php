@extends('layouts.app')
 
@section('content')


<div class="guide">

    <h1>院長からの挨拶</h1>
    <div class="flex">
        <div class="textarea">
            <b >院長/{{$intyou->name}} </b>
            <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
            <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
        </div>
        <div class="imgarea">
            <img class="intyouimg" src="/images/intyou.png">
        </div>
    </div>

    <h1>スタッフ</h1>
    <div class="staff">
        <div class="flexA">
            <div class="imgareaA">
                <img src="/images/stuff1.jpeg">
            </div>
            <div class="textarea">
                <b>スタッフ/{{$staffA->name}}</b>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
            </div>
        </div>

        <div class="flexB">
            <div class="textarea">
                <b>スタッフ/{{$staffB->name}}</b>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
            </div>
            <div class="imgareaB">
            <img src="/images/stuff2.jpeg">
            </div>
        </div>
    </div>
    

    <!-- <div>
        <h1>なんとか鍼灸院</h1>
        <img src="/images/harikyuu.png">
    </div> -->

    <div class="top">
    <h4 class="my-3 ml-3">管理者一覧</h4>
    <div class ="register-link" >
        <a href= "/staffs/register">追加</a>
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
                    <td class="text-center"><a href="/staffs/edit/{{$value->id}}">編集</a></td>

                </tr>    
            @endforeach
                 
        </table>        

</div>

</div>

@endsection