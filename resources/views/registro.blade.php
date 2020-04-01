<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
  </head>

  <body background="http://localhost/laravelcrud/public/img/fondo2.jpg">
    <!--barra navbar-->
    <nav class="navbar nav-tabs navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <a class="navbar-brand" href="login">Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="productos">productos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="pedidos">pedidos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="usuarios">usuarios</a>
      </li>
    </ul>

    <a class="btn btn-outline-success my-2 my-sm-0" href="" data-toggle="modal" data-target="#registrarmodal">Regristrarse</a>

  </div>

  <!--termina barra navbar-->
</nav><br><br><br>

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
  </body>

</html>
