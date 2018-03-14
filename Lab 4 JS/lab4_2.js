var num1;
var num2;
var aux;
var minutos;
var segundos;
var horas;
var pescr = document.getElementById("result");
num1 = Math.floor((Math.random()*100)+1);
num2 = Math.floor((Math.random()*100)+1);
aux = num1 + num2;
var fecha1 = new Date();
minutos = fecha1.getMinutes();
segundos = fecha1.getSeconds();
var res = prompt(num1 + " + " + num2 +" = ");
if(res != null){
    var fecha2 = new Date();
    minutos = fecha2.getMinutes() - minutos;
    segundos = fecha2.getSeconds() - segundos;
    if (res == aux)
        {
            pescr.innerHTML = num1 + " + " + num2 +" = " + res + " es correcto <br/> Y tardaste " + segundos + " segundos " + minutos + " minutos.";    
        }
    else{
        pescr.innerHTML = num1 + " + " + num2 +" = " + res + " es incorrecto  <br/>Y tardaste " + segundos + " segundos " + minutos + " minutos.";   
    }
}