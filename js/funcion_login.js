$(document).ready(function () {
    $("#btn-login").click(function () {
        let obj = {
            "accion": "login"
        };
        $("#login-form").find("input").map(function (i, e) {
            //Añanir atributo
            obj[$(this).prop("name")] = $(this).val();
            if ($(this).prop("type") == "checkbox") {
                obj[$(this).prop("name")] = $(this).prop("checked");
            }
        });
        $.post("includes/funciones.php", obj, function (respuesta) {
            r = respuesta;
            if (r.status == 3) {
                swal({
                        title: "Datos Correctos",
                        text: "¿Deseas iniciar sesión?",
                        icon: "success",
                        buttons: true,
                        ConfirmButtonText: true,
                    })
                    .then((willLogin) => {
                        if (willLogin) {
                            window.location.href = "index.php";
                        } else {
                            location.reload();
                        }
                    });
            }
            if (r.status == 5) {
                swal("¡ERROR!", "Campos vacios", "error");
            }
            if (r.status == 2) {
                swal("¡ERROR!", "Contraseña incorrecta", "error");
            }
            if (r.status == 4) {
                swal("¡ERROR!", "Usuario no registrado", "error");
            }
        }, "JSON");
        // console.log(obj);
    });
    
    $('.message a').click(function () {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
});