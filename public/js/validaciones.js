window.addEventListener('load',function(){

  // Desaparecer un alert
  $(".alert").fadeTo(4000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
  });



  // Validacion del formulario de creacion de legislador

  var form = document.getElementById('form');
  var nombre = document.getElementById('nombre');
  var apellido = document.getElementById('apellido');
  var email = document.getElementById('email');
  var telefono = document.getElementById('telefono');
  var direccion = document.getElementById('direccion');
  var pais = document.getElementById('pais');
  var votos = document.getElementById('votos');
  var partido = document.getElementById('partido');
  var inicioMandato = document.getElementById('inicioMandato');
  var finMandato = document.getElementById('finMandato');
  var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // Generamos una expresion para que el email pueda ser valido

  // Declaro las variables de error

  var nombre_error = document.getElementById('nombre_error');
  var apellido_error = document.getElementById('apellido_error');
  var email_error = document.getElementById('email_error');
  var telefono_error = document.getElementById('telefono_error');
  var direccion_error = document.getElementById('direccion_error');
  var pais_error = document.getElementById('pais_error');
  var votos_error = document.getElementById('votos_error');
  var inicioMandato_error = document.getElementById('inicioMandato_error');
  var finMandato_error = document.getElementById('finMandato_error');


    // Al sacar el focus del input Fecha de Inicio de Mandato
    inicioMandato.addEventListener ('blur' , function(e){
      // Obtenemos el valor de la fecha elegida
      var fechaInicio = document.getElementById('inicioMandato').value;
      // Seleccionamos los digitos correspondientes al año
      var añoInicio = fechaInicio.substring(0, 4);
      // Convertimos el resultado de string a numero
      var añoInicio = Number(añoInicio);
      // Le sumamos un año para utilizarlo en el campo Fecha de Finalizacion del Mandato
      var añofin = añoInicio + 1;
      // Seleccionamos los digitos correspondientes al mes
      var mesInicio = fechaInicio.substring(5, 7);
      // Convertimos el resultado de string a numero
      var mesInicio = Number(mesInicio);
      // Seleccionamos los digitos correspondientes al dia
      var diaInicio = fechaInicio.substring(8, 10);
        // Convertimos el resultado de string a numero
      var diaInicio = Number(diaInicio);

      // Si eligen una fecha de inicio de mandato
      if (fechaInicio != "") {
        // Colocamos la fecha de finalizacion del mandato que sera luego de 1 año del inicio
        finMandato.placeholder = diaInicio + "/" + mesInicio + "/" + añofin;
      }



    })

    // Cuando se clickee el boton submit
    form.addEventListener ('submit', function(e){

      // Creamos un array que almacenara los errores si los hay
      var errores = [];

    // Si el campo esta vacio o es null
      if (nombre.value === "" || nombre.value === null) {
        // Genero el mensaje de error
        nombre_error.innerHTML = "El campo es obligatorio";
        // Agrego el error al array de errores
        errores.push(nombre_error);
        // Hago focus en el campo que contiene error
        nombre.focus();

      // si el campo no contiene errores
      } else {
        // Me aseguro que el div de errores este vacio
        nombre_error.innerHTML = "";
      }


      if (apellido.value === "" || apellido.value === null) {
        apellido_error.innerHTML = "El campo es obligatorio";
        errores.push(apellido_error);
        apellido.focus();

      } else {
        apellido_error.innerHTML = "";
      }



      if (email.value === "" || email.value === null) {
        email_error.innerHTML = "El campo es obligatorio";
        errores.push(email_error);
        email.focus();

      } else if (!expresion.test(email.value)) {
        email_error.innerHTML = "El email es inválido";
        errores.push(email_error);

      } else {
      email_error.innerHTML = "";
      }



      if (telefono.value === "" || telefono.value === null) {
        telefono_error.innerHTML = "El campo es obligatorio";
        errores.push(telefono_error);
        telefono.focus();

      } else {
        telefono_error.innerHTML = "";
      }



      if (direccion.value === "" || direccion.value === null) {
        direccion_error.innerHTML = "El campo es obligatorio";
        errores.push(direccion_error);
        direccion.focus();

      } else {
        direccion_error.innerHTML = "";
      }



      if (pais.value === "" || pais.value === null) {
        pais_error.innerHTML = "El campo es obligatorio";
        errores.push(pais_error);
        pais.focus();

      } else {
        pais_error.innerHTML = "";
      }



      if (votos.value === "" || votos.value === null) {
        votos_error.innerHTML = "El campo es obligatorio";
        errores.push(votos_error);
        votos.focus();

      } else {
        votos_error.innerHTML = "";
      }



      if (inicioMandato.value === "" || inicioMandato.value === null) {
        inicioMandato_error.innerHTML = "El campo es obligatorio";
        errores.push(inicioMandato_error);
        inicioMandato.focus();

      } else {
        inicioMandato_error.innerHTML = "";
      }


      // Si hay errores
      if (errores.length > 0) {
        // Evitamos que se haga el submit
        e.preventDefault();
      }

    }) // Evento Submit

}) // Evento Load
