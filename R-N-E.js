function Inicio(){
    alert('Te estaremos redireccionando al inicio en 1 segundito');
    location.href="index.html";
    setTimeout (1000);
}
function Observar(){
    var distrito=document.getElementById('distrito').value;
    var distrito1;
    if (distrito=="a" ){
        distrito1="Miraflores";
    }    
    else{
        if(distrito=="b"){
            distrito1="San Juan de Miraflores (SJM)";
        }
        else{
            if(distrito=="c"){
                distrito1="Trujillo (Mall Plaza)";
            }
            else{
                if(distrito=="d"){
                distrito1="Ventanilla";
                }
                else{
                    distrito1="Seleccione un Distrito";
                }
            }
        }
    }
    var fecha=document.getElementById('fecha').value;
    var comensales=document.getElementById('comensales').value;
    if(comensales>20){
        var comensales="Supera la Cantidad Disponible";
    }
    var hora=document.getElementById('hora').value;
    var nombre=document.getElementById('nombre').value;
    var correo=document.getElementById('correo').value;
    var num=document.getElementById('num').value;
    if(num==""){
        var num="+51";
    }
    var numero=document.getElementById('numero').value;
    var detalles=document.getElementById('detalles').value;

    alert('Los datos ingresados son los siguientes: '
    + '\nDistrito: ' + distrito1
    + '\nFecha de Reserva: ' + fecha
    + '\nCantidad de Comensales: ' + comensales
    + '\nHora de Reserva: ' + hora
    + '\nNombres y Apellidos: ' + nombre
    + '\nCorreo Electrónico: ' + correo
    + '\nNúmero: '+ num + ' ' + numero
    + '\nDetalles Adicionales: \n' + detalles
    + '\n¡Verifique bien sus datos antes de registrar la Reservación!')
}
