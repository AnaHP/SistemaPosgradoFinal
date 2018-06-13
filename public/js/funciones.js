function prueba(){
  altura = Math.max(document.documentElement.clientHeight, window.innerHeight);
  document.getElementById('contenedorG').style.height = altura+'px';
}
window.addEventListener('resize', prueba, true);
window.addEventListener('load', prueba, true);
window.addEventListener('orientationchange', prueba, true);
window.addEventListener('scroll', prueba, true);

function despliega(){
  planes=document.getElementById('menuCO');
  opciones=document.getElementsByClassName("opciones");

  console.log();
  if(planes.style.height != "120px"){
    planes.style.height="120px";
    for (var i = 0; i < opciones.length; i++) {
      opciones[i].classList.add("pos");
    }
  }else{
    for (var i = 0; i < opciones.length; i++) {
      opciones[i].classList.remove("pos");
    }
    planes.style.height="0px";
  }
}

function ok(idDiv){
  fondo = document.getElementById("fondo");
  si = document.getElementById(idDiv);
  console.log(si);
  if(si.style.display != "block"){
    si.style.display ="block";
    fondo.style.display="block";
    console.log(idDiv);
  }
}
function cerrarModal(idDiv){
  fondo = document.getElementById("fondo");
  si = document.getElementById(idDiv);
  fondo.style.display = "none";
  si.style.display = "none";
  console.log(idDiv);
}


document.getElementById("archivo").addEventListener("change",()=>{
  var archivo = document.getElementById("archivo");
  var btnSubir = document.getElementById("btnSubir");
  console.log(archivo);
  document.getElementById("nombreArchivo").textContent = archivo.files[0].name;
  btnSubir.classList.remove("hidden");
});

document.getElementById("btnSubir").addEventListener("click",()=>{
  var btnSubir = document.getElementById("btnSubir");
  btnSubir.textContent = "Subiendo..."; 
});

function subirDoc(){
  var formData = new FormData();
  formData.append("file", document.querySelector('input').files[0]);
  var request = new XMLHttpRequest();
  request.open("POST","documentos.php");
  request.send(formData);
  request.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200){
      console.log(this.responseText);
      if (this.responseText == '1'){
        alert("Documento subido correctamente");
      } else {
        console.log(this.responseText);
      }
    }
  }
}



//document.getElementById("msgArchivo").addEventListener("change", ()=>{
  //var doc = document.getElementById("documentos");
  //var nomArc = document.getElementById("nomArc");
  //console.log(doc);
  //document.getElementById().textContent = doc.files[0].name;
  //nomArc.classList.remove("hidden");
//});