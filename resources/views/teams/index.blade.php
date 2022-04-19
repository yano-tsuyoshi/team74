@extends('layouts.app')

@section('content')


<div class="toppage">
    <h1>ようこそ!</h1>
    <h1>なんとか鍼灸院へ</h1>
    <div >
        <img class="topimg" src="/images/harikyuu.png">

        <table class="signboard">
        <caption>※予約優先制※</caption>
        <tbody class="signboard1">
            <tr class="signboard2">
                <th><span class="th-white-str">診療時間</span></th>
                <th><span class="th-white-str">月</span></th>
                <th><span class="th-white-str">火</span></th>
                <th><span class="th-white-str">水</span></th>
                <th><span class="th-white-str">木</span></th>
                <th><span class="th-white-str">金</span></th>
                <th><span class="th-white-str">土</span></th>
                <th><span class="th-white-str">日</span></th>
                <th><span class="th-white-str">祝</span></th>
            </tr>
            <tr>
                <td class="tal">9:00～12:00</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>-</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
            </tr>
            <tr>
                <td class="tal">15:30～19:30</td>
                <td>○</td>
                <td>○</td>
                <td>○</td>
                <td>-</td>
                <td>○</td>
                <td>○</td>
                <td>-</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>

    </div>

    
    

</div>



@endsection