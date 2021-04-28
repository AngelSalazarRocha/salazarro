/*strCorreo = 'miCorreo';
strContraseña = 'miContraseña';
$(document).ready(function()
{
    $('#btnAceptar').click(function()
    {
        if($('#Contraseña').val() == strContraseña && $('#Correo').val() == strCorreo)
        {
            if($('#btnAceptar').val() == 'Aceptar')
            {alert('el boton aceptar dice Aceptar');}
            else{alert('el boton no dice aceptar');}
            alert('Se Accionó el boton aceptar');
            $('#CuadroDeTexto h4').text("Correcto iniciando seción...");
            $('#Aviso').css('display','block');
            $('#Aviso').slideToogle('fast', 'linear');
        }
        else
        {
            if($('#btnAceptar').val() == 'Aceptar')
            {alert('el boton aceptar dice Aceptar');}
            else{alert('el boton no dice aceptar');}
            alert('Se Accionó el boton aceptar');
            $('#CuadroDeTexto h4').text("Incorrecto, la contraseña o correo son incorrectos");
            $('#Aviso').css('display','block');
            $('#Aviso').slideToogle('fast', 'linear');
        }
    });
}) al parecer me funcionó mejor con una función auto ejecutable*/
(function()
{
    $(function()
    {
        $('#btnAceptar').on('click', function()
        {
            if($('#Contraseña').val() == 'miContraseña' && $('#Correo').val() == 'miCorreo')
            {
                $('#modalConf .modal-header h5').text('Correcto');
                $('#modalConf .modal-body p').text('Iniciando seción');
                $('#modalConf').modal();
            }
            else
            {
                $('#modalConf .modal-header h5').text('Incorrecto');
                $('#modalConf .modal-body p').text('Verifica tu correo y contraseña');
                $('#modalConf').modal();
            }
        })
    });
}());