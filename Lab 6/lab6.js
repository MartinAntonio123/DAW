function change()
{ 
    if(it == 1)
    {
        x.style.color = "red";
        x.style.fontStyle = "italic"  
        it = 2;
    }
    else {
        x.style.color = "blue";
        x.style.fontStyle = "normal";
        it = 1;
    }
    
}
function hasNumber(myString) {
  return /\d/.test(myString);
}
function verify1(){
    let check =  nombre.value;
    let longitud = check.length;
    if(longitud < 5){
        document.getElementById("namea").innerHTML = "demasiado corta";
    }
    else {
        if( hasNumber(check)){
            document.getElementById("namea").innerHTML = " aceptado";
        }
        else{
            document.getElementById("namea").innerHTML = "falta numero";
        }
    }
    
}
function verify2(){
    let check =  pw.value;
    let longitud = check.length;
    if(longitud < 3){
        document.getElementById("pwa").innerHTML = "demasiado corta";
    }
    else if(longitud < 6){
        document.getElementById("pwa").innerHTML = "insegura";
    }
    else if(longitud < 9){
        document.getElementById("pwa").innerHTML = "normal";
    }
    else{
        if( hasNumber(check)){
            document.getElementById("pwa").innerHTML = " muy segura";
        }
        else{
            document.getElementById("pwa").innerHTML = "segura";
        }
    }
}

function cambiacolor(){
    
    if(color == 1){
        y.style.color = "purple";
    }
    
    else if(color == 2){
        y.style.color = "AliceBlue";
    }
    else if(color == 3){
        y.style.color = "Black ";
    }
    else if(color == 4){
        y.style.color = "Brown";
    }
    else if(color == 5){
        y.style.color = "DarkGray ";
    }
    else {
        y.style.color = "ForestGreen ";
    }
    color++;
    if(color == 7){
        color = 1;
    }
}

function cambiar(){
    if(estado == 1){
        activo = setInterval(cambiacolor, 1500);
        estado = 2;
    }
    else{
        clearInterval(activo);
        estado = 1;
    }
}
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

var x = document.getElementById("natacion");
var y = document.getElementById("personal")
var nombre = document.getElementById("name");
var pw = document.getElementById("pw")
var it = 1;
var color = 1;
var estado = 1;
var activo;
x.addEventListener("click", change);
nombre.addEventListener("keydown", verify1);
pw.addEventListener("keydown" , verify2);
