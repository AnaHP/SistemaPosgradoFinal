function login(){
  //console.log("Hola");
  var expediente = $("#expediente").val();
  var contra = $("#contra").val();
      if (expediente=="" ||contra=="" ) {
        alert("Campos vacios", "Verifica los datos");
        console.log("aquí si entró")
        boton.disabled=false;
        return null;
      }//boton.innerHTML = 'Iniciando sesion...';
          $.ajax({
            url: config.url+'Index/usuario',
            type:'POST',
            data:{expediente:expediente, contra:contra},
            success: function(data){
              if (data==0){
                window.location='Alumno';
              } else if (data==1){
                window.location='Admin';
              } else if (data=="Datos incorrectos"){
                alert('Verifica los datos');
              }
            console.log(data);
            }
          });//Fin ajax
      }

      function cambia(){
        alert("cambia de pagina a la Maestria en computacion")
        location.href="https://www.ecosia.org/?ref=icon-search"
      }
      



  