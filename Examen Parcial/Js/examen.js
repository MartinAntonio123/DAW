
$(document).ready(funcionPrincipal);

function funcionPrincipal()
{
    nameFormulario = $('#name');
    nameFormulario.keyup(funcVerificar);
    $('#all').click(funcAll);
    $('#fail').click(funcFail);
}
function funcVerificar(){
    var url = "verificarUsuario.php?USUARIO=" + nameFormulario.val();
    var resp;
    $.get(url, function(data){
        resp=data;
        if(resp==1)
        resp='Este usuario ya existe';
        else
            resp='usuario valido';
        $('#respUsuario').text(resp);
    });
}
function funcAll()
{
    var url = "failRegistros.php";
    $.get(url, function(data){
        $('#respUsuario').html(data);
    });
}
function funcFail()
{
    var url = "allRegistros.php";
    $.get(url, function(data){
        $('#respUsuario').html(data);
    });
}
function funcSuccess()
{
    var url = "successRegistros.php";
    $.get(url, function(data){
        $('#respUsuario').html(data);
    });
}

var nameFormulario;

