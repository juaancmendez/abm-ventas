<?php

    include_once "config.php";
    include_once "entidades/usuario.php";

    $usuario = new Usuario();
    $usuario->usuario = "juancoronel";
    $usuario->clave = $usuario->encriptarClave("admin123");
    $usuario->nombre = "Juan Ignacio";
    $usuario->apellido = "Coronel Mendez";
    $usuario->correo = "juan@mail.com";
    $usuario->insertar();

?>