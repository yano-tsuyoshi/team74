<!DOCTYPE html>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
</head>

<body>
    <b>予約フォーム</b><br>
    <form method="POST" action="{{ url('reserve') }}">
        {{ csrf_field() }}
        <input type="hidden" value="1" name="user_id"><br>

        1.カレンダーから日付を選択してください<br>        
        <input type="text" id="date_val" name="date"><br>
        <!-- input type="date" にする-->
        <div id="datetimepicker"></div><br>

        2.時間帯を選択してください<br>
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
        </select><br><br>

        3.コースを選択してください<br>
        <select name="course_id">
            <option value="">選択してください</option>
            <option value="1">鍼灸コース 30分</option>
            <option value="2">鍼灸コース 1時間</option>
            <option value="3">マッサージコース 30分</option>
            <option value="4">マッサージコース 1時間</option>
        </select><br><br>

        5.ご希望の施術スタッフを選択してください<br>
        <select name="staff_id">
            <option value="">選択してください</option>
            <option value="1">田中</option>
            <option value="2">高橋</option>
            <option value="3">鈴木</option>
        </select>
        <br><br>
        6.その他ご要望があればご記入ください<br>
        <input type="text" value="" name="comment">
        <br><br>
        <input type="submit" value="予約する" class="submit">
    </form>

    <!-- DatetimePickerを使ったVersion -->
    <script>
        $(function() {
            var dateFormat = 'y-m-d';
            $("#datetimepicker").datetimepicker({
                dateFormat: dateFormat,
                minDate: 0,
                onSelect: function(dateText, inst) {
                    $("#date_val").val(dateText);
                }
            });
        });
    </script>
</body>

</html>