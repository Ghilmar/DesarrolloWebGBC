 //Mostrar Enviados
 function mostrarBandejaSalida() {
    fetch('obtenerCorreosEnviados.php')
        .then(response => response.json())
        .then(data => {
            let html = '';
            data.forEach(correo => {
                html += `
                    <tr>
                        <td>${correo.correo}</td>
                        <td>${correo.asunto}</td>
                        <td>${correo.estado}</td>
                        <td>${correo.mensaje}</td>
                        
                    </tr>
                `;
            });
            document.getElementById('tablaCorreosBody').innerHTML = html;
        })
        .catch(error => console.error('Error:', error));
}
