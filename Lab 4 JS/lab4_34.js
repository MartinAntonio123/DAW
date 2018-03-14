function promedio(arguments)
{
   let i;
   let res=0;
   for(i = 0; i < arguments.length; i++){
       res = res + arguments[i];
   }
    res = res / arguments.length;
    return res;
}
function promedios(arguments)
{
    let i;
    let res = "los promedios son <br/>"
    for(i = 0; i < arguments.length; i++){
       res = res + "promedio" + (i+1) + ": " + promedio(arguments[i])+ "<br/>";
   }
    return res;
}
function contador(arg)
{
    let i;
    let mayor = 0;
    let menor = 0;
    let ceros = 0;
    for(i = 0; i < arg.length; i++)
        {
            if(arg[i] < 0)
                {
                    menor++;
                }
            else if(arg[i] == 0)
                {
                    ceros++;
                }
            else{
                mayor++;
            }
        }
    return ("mayores = " + mayor + " menores = " + menor + " ceros = " + ceros + "<br/>"); 
}

var array = [-3, -2, -1, 0, 1, 2, 3];
var array1 = [-4, -3, -2, -1, 0, 1, 2, 3, 4];
var array2 = [-100, -30, 22, 0, 0, 0, -2, 3, 4];
var matriz = [[10, 10, 10], [8, 8, 8], [5, 5, 5], [6, 6, 6]];
var parraf3 = document.getElementById("ejer3");
var parraf4 = document.getElementById("ejer4");
parraf3.innerHTML = "resultados contador: <br/>" + contador(array) + contador(array1) + contador(array2);
parraf4.innerHTML =  promedios(matriz);