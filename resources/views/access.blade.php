@extends('layouts.app')

@section('content')

<div class="footerflex">

    <address class="footer">
        <ul class="footer1">

            <li><span class="footer-d">ご予約優先制</span> <span class="footer-d">土・祝日診療</span></li>

            <li><span class="footer-d">木曜休診</span> <span class="footer-d">往診できます</span></li>

        </ul>
        <p class="footer2">鍼灸保険取扱・鍼灸治療・手技療法<br>
            予防医療、四十肩・五十肩、腰痛・ぎっくり腰</p>
        <ul class="footer3">
            <li class="font-size-1">〒551-0000</li>
            <li class="font-size-1 mb-3">大阪府豊中市１−１−１</li>
            <li class="foot-i01"><a class="btn btn-sm btn-primary btn-pill transition-3d-hover" href="tel:0665560009">電話:06-6666-3333</a></li>
        </ul>
    </address>

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




@endsection