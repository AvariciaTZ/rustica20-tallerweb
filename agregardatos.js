const slider= document.querySelector("#slider");
let sliderSection= document.querySelectorAll(".slider__section");
let sliderSectionLast= sliderSection[sliderSection.length-1];

const btnLeft= document.querySelector("#btn-left");
const btnRight= document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin',sliderSectionLast);

function Next(){
    let sliderSectionFirst = document.querySelectorAll(".slider__section") [0];
    slider.style.marginLeft="-200%";
    slider.style.transition="all 0.5s";
    setTimeout (function(){
        slider.style.transition="none";
        slider.insertAdjacentElement('beforeend',sliderSectionFirst);
        slider.style.marginLeft="-100%";
    }, 500);
}

function Prev(){
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast= sliderSection[sliderSection.length-1];
    slider.style.marginLeft="0";
    slider.style.transition="all 0.5s";
    setTimeout (function(){
        slider.style.transition="none";
        slider.insertAdjacentElement('afterbegin',sliderSectionLast);
        slider.style.marginLeft="-100%";
    }, 500);
}

btnRight.addEventListener('click',function(){
    Next();
})

btnLeft.addEventListener('click',function(){
    Prev();
})


setInterval(function(){
    Next();
},5000);



function resultado() {

    document.getElementById('resultado').innerHTML="Se agrego, GAAA";
}


var btn=document.getElementById('btn-agregardatos'),
    caja=document.getElementById('caja'),
    contador=0;

    function cambio(){
        if (contador=0){
         
            caja.classList.add('azul')
            contador=1; 
        }else{
            caja.classList.remove('azul')
            contador=0;
        }
    }

    btn.addEventListener('click',cambio,true)




/*
window.onload= function(){
    const selectElement= document.forms[0].categoria;
    const container = document.getElementById("container");
    const container2 = document.getElementById("sabores");
    const sendButton = document.getElementById("send-button");  
    const finish = document.getElementById("Finish");
    
    sendButton.addEventListener("click", validate);
    selectElement.addEventListener("change",showProducts);

    product_list=[];
    var ids = 0;

    var elementos = document.forms[0].elements;
    function validate(e){
        e.preventDefault(); 
        var patron = /^\s+/;
        var opciones = ["POKER EN SALSAS DE CARNE", "PIZZA AMERICANA","POLLO A LA BRASA A LA PARRILLERA","LOMO SALTADO"];
    
        let categoria = elementos[0]; 
        let sabor = elementos[1].value.trim();
        var cantidad = elementos[2].value;

        if(categoria.selectedIndex==0){
            return false;
        }
        else if(!opciones.includes(bebida)){
            console.log("Opcion invalida");
            return false;
        }
        else if(sabor==null || sabor.length==0 || partron.test(sabor)||/\d+/.test){
            return false;
        }
        else if(cantidad==0|| isNaN(cantidad)|| cantidad<=0|| cantidad>99){
            return false;
        }
        else{
            addProduct();
        }

        if(product_list.length>0){
            finish.style.display="block";
        }
    }
function showProducts(){
    
    if(selectElement.value=="Helado"){
        container2.textContent="POKER EN SALSAS DE CARNE (14.00), PIZZA AMERICANA(14.00), POLLO A LA BRASA A LA PARRILLERA(14.00), LOMO SALTADO (14.00)";
    }else{
        container2.textContent="POKER EN SALSAS DE CARNE (14.00), PIZZA AMERICANA(14.00), LOMO SALTADO (14.00)";
    }
}
function addProduct(){
    var id=ids;
    let sabor = elementos[1].value.trim();
    var categoria = elementos[0].value;
    var tamaño= document.forms[0].size.value;

    var c1=document.getElementById("IKP");
    var c2=document.getElementById("CCP");
    var c3=document.getElementById("IKL");
    var c4=document.getElementById("CCL");
    var complementos=[c1,c2,c3,c4];
    var Producto=new Producto(id, categoria,sabor, elementos[2].value, tamaño, complementos);
    console.log(Producto.id);
    ids+=1;
    const element = document.createElement("div");
    element.className="card";
    element.innerHTML =`<p><strong>${producto.categoria} de ${producto.sabor}</strong></p>>br>
    Cantidad: ${producto.cantidad} Precio: ${producto.precio}
    Complementos: ${producto.extras} 4 c/u 
    Total a Pagar : ${producto.getTotal}
    <input type="button" name="delete" class="Eliminar">`;
        container.appendChild(element);
        product_list.push(producto);
        document.forms[0].reset();
        console.log(product_list);
        container.addEventListener("click", function(e){
            if(e.target.name === "delete"){
                deleteProduct(e.target, producto.ids);
            }
        });

}
function deleteProduct(element, id){
    if(element.name="delete"){
        element.parentElement.remove()
        if(product_list.length>0){
            product_list.splice(id,1);
            ids=1;
        }
        console.log("Productos: "+product_list.length);
    }
}
function Producto(id, tipo, sabor, cantidad,tamaño, complementos){
    this.id=id;
    this.tipo=tipo;
    this.sabor=sabor;
    this.cantidad=cantidad;
    this.tamaño=tamaño;
    this.extras="";
    console.log("ID: "+this.id); 
    switch (sabor) {
        case "POKER EN SALSAS DE CARNE": this.precio=14.0;   break;
        case "PIZZA AMERICANA": this.precio=13.0;   break;
        case "POLLO A LA BRASA A LA PARRILLERA": this.precio=16.0;   break;
        case "LOMO SALTADO": this.precio=17.0;   break;
    }
    this.subtotal=this.cantidad*this.precio;
    var envase=0;
    if(this.tamaño==Pequeño){
        this.precio=2.00;
    }
    else if(this.tamaño==Mediano){
        this.precio=5.00;
    }
    else if(this.tamaño==Grande){
        this.precio=7.00;
    }
    var adicional =0;
    for(var i=0; i<complementos.length;i++){
        if(complementos[i].checked==true){
            this.precio +=6.00;
            this.extras+=complementos[i].value+", "; 
        }
    }
    this.getTotal= function(){
        var total=this.subtotal + envase + adicional;
        return total;
    }
 }
}*/