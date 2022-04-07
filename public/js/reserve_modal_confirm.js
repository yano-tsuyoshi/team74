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
            $(modal).fadeIn();

            var title = $('#name').val()
            var modal = $(this)
            modal.find('#name').text(name)
            
            return false;
        });
    });
    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
    });
});

