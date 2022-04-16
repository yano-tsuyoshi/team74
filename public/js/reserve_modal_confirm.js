/////////////////////////////
// Reserve - Modal
/////////////////////////////

// jQuery
// 「予約する」ボタンをクリックするとモーダルが開き、フォームの入力内容が表示される

$(function () {
    $('.js-modal-open').each(function () {
        $(this).on('click', function () {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $(modal).fadeIn();

            // フォーム入力データを取得
            var date = $('#date_val').val();
            var time = $('#time_val').val();
            var course = $("input[name='course_id']:checked").val();
            var staff = $("input[name='staff_id']:checked").val();
            var detail = $('#detail_val').val();

            var modal = $(this);

            // フォーム入力データをモーダル確認画面に表示
            $('#date_confirm').text(date);
            $('#time_confirm').text(time);
            $('#course_confirm').text(course); // ここでcourseに入ったidをもとにデータベースからコース名を取得したい            
            $('#staff_confirm').text(staff);
            $('#detail_confirm').text(detail);

            // 確認用
            console.log(date);
            console.log(time);
            console.log(course);
            console.log(staff);
            console.log(detail);

            return false;
        });
    });
    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
    });
});
