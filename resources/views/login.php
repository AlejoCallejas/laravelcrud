<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body background="http://localhost/laravelcrud/public/img/fondo2.jpg">
  <body>
    <!--barra navbar-->
    <nav class="navbar nav-tabs navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
          <a class="navbar-brand" href="login">Login</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="productos">Productos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pedidos">Pedidos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="usuarios">Usuarios</a>
            </li>
            </li>
            <li class="nav-item">
            </ul>
            <li class="form-inline my-2 my-lg-0">
            <a class="btn btn-outline-success my-2 my-sm-0" href="" data-toggle="modal" data-target="#registrarmodal">Regristrarse</a>

            </li>
        </div>
      </nav><br><br><br>
        <!--termina barra navbar-->
    </body>
    <center>
    <img src="http://localhost/laravelcrud/public/img/logo1.jpg" alt="">
    <h1>Iniciar Sesión</h1></center>
        <form>
          <!--formulario login-->
        <div class="form-group">
          <label for="exampleInputEmail1">Correo</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recordar</label>
        </div>
        <button type="submit" class="btn btn-dark">Ingresar</button>

    </form>
      <!--termina formulario login-->
      <!--cuadro de login-->
    <style type="text/css">
                form
                {
                 /* Sólo para centrar el formulario a la página */
                    margin: 0 auto;
                    width: 400px;
                    /* Para ver el borde del formulario */
                    padding: 1em;
                    border: 8px solid #ffff;
                    border-radius: 1em;
                }
                form div + div
                {
                    margin-top: 1em;
                }
                label
                {
                    /* Para asegurarse que todos los labels tienen el mismo tamaño y están alineados correctamente */
                    display: inline-block;
                    width: 90px;
                    text-align: right;
                }
                input, textarea
                {
                    /* Para asegurarse de que todos los campos de texto tienen las mismas propiedades de fuente
                    Por defecto, las areas de texto tienen una fuente con monospace */
                    font: 1em sans-serif;

                    /* Para darle el mismo tamaño a todos los campos de texto */
                    width: 300px;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;

                    /* Para armonizar el look&feel del borde en los campos de texto */
                    border: 1px solid #999;
                }
                input:focus, textarea:focus
                {
                    /* Para dar un pequeño destaque en elementos activos*/
                    border-color: #000;
                }
                textarea
                {
                    /* Para alinear campos de texto multilínea con sus labels */
                    vertical-align: top;

                    /* Para dar suficiente espacio para escribir texto */
                    height: 5em;

                    /* Para permitir a los usuarios cambiar el tamaño de cualquier textarea verticalmente
                        No funciona en todos los navegadores */
                    resize: vertical;
                }
                button
                {
                    /* Para posicionar los botones a la misma posición que los campos de texto */
                    padding-left: 0 0px; /* mismo tamaño a todos los elementos label */
                }
                button
                {
                    /* Este margen extra representa aproximadamente el mismo espacio que el espacio
                    entre los labels y sus campos de texto */
                    margin-left: 13em;
                }
            </style>
            <!--cuadro de login-->

    <div class="modal fade" id="registrarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="Agregar.php" method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Regristro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <div class="modal-body">
                  <div class="container">

                    <div class="form-group">
                        <input type="text" name="Nombre" id="" placeholder="Nombre" id="text"required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="Apellido" id="" placeholder="Apellido" id="text"required="">
                    </div>

                    <div class="form-group">
                        <input type="text" name="Correo" id="" placeholder="Correo Electrónico" id="text"required="">
                    </div>

                    <div class="form-group">
                        <input type="password" name="Clave" id="" placeholder="Contraseña" id="text"required="">
                    </div>

                  </div>
               </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-success" type="submint">Registrar</button>
              </div>
            </form>
          </div>
      </div>

         <div class="col-12 col-xd-4 col-ig-4 col-md-4">
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
