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

      
//Muestra el nombre del documento
function subirDoc(){
  var formData = new FormData();
  formData.append("archivo", document.querySelector('#archivo').files[0]);
  var request = new XMLHttpRequest();
  request.open("POST", "archivo()");
  request.send(formData);
  request.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          if (this.responseText == '1') {
              alert('Se subio correctamente');
          } else {
              alert('Ocurrio un error');
          }
      }
  }
}

      



  