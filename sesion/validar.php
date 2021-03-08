<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","proyecto");

$consulta="SELECT*FROM usuario where nombre='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">USUARIO Y CONTRASEÑA NO VALIDAS</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);