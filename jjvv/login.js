// document.getElementById("btn_registrarse").addEventListener("click", registrar);
document.getElementById("btn_login").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPagina);

// DECLARACIÓN DE VARIABLES 

var contenedor_login_registrar = document.querySelector(".contenedor_login_registrar");
var formulario_login = document.querySelector(".formulario_login");
// var formulario_registrar = document.querySelector(".formulario_registrar");
var caja_trasera_login = document.querySelector(".caja_trasera_login");
// var caja_trasera_registrar = document.querySelector(".caja_trasera_registrar");

function anchoPagina(){
  if(window.innerWidth > 850){
    caja_trasera_login.style.display = "none";
    // caja_trasera_registrar.style.display = "block";
    // formulario_login.style.display = "none";
  }else{
    // caja_trasera_registrar.style.display = "block";
    caja_trasera_login.style.display = "block";
    caja_trasera_login.style.opacity = "1";
    formulario_login.style.display = "none";
    // formulario_registrar.style.display = "none";
    contenedor_login_registrar.style.left = "0px";
  }
}
anchoPagina();

function iniciarSesion(){
  if(window.innerWidth > 850){   
  // formulario_registrar.style.display = "none";
  formulario_login.style.display = "block";
  contenedor_login_registrar.style.left = "10em";
  // caja_trasera_registrar.style.opacity = "1";
  caja_trasera_login.style.opacity = "0";
  }else{
  // formulario_registrar.style.display = "none";
  formulario_login.style.display = "block";
  contenedor_login_registrar.style.left = "0em";
  // caja_trasera_registrar.style.opacity = "block";
  caja_trasera_login.style.opacity = "none";
  }
}
// function registrar(){
//   if(window.innerWidth > 850){    
//   // formulario_registrar.style.display = "block";
//   // contenedor_login_registrar.style.left = "35em";
//   formulario_login.style.display = "none";
//   // caja_trasera_registrar.style.opacity = "0";
//   caja_trasera_login.style.opacity = "1";
//   }else{
//   // formulario_registrar.style.display = "block";
//   // contenedor_login_registrar.style.left = "0em";
//   formulario_login.style.display = "none";
//   // caja_trasera_registrar.style.opacity = "none";
//   caja_trasera_login.style.opacity = "block";
//   caja_trasera_login.style.opacity = "1";
//   }
// }
