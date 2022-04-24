@extends('layouts.app')
 
@section('content')

<div class="guide">

    <h1>院長からの挨拶</h1>
    <div class="flex">
        <div class="textarea">
            <b >院長/山田太郎</b>
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
                <b>スタッフA</b>
                <p>コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</p>
            </div>
        </div>

        <div class="flexB">
            <div class="textarea">
                <b>スタッフB</b>
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

</div>

@endsection