/////////////////////////////
// Reserve - Modal
/////////////////////////////

// Bootstrap5, jQuery
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
            var course = $('#course_val').val();
            var staff = $('#staff_val').val();
            var detail = $('#detail_val').val();

            var modal = $(this);

            // フォーム入力データをモーダルに表示
            var date;

            modal.find('.date_confirm').text(date);
            modal.find('.time_confirm').text(time);
            modal.find('.course_confirm').text(course);
            modal.find('.staff_confirm').text(staff);
            modal.find('.detail_confirm').text(detail);

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


// bootstrap5はmodal.find使えません