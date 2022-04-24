@extends('layouts.app')
@section('content')
@include('common.errors')

<head>
    <!-- CSS - Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <!-- jQuery for Calendar (DatePicker) -->
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
                <div class="input-area">
                    <p>
                        ユーザーID：<?php echo $user->id; ?><br>
                        予約者名：<?php echo $user->name; ?><br>
                        予約内容を確認したい場合はこちら：<a href="reserve_show">予約一覧</a>
                    </p>
                    <input type="hidden" value="<?php echo $user->id; ?>" name="user_id" id="user_id">
                    <input type="hidden" value="<?php echo $user->name; ?>" name="name" id="name">
                </div>

                <div class="input-area">
                    <p class="form-index">カレンダーから日付を選択してください</p>
                    <div class="display-flex">
                        <!-- Calendar -->
                        <div id="datepicker" class="date-picker"></div>
                        <input type="text" name="date" id="date_val" class="visually-hidden">
                        <!-- Time Select -->
                        <table class="table-time">
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="10:00:00" name="time" id="time_val" class="visually-hidden">10時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="10:30:00" name="time" id="time_val" class="visually-hidden">10時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="11:00:00" name="time" id="time_val" class="visually-hidden">11時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="11:30:00" name="time" id="time_val" class="visually-hidden">11時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="12:00:00" name="time" id="time_val" class="visually-hidden">12時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="12:30:00" name="time" id="time_val" class="visually-hidden">12時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="13:00:00" name="time" id="time_val" class="visually-hidden">13時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="13:30:00" name="time" id="time_val" class="visually-hidden">13時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="14:00:00" name="time" id="time_val" class="visually-hidden">14時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="14:30:00" name="time" id="time_val" class="visually-hidden">14時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="15:00:00" name="time" id="time_val" class="visually-hidden">15時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="15:30:00" name="time" id="time_val" class="visually-hidden">15時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="16:00:00" name="time" id="time_val" class="visually-hidden">16時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="16:30:00" name="time" id="time_val" class="visually-hidden">16時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="17:00:00" name="time" id="time_val" class="visually-hidden">17時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="17:30:00" name="time" id="time_val" class="visually-hidden">17時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="18:00:00" name="time" id="time_val" class="visually-hidden">18時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="18:30:00" name="time" id="time_val" class="visually-hidden">18時30分</input>
                                </label>
                            </td>
                            <td class="display-flex">
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="19:00:00" name="time" id="time_val" class="visually-hidden">19時</input>
                                </label>
                                <label for="time_val" class="btn-time">
                                    <input type="radio" value="19:30:00" name="time" id="time_val" class="visually-hidden">19時30分</input>
                                </label>
                            </td>
                        </table>
                    </div>
                </div> <!-- display-flex -->

                <!-- <div class="input-area">
                    <p class="form-index">時間帯を選択してください</p>
                    <select name="time" id="time_val">
                        <option value="">選択してください</option>
                        <option value="10:00:00">10時</option>
                        <option value="10:30:00">10時30分</option>
                        <option value="11:00:00">11時</option>
                        <option value="11:03:00">11時30分</option>
                        <option value="12:00:00">12時</option>
                        <option value="12:03:00">12時30分</option>
                        <option value="13:00:00">13時</option>
                        <option value="13:03:00">13時30分</option>
                        <option value="14:00:00">14時</option>
                        <option value="14:03:00">14時30分</option>
                        <option value="15:00:00">15時</option>
                        <option value="15:03:00">15時30分</option>
                        <option value="16:00:00">16時</option>
                        <option value="16:03:00">16時30分</option>
                        <option value="17:00:00">17時</option>
                        <option value="17:03:00">17時30分</option>
                        <option value="18:00:00">18時</option>
                        <option value="18:03:00">18時30分</option>
                        <option value="19:00:00">19時</option>
                        <option value="19:30:00">19時30分</option>
                    </select> -->
                </div>

                <div class="input-area">
                    <p class="form-index">コースを選択してください</p>
                    <div class="btn-lineup">
                        @foreach($courses as $course)
                        <div class="btn-select-grp">
                            <input type="radio" value="{{ $course->id }}" name="course_id" id="course_{{ $course->id }}" class="visually-hidden"></input>
                            <label for="course_{{ $course->id }}" class="btn-select">
                                <span id="name_course_{{ $course->id }}">{{ $course->name }}&nbsp;{{ $course->time }}分</span>
                            </label>
                            <p id="price_course_{{ $course->id }}">{{ $course->price }}円</p>
                            <p>{{ $course->detail }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="input-area">
                    <p class="form-index">施術スタッフを選択してください</p>
                    <div class="btn-lineup staff">
                        @foreach($staffs as $staff)
                        <div class="btn-select-grp">
                            <input type="radio" value="{{ $staff->id }}" name="staff_id" id="staff_{{ $staff->id }}" class="visually-hidden"></input>
                            <label for="staff_{{ $staff->id }}" class="btn-select">
                                <span id="name_staff_{{ $staff->id }}">{{ $staff->name }}</span>
                            </label>
                        </div>
                        @endforeach
                    </div>
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
                                        <p id="c_name_confirm" class="confirm c_name_confirm"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="confirm confirm-right">料金：</p>
                                    </td>
                                    <td>
                                        <p id="c_price_confirm" class="confirm c_price_confirm"></p>
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