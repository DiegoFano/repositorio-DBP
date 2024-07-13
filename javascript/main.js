


document.addEventListener('DOMContentLoaded', () => {
    const superposicion = document.getElementById('superposicion');
    const notificacionCookies = document.getElementById('notificacion-cookies');
    const botonAceptarCookies = document.getElementById('aceptar-cookies');

    if (!localStorage.getItem('cookiesAceptadas')) {
        superposicion.style.display = 'flex';
    } else {
        superposicion.style.display = 'none';
    }

    botonAceptarCookies.addEventListener('click', () => {
        localStorage.setItem('cookiesAceptadas', true);
        superposicion.style.display = 'none';
    });
});







document.addEventListener('DOMContentLoaded', () => {
    const botonDescargar = document.getElementById('boton-descargar');
    const confirmacionDescarga = document.getElementById('confirmacion-descarga');
    const contadorDescargas = document.getElementById('contador');
    const cargador = document.getElementById('cargador');

   
    let conteoDescargas = localStorage.getItem('conteoDescargas') || 0;
    contadorDescargas.textContent = conteoDescargas;

    botonDescargar.addEventListener('click', () => {
       
        cargador.style.display = 'inline-block';

        setTimeout(() => {
           
            cargador.style.display = 'none';

            
            conteoDescargas++;
            localStorage.setItem('conteoDescargas', conteoDescargas);
            contadorDescargas.textContent = conteoDescargas;

            
            confirmacionDescarga.style.display = 'block';

         
            window.location.href = './documentos/cvDiego.pdf';
        }, 2000);
    });
});







function mostrarNombreCompleto() {
    var pNombre = document.getElementById('pNombre').value;
    var nombreCompleto = document.getElementById('nombreCompleto');
    nombreCompleto.textContent = pNombre;
  }
  
  function mostrarAsuntoCompleto() {
    var pAsunto = document.getElementById('pAsunto').value;
    var asuntoCompleto = document.getElementById('asuntoCompleto');
    asuntoCompleto.textContent = pAsunto;
  }
  
  function mostrarMensajeCompleto() {
    var pMensaje1 = document.getElementById('pMensaje1').value;
    var mensajeCompleto = document.getElementById('mensajeCompleto');
    mensajeCompleto.textContent = pMensaje1;
  }
  
  function ofuscarEmail(email) {
    var indiceArroba = email.indexOf('@');
    if (indiceArroba > 2) {
      var parteNombre = email.slice(0, indiceArroba);
      var parteDominio = email.slice(indiceArroba);
      var nombreOfuscado = parteNombre.slice(0, 2) + '**' + parteNombre.slice(-1);
      return nombreOfuscado + parteDominio;
    }
    return email; 
  }
  
  function mostrarI() {
    var email = document.getElementById('emailId').value;
    var remailId = ofuscarEmail(email);
    document.getElementById('remailId').textContent = remailId;
  
    mostrarNombreCompleto();
    mostrarAsuntoCompleto();
    mostrarMensajeCompleto();
  
    document.getElementById('contenedorO').classList.remove('oculto');
  }
  







  document.addEventListener("DOMContentLoaded", function() {
    const botonMostrar = document.getElementById("botonMostrar");
    const contenedorO = document.getElementById("contenedorO");
    const containerContact = document.getElementById("containerContact")

    botonMostrar.addEventListener("click", function() {
        if (contenedorO.classList.contains("oculto")) {
            contenedorO.classList.remove("oculto");
           
            
        }

         containerContact.style.height = '960px';
    });
});




