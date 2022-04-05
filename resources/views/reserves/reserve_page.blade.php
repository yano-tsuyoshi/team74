@extends('layouts.app')
@section('content')
@include('common.errors')

<head>
    <!-- CSS - Bootstrap 5.0.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- CSS - jQuery for Calendar (DatePicker) -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
    <!-- JavaScript / jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <!-- ローカルJSファイル -->
    <script src="{{ asset('/js/reserve_modal_confirm.js') }}"></script>

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
        <div class="form-group">
            <h1 class="top-title">予約フォーム</h1>
            <form method="POST" action="{{ url('reserve') }}">
                {{ csrf_field() }}
                <p>
                    ユーザーID：<?php echo $user->id; ?><br>
                    予約者名：<?php echo $user->name; ?><br>
                    予約内容を確認したい場合はこちら：<a href="reserve_show">予約一覧</a>
                </p>
                <input type="hidden" value="<?php echo $user->id; ?>" name="user_id" id="user_id">
                <input type="hidden" value="<?php echo $user->name; ?>" name="name" id="name">

                <p class="form-index">カレンダーから日付を選択してください</p>
                <div class="input-area">
                    <input type="text" name="date" id="date_val">
                    <div id="datepicker" class="datePicker"></div>
                </div>

                <div class="input-area">
                    <p class="form-index">時間帯を選択してください</p>
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

                <div class="input-area">
                    <p class="form-index">コースを選択してください</p>
                    <select name="course_id" id="course_id">
                        <option value="">選択してください</option>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-area">
                    <p class="form-index">ご希望の施術スタッフを選択してください</p>
                    <select name="staff_id" id="staff_id">
                        <option value="">選択してください</option>
                        @foreach($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-area">
                    <p class="form-index">その他ご要望があればご記入ください</p>
                    <textarea value="" name="detail" id="detail" class="textarea-large"></textarea>
                </div>
                <!-- <div class="input-area">
                    <button type="submit" class="btn-primary">予約する</button>
                </div> -->
                <div class="input-area">
                    <button class="js-modal-open btn-primary" href="" data-target="confirmModal">予約確認</button>
                </div>

                <div class="modal js-modal" id="confirmModal">
                    <div class="modal__bg js-modal-close"></div>
                    <!-- Modal Contents -->
                    <div class="modal__content">
                        <p>以下の通り予約します。ご確認のうえ「予約を確定する」ボタンを押してください</p>
                        <div>
                            <table class="reserveConfirm">
                                <tr>
                                    <td class="align-right">お名前：</td>
                                    <td><?php echo $user->name; ?></td>
                                </tr>
                                <tr>
                                    <td class="align-right">日付：</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="align-right">時間：</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="align-right">コース：</td>
                                    <td>{{ $course->name }}</td>
                                </tr>
                                <tr>
                                    <td class="align-right">スタッフ：</td>
                                    <td>{{ $staff->name }}</td>
                                </tr>
                                <tr>
                                    <td class="align-right">コメント：</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-area">
                            <div class="btns-box">
                                <button type="reset" class="btn-secondary js-modal-close">キャンセル</button>
                                <button type="submit" class="btn-primary">予約する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>