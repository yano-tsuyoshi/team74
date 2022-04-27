@extends('layouts.app')

@section('content')

<div class="flow">
    <div class="flow-top">
        <h1>施術の流れ</h1>
        <p>当院は、一人ひとりの体の痛みやお悩みをしっかりお伺いし、
            あなたにあった施術を行なっていきます</p>
    </div>

    <div class="flow-flex">
        <div class="monsin">

            <img class="number" src="/images/number_1.png">
            <h2>受付</h2>
            <img class="flowimg" src="/images/monsinhyou.png">
            <p>受付後、問診票をお渡しします</p>
            <p>ご記入後、受付の方にお渡しください</p>

        </div>

        <div class="monsin">

            <img class="number" src="/images/number_2.png">
            <h2>問診</h2>
            <img class="flowimg" src="/images/monsin.png">
            <p>問診票をもとに、症状について、</p>
            <p>お話をお伺いします。</p>

        </div>
        
    </div>

    <div class="flow-flex">
        <div class="monsin">

        <img class="number" src="/images/number_3.png">
            <h2>検査</h2>
            <img class="flowimg" src="/images/kensa.png">
            <p>症状を元にお体の状態を確認します</p>
            <p>動作や姿勢のチェック、筋肉の硬さなどを確認します</p>
        </div>
        
        <div class="monsin">
        <img class="number" src="/images/number_4.png">
            <h2>プランニング</h2>
            <img class="flowimg" src="/images/monsin.png">
            <p>お身体の状態を説明し</p>
            <p>最適な施術についてご提案します。</p>

        </div>
    </div>

    <div class="flow-flex">
        <div class="monsin">

            <img class="number" src="/images/number_5.png">
            <h2>施術</h2>
            <img class="flowimg" src="/images/seitai.jpg">
            <p>お身体の状態と施術について<br>ご納得いただいた後</p>
            <p>ご提案した施術を行います。</p>

        </div>

        <div class="monsin">

            <img class="number" src="/images/number_6.png">
            <h2>カウンセリング</h2>
            <img class="flowimg" src="/images/monsin.png">
            <p>なぜ痛くなったのか、治らないのかなどの説明と今後の施術計画や<br>日常生活でのアドバイスをお伝えします。</p>
            <p>また次回以降のご予約もお伺いします。</p>

        </div>

    </div>
    
</div>


@endsection