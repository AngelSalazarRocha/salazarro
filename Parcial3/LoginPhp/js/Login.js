(function()
{
    $(function()
    {
        $('#btnAceptar').on('click', function()
        {
            var strUsuario = $('#Correo').val();
            var strContraseña = $('#Contraseña').val();

            $.post('./php/conectar.php', {Login:strUsuario,strContraseña}, function(ret)
            {
                console.log(ret);
                if(ret['resultado'] != 0)
                {
                    $('#modalConf .modal-header h5').text('Incorrecto');
                    $('#modalConf .modal-body p').text('Verifica tu correo y contraseña');
                    $('#modalConf').modal();
                }
                else
                {
                    console.log('Iniciando seción')
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
            },'json');
        })
    });
}());