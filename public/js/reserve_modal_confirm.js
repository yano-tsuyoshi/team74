/////////////////////////////
// Reserve - Modal
/////////////////////////////

// jQuery
// Worksのタイトルもしくは画像をクリックするとModalが開く

$(function () {
    $('.js-modal-open').each(function () {
        $(this).on('click', function () {
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            $('body').css('overflow-y', 'hidden');
            // $('body').css('padding-right', '15px');
            $(modal).fadeIn();
            return false;
        });
    });
    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        $('body').css('overflow-y', 'auto');
        // $('body').css('padding-right', '0');
        return false;
    });
});