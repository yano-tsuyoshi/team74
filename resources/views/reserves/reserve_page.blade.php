@extends('layouts.app')
@section('content')
@include('common.errors')

<head>
    <!-- CSS - Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- CSS - jQuery for Calendar (DatePicker) -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
    <!-- JavaScript / jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <!-- ローカルJSファイル -->
    <script src="{{ asset('/js/reserve_modal_confirm.js') }}"></script>
    <!-- <script src="{{ asset('/js/reserve_choice_course.js') }}"></script> -->

    <script>
        $(function() {
            var dateFormat = 'y-m-d';
            $("#datepicker").datepicker({
                dateFormat: dateFormat,
                minDate: 0,
                onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
                    $("#date_confirm").text(dateText);
                }
            });
        });
    </script>
</head>

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
                    <div id="datepicker" class="date-picker"></div>
                    <input type="text" name="date" id="date_val">
                </div>

                <div class="input-area">
                    <p class="form-index">時間帯を選択してください</p>
                    <select name="time" id="time_val">
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
                        <option value="18:00:00">19:00</option>
                    </select>
                </div>

                <div class="input-area">
                    <p class="form-index">コースを選択してください</p>
                    @foreach($courses as $course)
                    <div class="btn-select-grp">
                        <input type="radio" value="{{ $course->id }}" name="course_id" id="course_id" class="visually-hidden"></input>
                        <label for="course_id" class="btn-select">
                            {{ $course->name }}
                        </label>
                        <p>{{ $course->time }}分</p>
                        <p>{{ $course->price }}円</p>
                    </div>
                    @endforeach


                    <!-- @foreach($courses as $course)
                    <div class="course_about">
                        <p>{{ $course->name }}</p>
                        <p>{{ $course->time }}</p>
                        <p>{{ $course->price }}</p>
                    </div>
                    @endforeach -->

                    <!-- <p id="course_about" class="course_about"></p> -->
                </div>

                <div class="input-area">
                    <p class="form-index">ご希望の施術スタッフを選択してください</p>
                    <select name="staff_id" id="staff_val">
                        <option value="">選択してください</option>
                        @foreach($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                        <!-- らじょボタンはname属性がバラバラ→Name属性を統一 -->
                        @endforeach
                    </select>
                </div>

                <div class="input-area">
                    <p class="form-index">その他ご要望があればご記入ください</p>
                    <textarea value="" name="detail" id="detail_val" class="textarea-large"></textarea>
                </div>
                <div class="input-area">
                    <button class="js-modal-open btn-primary" href="" data-target="confirmModal">予約確認</button>
                </div>

                <div class="modal js-modal" id="confirmModal">
                    <div class="modal__bg js-modal-close"></div>
                    <!-- Modal Contents -->
                    <div class="modal__content">
                        <p>以下の通り予約します。お間違いがなければ「予約する」ボタンを押してください</p>
                        <div>
                            <table class="reserve-confirm">
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">お名前：</p>
                                    </td>
                                    <td>
                                        <p class="confirm"><?php echo $user->name; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">日付：</p>
                                    </td>
                                    <td>
                                        <p id="date_confirm" class="confirm date_confirm"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">時間：</p>
                                    </td>
                                    <td>
                                        <p id="time_confirm" class="confirm time_confirm"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">コース：</p>
                                    </td>
                                    <td>
                                        <p id="course_confirm" class="confirm course_confirm"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">スタッフ：</p>
                                    </td>
                                    <td>
                                        <p id="staff_confirm" class="confirm staff_confirm"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">コメント：</p>
                                    </td>
                                    <td>
                                        <p id="detail_confirm" class="confirm detail_confirm"></p>
                                    </td>
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