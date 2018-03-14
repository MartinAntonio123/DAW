var name = prompt("da tu nombre");
if (name != null) {
    document.getElementById("escr").innerHTML = "Hello " + name;
}
var numMax = prompt("hasta que numero llegaras?");
var string = "hello " + name + " te mostrare tu numero con cuadrados y cubos <br/>"
/*
if (numMax != null){
    for( aux = 0 ; aux <= numMax ; aux++){
        string = string + " " + aux + " " + aux * aux + " " + aux * aux * aux + "<br/>";
    }
    document.getElementById("escr").innerHTML = string;
}
*/
var tabla = document.getElementById("tabla1");
var row;
var cell;
if (numMax != null){
    for( aux = 0 ; aux <= numMax ; aux++){
        row = tabla.insertRow()
        for(j = 0 ; j < 3; j++){
            cell = row.insertCell(j);
            cell.innerHTML = Math.pow(aux , j+1);
        }
    }
}

