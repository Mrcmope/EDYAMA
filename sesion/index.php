<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
     <link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
    
    <div class="container" id='login'>
    <form action="validar.php" method="post">
<img src="IMAGENES/inicio2.png" alt="Login">  
    <h1 >INICIAR SESIÓN</h1>
    <p>Usuario: <input class="form-control" type="text" placeholder="Ingrese usuario" id="usuario" name="usuario"></p>
    <p>Contraseña: <input class="form-control"  type="password" placeholder="Ingrese contraseña" id="password" name="password"></p>
     <button type="submit" class="btn btn-primary form-control" >INGRESAR</button>

    </div>
    </form>


</body>
</html>
