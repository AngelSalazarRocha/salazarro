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
                
                $("#modalConf").on('shown.bs.modal',function() {
                    $('#btnClose').focus();
                    });
                $('#modalConf').on('hidden.bs.modal',function()
                {
                    $('#modalConf .modal-header').removeClass('modal-header-success');
                    $(location).attr('href',"index.php");
                });
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