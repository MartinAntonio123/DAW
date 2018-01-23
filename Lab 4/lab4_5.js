function invertir(arg)
{
    let a = [];
    let res = [];
    let f = "";
    a = arg.toString();
    let i;
    let j = (a.length - 1);
    for(i = 0; i < a.length; i++, j--){
        res[j] = a[i];
    }
    for(i = 0; i < a.length; i++){
        f = f + res[i];
    }
    return f;
}

var num = 12345;
var num2 = 98765;
var num3 = 456789;
var parraf5 = document.getElementById("ejer5");
parraf5.innerHTML = "resultado de invertir " + num + " = " + invertir(num) + "<br/>" + "resultado de invertir " + num2 + " = " + invertir(num2) + "<br/>" + "resultado de invertir " + num3 + " = " + invertir(num3) + "<br/>";