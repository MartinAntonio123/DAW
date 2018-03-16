
$(document).ready(funcionPrincipal);

function funcionPrincipal()
{
    nameFormulario = $('#name');
    nameFormulario.keyup(funcVerificar);
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

var nameFormulario;

    /*
    var selection = $('.prueba');
    $('div').css({
        'background-color':'#000',
    });
    seleccion.not('es para seleccionar elementos pero excluir alguna clase')
    selection.has('que tenga una etiqueta especifica dentro')
    selection.first() selecciona el primer elemento de los elementos con esa caracteristica
    selection.eq(3) como first pero otro numero, 0 es el primero como en arreglos
    .text('cambia el texto de adentro')
    .css({ 'background-color':'#000', }); cambia l css
    .html('cambia en html de el elemento') 
    .attr("class", "nombreclase") puedes poner id, class y otros atributos
    si no tiene parametros es getter con parametros setter
    */
