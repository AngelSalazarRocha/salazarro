strCorreo = 'miCorreo';
strContraseña = 'miContraseña';
$(document).ready(function()
{
    $('#btnAceptar').click(function()
    {
        if($('#Contraseña').val() == strContraseña && $('Correo').val() == strCorreo)
        {
            $('#CuadroDeTexto h4').text("Correcto iniciando seción...");
            $('#Aviso').slideToogle();
        }
        else
        {
            $('#CuadroDeTexto h4').text("Incorrecto, la contraseña o correo son incorrectos");
            $('#Aviso').slideToogle();
        }
        alert('Se Accionó el boton aceptar');
    });
})