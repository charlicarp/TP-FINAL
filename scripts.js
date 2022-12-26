console.log("TP Integrador JS ok")

const Nombre = document.getElementById("Nombre");
const mensajeNombre = document.getElementById("mensajeNombre");


const Apellido = document.getElementById("Apellido");
const mensajeApellido = document.getElementById("mensajeApellido");


const correo = document.getElementById("Correo");
const mensajeCorreo = document.getElementById("mensajeCorreo");
const expRegular = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/


const Cantidad = document.getElementById("cantidadTickets");
const mensajeCantidad = document.getElementById ("mensajeCantidad");


const categoria = document.getElementById("seleccionCategoria");
const mensajeCategoria = document.getElementById ("mensajeCategoria");


const botonResumen = document.getElementById("Resumen")




/*FUNCION VALIDAR NOMBRE*/

function validarNombre () {
    if(Nombre.value.length < 3){
        mensajeNombre.innerHTML = "Ingrese un Nombre valido";
    }
    else{
        mensajeNombre.innerHTML = "Nombre correcto!!!";
    }
}


/*FUNCION VALIDAR APELLIDO*/

function validarApellido () {
    if(Apellido.value.length < 2){
        mensajeApellido.innerHTML = "Ingrese un Apellido valido";
    }
    else{
        mensajeApellido.innerHTML = "Apellido correcto!!!";
    }
}


/*FUNCION VALIDAR CORREO*/

function validarCorreo () {
    if(!expRegular.test(correo.value)) {
        mensajeCorreo.innerHTML = "El Correo no es valido"
    }
    else {
        mensajeCorreo.innerHTML = "Correo Correcto!!!"
    }
}


/*FUNCION VALIDAR CANTIDAD*/

function validarCantidad(){
    if(Cantidad.value<=0) {
        mensajeCantidad.innerHTML = "Ingrese una cantidad";
    } else  {
        mensajeCantidad.innerHTML = "Cantidad correcta"; 
    }
}


/*FUNCION VALIDAR CATEGORIA*/

function validarCategoria(){
    if(categoria.value === "0"){
     mensajeCategoria.innerHTML = "Elija una Categoria";
    }else{
     mensajeCategoria.innerHTML = "Categoria Seleccionada";
    }
 
}


botonResumen.addEventListener("click", validarNombre);
botonResumen.addEventListener("click", validarApellido);
botonResumen.addEventListener("click", validarCorreo);
botonResumen.addEventListener("click", validarCategoria);
botonResumen.addEventListener("click", validarCantidad);


/*VALOR ENTRADAS CON DESCUENTO*/

const valorTicket = 200;
let descuentoEstudiante = 80/100;
let descuentoTrainee = 50/100;
let descuentoJunior = 15/100;

const totalPago = document.getElementById ("totalPago");


function total_pago(){

    let totalValorTicket= (Cantidad.value)*valorTicket;
  
    if(categoria.value==1){
        totalValorTicket=totalValorTicket;
        }
        if(categoria.value==2){
        totalValorTicket=totalValorTicket-(descuentoEstudiante * totalValorTicket);
        }
        if(categoria.value==3){
        totalValorTicket=totalValorTicket-(descuentoTrainee * totalValorTicket);
        }
        if(categoria.value==4){
       totalValorTicket=totalValorTicket-(descuentoJunior * totalValorTicket);
        }

      
    totalPago.innerHTML=totalValorTicket;
}
 
botonResumen.addEventListener("click", total_pago);