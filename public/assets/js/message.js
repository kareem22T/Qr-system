var showMessages = (function (message, type) {

    if (message.indexOf("&bull;") != 0)
        message = " &bull; " + message;

    $('#messageContainer').remove();

    switch (type) {
        case 'success':
            $("<div>", {
                id: "messageContainer"
            }).append("<div class='alert alert-success'>" + message + "</div>")
                .appendTo($('.card-body:last').parents('.p-lg-4'));
            break;
        case 'info':
            $("<div>", {
                id: "messageContainer"
            }).append("<div class='alert alert-info'>" + message + "</div>")
                .appendTo($('.card-body:last').parents('.p-lg-4'));
            break;
        case 'warning':
            $("<div>", {
                id: "messageContainer"
            }).append("<div class='alert alert-warning'>" + message + "</div>")
                .appendTo($('.card-body:last').parents('.p-lg-4'));
            break;
        default:
            $("<div>", {
                id: "messageContainer"
            }).append("<div class='alert alert-danger'>" + message + "</div>")
                .appendTo($('.card-body:last').parents('.p-lg-4'));
            break;
    }
        $('html, body').animate({
            scrollTop: $('#messageContainer:last').length > 0 ? $('#messageContainer:last').offset().top : $('.card-body:last').offset().top
        }, 600);
});