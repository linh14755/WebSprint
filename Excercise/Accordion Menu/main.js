$(document).ready(function () {
    $('#switcher-large').on('click', function () {
        $('body').addClass('large');
        $('#switcher-large').addClass('selected');
        $('#switcher-default').removeClass('selected');
        $('#switcher-narrow').removeClass('selected');
    });
});

$(document).ready(function () {
    $('#switcher-narrow').on('click', function () {
        $('body').addClass('narrow');
        $('#switcher-narrow').addClass('selected');
        $('#switcher-default').removeClass('selected');
        $('#switcher-large').removeClass('selected');
    })
})

$(document).ready(function () {
    $('#switcher-default').on('click', function () {
        $('body').removeClass('narrow');
        $('body').removeClass('large');
        $('#switcher-default').addClass('selected');
        $('#switcher-narrow').removeClass('selected');
        $('#switcher-large').removeClass('selected');
    })
})