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
            var time = $('#time_val option:selected').text();
            var course_id = $('[name="course_id"]:checked').attr('id');
            var c_name = $('#name_' + course_id).text();
            var c_price = $('#price_' + course_id).text();
            var staff_id = $('[name="staff_id"]:checked').attr('id');
            var staff = $('#name_' + staff_id).text();
            var detail = $('#detail_val').val();

            var modal = $(this);

            // フォーム入力データをモーダル確認画面に表示
            $('#date_confirm').text(date);
            $('#time_confirm').text(time);
            $('#c_name_confirm').text(c_name);
            $('#c_price_confirm').text(c_price);
            $('#staff_confirm').text(staff);
            $('#detail_confirm').text(detail);

            // 確認
            console.log(date);
            console.log(time);
            console.log(c_name);
            console.log(c_price);
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
