<!DOCTYPE HTML>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>Formularios PHP y HTML</title>
</head>

<body>
  <h1>Formulario</h1>
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <p>
      <input type="text" name="nombre" />
    </p>

    <label for="apellido">Apellido:</label>
    <p><input type="text" name="apellido" /></p>

    <label for="boton">Botón:</label>
    <p><input type="button" name="boton" value="cliclame" /></p>

    <label for="sexo">Sexo:</label>
    <p>
      Hombre: <input type="checkbox" name="sexo" value="hombre" />
      Mujer: <input type="checkbox" name="sexo" value="mujer" checked="checked" />
    </p>

    <label for="color">Color:</label>
    <p><input type="color" name="color" /></p>

    <label for="fecha">Fecha:</label>
    <p><input type="date" name="apellido" /></p>

    <label for="numero">Numero:</label>
    <p><input type="number" name="numero" /></p>

    <label for="pass">Contraseña:</label>
    <p><input type="password" name="pass" /></p>

    <label for="continente">Continente:</label>
    <p>
      America del sur <input type="radio" name="continente" value="America del sur" />
      Europa <input type="radio" name="continente" value="Europa" />
      Asia <input type="radio" name="continente" value="Asia" />
    </p>

    <label for="web">Pagina web:</label>
    <p><input type="url" name="web" /></p>



































    <input type="submit" value="Enviar" />
  </form>
</body>

</html>