<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="css/estilos-login.css">
    <title>Login</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="row text-center login-page">
                <div class="col-md-12 login-form">
                    <form action="realizarLogin.php" method="post">
                        <div class="row">
                            <div class="col-md-12 login-form-header">
                                <p class="login-form-font-header">Pasteles<span>Miroslava</span>
                                    <p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <input class="form-control" name="email" type="text" placeholder="Email" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <input class="form-control" name="password" type="password" placeholder="Contraseña" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                                <button onclick="location.href='registro.php'" type="submit" class="btn btn-success btn-block">Registrarse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="Js/app.js"></script>
</body>

</html>