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

            var title = $('#date_val').val()
            // var body = $('#formBody').val()
            var modal = $(this)
            modal.find('#date_val').text(title)
            // modal.find('#modalBody').text(body)

            return false;
        });
    });
    $('.js-modal-close').on('click', function () {
        $('.js-modal').fadeOut();
        return false;
    });
});




// // NEW MODAL
//     $(function() {
//         $('#exampleModal').on('show.bs.modal', function() {
//             var title = $('#formTitle').val()
//             var body = $('#formBody').val()
//             var modal = $(this)
//             modal.find('#modalTitle').text(title)
//             modal.find('#modalBody').text(body)
//         })
//     })