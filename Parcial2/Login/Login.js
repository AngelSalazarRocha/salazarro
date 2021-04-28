strCorreo = 'miCorreo';
strContraseña = 'miContraseña';
$(document).ready(function()
{
    $('#btnAceptar').click(function()
    {
        if($('#Contraseña').val() == strContraseña && $('#Correo').val() == strCorreo)
        {
            $('#CuadroDeTexto h4').text("Correcto iniciando seción...");
            $('#Aviso').css('display','block');
            $('#Aviso').slideToogle();
        }
        else
        {
            $('#CuadroDeTexto h4').text("Incorrecto, la contraseña o correo son incorrectos");
            $('#Aviso').css('display','block');
            $('#Aviso').slideToogle();
        }
        alert('Se Accionó el boton aceptar');
    });
})
/* no me funcionó el modal, este es el modal con el que habia intentado hacerlo
$(document).ready(function()
{
    $('#btnAceptar').click(function()
    {
        if($('#Contraseña').val() == strContraseña && $('#Correo').val() == strCorreo)
        {
            $('modalConf .modal-header').addClass('moda-header-success');
            $('modalConf .modal-header h5').text('Acceso Concedido');
            $('modalConf .modal-body p').text('Bienvenido');
            $('modalConf').modal();
            $('modalConf').on('hiden.bs.modal', function()
            {
                $('modalConf .modal-header').removeClass('modal-header-success')
            })
            alert('Se Accionó el boton aceptar');
        }
        else
        {
            $('modalConf .modal-header').addClass('moda-header-danger');
            $('modalConf .modal-header h5').text('Error');
            $('modalConf .modal-body h4').text('Verifique el usuario o contraseña');
            $('modalConf').modal();
            $('modalConf').on('hiden.bs.modal', function()
            {
                $('modalConf .modal-header').removeClass('modal-header-danger')
            })
            alert('Se Accionó el boton aceptar');
        }
        alert('Se Accionó el boton aceptar');
    });
})
*/