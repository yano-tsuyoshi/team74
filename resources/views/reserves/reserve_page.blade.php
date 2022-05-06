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
            var dateFormat = 'yy-mm-dd';
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

<body>
    <div class="container">
        <div class="form-group">
            <h1 class="top-title">予約フォーム</h1>
            <form method="POST" action="{{ url('reserve') }}">
                {{ csrf_field() }}
                <div class="input-area">
                    <input type="hidden" value="<?php echo $user->id; ?>" name="user_id" id="user_id">
                    <input type="hidden" value="<?php echo $user->name; ?>" name="name" id="name">
                </div>

                <div class="input-area">
                    <p class="form-index">日付と時刻を選択してください</p>
                    <div class="date-time-area">
                        <!-- Calendar -->
                        <div id="datepicker" class="date-picker"></div>
                        <input type="text" name="date" id="date_val" class="visually-hidden">
                        <!-- Time Select -->
                        <table class="table-time">
                            <tr>
                                <td>
                                    <input type="radio" value="10:00:00" name="time" id="time10_00" class="visually-hidden"></input>
                                    <label for="time10_00" class="btn-time">10時</label>
                                </td>
                                <td>
                                    <input type="radio" value="10:30:00" name="time" id="time10_30" class="visually-hidden"></input>
                                    <label for="time10_30" class="btn-time">10時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="11:00:00" name="time" id="time11_00" class="visually-hidden"></input>
                                    <label for="time11_00" class="btn-time">11時</label>
                                </td>
                                <td>
                                    <input type="radio" value="11:30:00" name="time" id="time11_30" class="visually-hidden"></input>
                                    <label for="time11_30" class="btn-time"> 11時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="12:00:00" name="time" id="time12_00" class="visually-hidden"></input>
                                    <label for="time12_00" class="btn-time">12時</label>
                                </td>
                                <td>
                                    <input type="radio" value="12:30:00" name="time" id="time12_30" class="visually-hidden"></input>
                                    <label for="time12_30" class="btn-time">12時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="13:00:00" name="time" id="time13_00" class="visually-hidden"></input>
                                    <label for="time13_00" class="btn-time">13時</label>
                                </td>
                                <td>
                                    <input type="radio" value="13:30:00" name="time" id="time13_30" class="visually-hidden"></input>
                                    <label for="time13_30" class="btn-time"> 13時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="14:00:00" name="time" id="time14_00" class="visually-hidden"></input>
                                    <label for="time14_00" class="btn-time">14時</label>
                                </td>
                                <td>
                                    <input type="radio" value="14:30:00" name="time" id="time14_30" class="visually-hidden"></input>
                                    <label for="time14_30" class="btn-time">14時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="15:00:00" name="time" id="time15_00" class="visually-hidden"></input>
                                    <label for="time15_00" class="btn-time">15時</label>
                                </td>
                                <td>
                                    <input type="radio" value="15:30:00" name="time" id="time15_30" class="visually-hidden"></input>
                                    <label for="time15_30" class="btn-time"> 15時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="16:00:00" name="time" id="time16_00" class="visually-hidden"></input>
                                    <label for="time16_00" class="btn-time">16時</label>
                                </td>
                                <td>
                                    <input type="radio" value="16:30:00" name="time" id="time16_30" class="visually-hidden"></input>
                                    <label for="time16_30" class="btn-time">16時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="17:00:00" name="time" id="time17_00" class="visually-hidden"></input>
                                    <label for="time17_00" class="btn-time">17時</label>
                                </td>
                                <td>
                                    <input type="radio" value="17:30:00" name="time" id="time17_30" class="visually-hidden"></input>
                                    <label for="time17_30" class="btn-time"> 17時30分</label>
                                </td>
                            <tr>
                                <td>
                                    <input type="radio" value="18:00:00" name="time" id="time18_00" class="visually-hidden"></input>
                                    <label for="time18_00" class="btn-time">18時</label>
                                </td>
                                <td>
                                    <input type="radio" value="18:30:00" name="time" id="time18_30" class="visually-hidden"></input>
                                    <label for="time18_30" class="btn-time">18時30分</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" value="19:00:00" name="time" id="time19_00" class="visually-hidden"></input>
                                    <label for="time19_00" class="btn-time">19時</label>
                                </td>
                                <td>
                                    <input type="radio" value="19:30:00" name="time" id="time19_30" class="visually-hidden"></input>
                                    <label for="time19_30" class="btn-time"> 19時30分</label>
                                </td>
                            </tr>
                        </table>
                    </div>
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
                            <p id="price_course_{{ $course->id }}"><b>{{ $course->price }}円</b></p>
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
                    <div class="btn-box">
                        <button class="js-modal-open btn btn-primary" href="" data-target="confirmModal">内容を確認する</button>
                    </div>
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
                            <div class="btn-box">
                                <button type="reset" class="btn btn-secondary js-modal-close">キャンセル</button>
                                <button type="submit" class="btn btn-primary">予約する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>