<?php
include_once("../model/usuario.php");
include_once("../model/detalleUsuario.php");
include_once("../shared/formMensaje.php");
include_once("formMenuPrincipal.php");

class controlAutenticacion{

    public function validarUsuario($usuario, $password){
        $objUsuario = new usuario;
        $respuesta = $objUsuario -> verificarUsuario($usuario, $password);
        if($respuesta == 1){
            $objRoles = new detalleUsuario;
            $listRoles = $objRoles -> obtenerRoles($usuario);
            $objPrincipal = new formMenuPrincipal;
            $objPrincipal -> formMenuPrincipalShow($listRoles);
        }
        else{
            $objMensaje = new formMensaje;
            $objMensaje -> formMensajeShow("EL USUARIO NO EXISTE, EL PASSWORD ES INCORRECTO O EL USUARIO ESTA DESAHILITADO","../index.php");
        }
    }

}

?>