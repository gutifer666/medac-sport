<?php
session_start();
$email = $_POST["email"];
$pass = $_POST["password"];

if (isset($connection)) {
    $sql = $connection->query(" select * from usuarios where email = '$email' and clave = '$pass' ");
    $result = $sql->fetch_object();
    if ($result) {
        $_SESSION["id"] = $result->id;
        $_SESSION["firstName"] = $result->nombre;
        $_SESSION["lastName"] = $result->apellidos;
        header("Location: ../../presentacion/tienda.php");
        exit();
    } else {
        if (isset($_POST["boton"])) {
            echo "<div class='alert alert-danger'>Usuario o contraseña incorrectos</div>";
        }
    }
}


