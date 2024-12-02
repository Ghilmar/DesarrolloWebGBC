

  function cargarMenu() {
    const principal = document.getElementById("principal");
    principal.innerHTML = "<strong>Nombre:</strong> Gilmar Edson Betancur Calapina  <br> <strong class='carnet'>Carnet universitario:</strong>35-5072";
    const subMenu = document.getElementById("sub-menu");
    const historial = document.getElementById("historial");
  
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "botones.html", true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState === 4 && ajax.status === 200) {
        subMenu.innerHTML = ajax.responseText;
  
        const botones = subMenu.querySelectorAll("button");
        botones.forEach((boton) => {
          boton.addEventListener("click", function () {
            historial.innerHTML += `<p>Preciono: ${this.textContent}</p>`;
          });
        });
      }
    };
    ajax.send();
  }
  
                                                                                            //pregunta 2
function mostrarCalculadora() {
    const calculadoraDiv = document.getElementById("calculadora");
    calculadoraDiv.style.display = "flex"; 
    cargarFormulario(); 
  }
  
  async function cargarFormulario() {
    const principal = document.getElementById("principal");
  
    const response = await fetch("tablas.html");
    if (response.ok) {
      principal.innerHTML = await response.text();
  
      const calcularBtn = document.getElementById("calcular");
      if (calcularBtn) {
        calcularBtn.addEventListener("click", generarTabla);
      }
    } else {
      console.error("Error al cargar tablas.html");
    }
  }
  
  function generarTabla() {
    const numero = parseInt(document.getElementById("numero").value);
    const hasta = parseInt(document.getElementById("hasta").value);
    const operacion = document.querySelector('input[name="operacion"]:checked')?.value;
    const resultadoDiv = document.getElementById("resultado");
  
    if (isNaN(numero) || isNaN(hasta) || !operacion) {
      resultadoDiv.innerHTML = "<p>Por favor, completa todos los campos.</p>";
      return;
    }
  
    let tablaHTML =
      "<table>";
  
    for (let i = 1; i <= hasta; i++) {
      let resultado;
      switch (operacion) {
        case "suma":
          resultado = i + numero;
          tablaHTML += `<tr><td><strong>${i}</strong></td><td>+</td><td>${numero}</td><td>=</td><td>${resultado}</td></tr>`;
          break;
        case "resta":
          resultado = i - numero;
          tablaHTML += `<tr><td><strong>${i}</strong></td><td>-</td><td>${numero}</td><td>=</td><td>${resultado}</td></tr>`;
          break;
        case "multiplicar":
          resultado = i * numero;
          tablaHTML += `<tr><td><strong>${i}</strong></td><td>*</td><td>${numero}</td><td>=</td><td>${resultado}</td></tr>`;
          break;
        case "dividir":
          resultado = (i / numero).toFixed(2);
          tablaHTML += `<tr><td><strong>${i}</strong></td><td>/</td><td>${numero}</td><td>=</td><td>${resultado}</td></tr>`;
          break;
      }
    }
  
    tablaHTML += "</table>";
    resultadoDiv.innerHTML = tablaHTML;
  }
  
                                                                                                         //pregunta 3
const libros = [
    "images/arquitecturacomputadoras.jpg",
    "images/bigdata.jpg",
    "images/Captacha.png",
    "images/CursoAndroid.jpg",
    "images/introduccioinformatica.jpg",
    "images/ScrumIngenieriaSoftware.jpg"
  ];
  let indiceActual = 0; 
  

  function mostrarImagenes() {
    const principal = document.getElementById("principal");
  
    fetch("imagen.html")
      .then((response) => {
        if (response.ok) {
          return response.text();
        } else {
          throw new Error("No se pudo cargar imagen.html");
        }
      })
      .then((html) => {
        principal.innerHTML = html;
  
        cargarImagen();
  
        const siguienteBtn = document.getElementById("siguiente");
        siguienteBtn.addEventListener("click", mostrarSiguienteImagen);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  }
  
  function cargarImagen() {
    const imagen = document.getElementById("imagen");
    if (indiceActual < libros.length) {
      imagen.src = libros[indiceActual];
    } else {
      const siguienteBtn = document.getElementById("siguiente");
      siguienteBtn.disabled = true;
      alert("No hay más libros disponibles.");
    }
  }
  
  function mostrarSiguienteImagen() {
    indiceActual++;
    cargarImagen();
  }


                                                                                //pregunta 4
  function llamarFormulario() {
    fetch('forminserar3.html')
      .then((response) => response.text())
      .then((html) => {
        document.getElementById('principal').innerHTML = html;
      })
      .catch((error) => console.error('Error al cargar el formulario:', error));
  }
  
  function registrarLibros(event) {
    event.preventDefault(); 
  
    const formData = new FormData(document.getElementById('formLibros'));
  
    fetch('registrar.php', {
      method: 'POST',
      body: formData
    })
      .then((response) => response.text())
      .then((data) => {
        document.getElementById('resultado').innerHTML = '<p>Libros registrados correctamente.</p>';
        mostrarLibros();
      })
      .catch((error) => console.error('Error al registrar libros:', error));
  }
  function mostrarLibros() {
    fetch('listar.php')
      .then((response) => response.text())
      .then((html) => {
        document.getElementById('principal').innerHTML = html;
      })
      .catch((error) => console.error('Error al listar libros:', error));
  }
  