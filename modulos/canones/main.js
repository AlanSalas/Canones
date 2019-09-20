$('.boton-nuevo').click(function () {
    $('.table').fadeOut(20);
    $('.form').fadeIn(200);
    $('.boton-cancelar').show();
    $('.boton-cancelar a').show();
});

$('.boton-cancelar').click(function () {
    $('.table').fadeIn(200);
    $('.form').fadeOut(20);
    $('.boton-cancelar').hide();
    $('.boton-cancelar a').hide();
});