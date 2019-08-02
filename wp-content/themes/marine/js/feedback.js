jQuery(document).ready(function ($) {
    $('#contact-form').ajaxForm({
        url: feedback_object.url,
        data: {
            action: 'feedback_action',
            nonce: feedback_object.nonce
        },
        type: 'POST',
        dataType: 'json',
        success: function (request, xhr, status, error) {
            $('#contact-form')[0].reset();
            $('#forminfo').slideToggle(100, function(){
                setTimeout(function(){
                    $('#forminfo').slideToggle(200);
                }, 5000);
            });
        }
    });
});