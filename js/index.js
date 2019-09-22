$(document).ready(function () {
    $('#close').click(function () {
        swal({
            title: "No te vayas :(",
            text: "¿Deseas cerrar sesión?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willClose) => {
            if (willClose) {
                window.location.href = "includes/close_session.php";
            } else {
                
            }
        });
    });
});
