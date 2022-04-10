/////////////////////////////
// Reserve - Modal
/////////////////////////////

// jQuery
// 選んだコースに応じた内容を表示する

$(function () {
    $(this).on('click', function () {
        var target = $(this).data('target');
        var modal = document.getElementById(target);

        // フォーム入力データを取得
        var course = $('#course_val').val();

        var modal = $(this);

        // フォーム入力データをモーダルに表示
        $('#course_about').text(course);

        // 確認用
        console.log(course);

        return false;
    });
});