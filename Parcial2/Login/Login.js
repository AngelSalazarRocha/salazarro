$('document').ready(function()
{
    $('#btnAceptar').click(botonIniciarSecion)
    $('#Contraseña').keypress(function(e)
    {
        botonIniciarSecion();
    });

    function botonIniciarSecion()
    {
        var vLog = $('#Correo').val();
        var vPas = $('#Contraseña').val();
        if(vLog == 'miUsuario' && vPas == 'miContraseña')
        {
            $('modalConf .modal-header').addClass('moda-header-success');
            $('modalConf .modal-header h5').text('Acceso Concedido');
            $('modalConf .modal-body p').text('Bienvenido');
            $('modalConf').modal();
            $('modalConf').on('hiden.bs.modal', function()
            {
                $('modalConf .modal-header').removeClass('modal-header-success')
            })
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
        }
    }
});
