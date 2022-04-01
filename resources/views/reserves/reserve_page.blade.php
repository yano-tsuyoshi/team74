@extends('layouts.app')
@section('content')
@include('common.errors')

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
    <!-- JavaScript / jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script>
        $(function() {
            var dateFormat = 'y-m-d';
            $("#datepicker").datepicker({
                dateFormat: dateFormat,
                minDate: 0,
                onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
                }
            });
        });
    </script>
</head>

<!-- 2. フォームの見た目 -->
<!-- 3. 時間あるなら予約データ編集・削除機能 -->

<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="topTitle">予約フォーム</h1>
            <form method="POST" action="{{ url('reserve') }}">
                {{ csrf_field() }}
                <p>
                    ユーザーID：<?php echo $user->id; ?><br>
                    予約者名：<?php echo $user->name; ?>
                </p>
                <input type="hidden" value="<?php echo $user->id; ?>" name="user_id">
                <input type="hidden" value="<?php echo $user->name; ?>" name="name">

                カレンダーから日付を選択してください
                <div class="inputContents">
                    <input type="text" id="date_val" name="date">
                    <div id="datepicker" class="datePicker"></div>
                </div>

                <div class="inputContents">
                    時間帯を選択してください
                    <select name="time">
                        <option value="">選択してください</option>
                        <option value="10:00:00">10:00</option>
                        <option value="11:00:00">11:00</option>
                        <option value="12:00:00">12:00</option>
                        <option value="13:00:00">13:00</option>
                        <option value="14:00:00">14:00</option>
                        <option value="15:00:00">15:00</option>
                        <option value="16:00:00">16:00</option>
                        <option value="17:00:00">17:00</option>
                        <option value="18:00:00">18:00</option>
                    </select>
                </div>

                <div class="inputContents">
                    コースを選択してください
                    <select name="course_id">
                        <option value="">選択してください</option>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="inputContents">
                    ご希望の施術スタッフを選択してください
                    <select name="staff_id">
                        <option value="">選択してください</option>
                        @foreach($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="inputContents">
                    その他ご要望があればご記入ください
                    <textarea value="" name="detail" class="textAreaLarge"></textarea>
                </div>
                <div class="inputContents">
                    <input type="submit" value="予約する" class="btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>