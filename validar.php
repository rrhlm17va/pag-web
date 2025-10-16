<?php
  $user=$_POST['user'];
  $password=$_POST['password'];
 session_start();
  $_SESSION['user']=$user;

  $conex=mysqli_connect("localhost", "root", "", "pqsa");

  $consulta="SELECT*FROM registro where user='$user' and password='$password'";
 $resultado=mysqli_query($conex, $consulta);

 $filas=mysqli_num_rows($resultado);

if($filas){
   header("location:home.php");

}
else{
    ?>
    <h1 >ERROR EN LA AUTENTIFICACION</h1>
    <a href="index.html">inicio</a>
    <?php
 }

 mysqli_free_result($resultado);
 mysqli_close($conex);