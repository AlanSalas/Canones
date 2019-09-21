$(document).ready(function(){
    $("#btn-login").click(function() {
        let obj = {
            "accion" : "login"
        };
        $("#login-form").find("input").map(function(i, e) {
            //Añanir atributo
            obj[$(this).prop("name")] = $(this).val();
            if ($(this).prop("type") == "checkbox") {
                obj[$(this).prop("name")] = $(this).prop("checked");
            }
        });
        //console.log(obj);
        $.post("includes/funciones.php", obj, function(respuesta) {
            alert(respuesta.texto);
            //Si el status es 0 enviar mensaje de datos incorrectos
            //Si el status es 1 redireccionar a index.php
        },"JSON");

        $('.message a').click(function () {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    });
});