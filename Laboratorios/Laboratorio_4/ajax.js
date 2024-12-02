function enviarMensaje() {
    const correo = $("#correo").val();
    const asunto = $("#asunto").val();
    const mensaje = $("#mensaje").val();


    if (!correo || !asunto || !mensaje) {
        alert("Por favor, completa todos los campos.");
        return;
    }

    $.ajax({
        url: 'guardar_mensaje.php',
        type: 'POST',
        data: {
            correo: correo,
            asunto: asunto,
            mensaje: mensaje
        },
        success: function(response) {
            alert(response); 
            $("#formRedactar")[0].reset();
            window.location.href = "inicio.html";
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}
