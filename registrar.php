<?php
include("con_db.php");if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $user = trim($_POST['user']);
        $password = trim(string: $_POST['password']);
        $fecha_reg = date(format: "d/m/y");
        $consulta = "INSERT INTO registro(name, email, phone, user, password, fecha_reg) VALUES ('$name','$email','$phone','$user','$password','$fecha_reg')";
        $resultado = mysqli_query( $conex,$consulta);
        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }
}

?>