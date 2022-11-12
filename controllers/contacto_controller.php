<?php
require_once("models/contacto.php");
class contacto_controller{
    public static function crear(){
        $titulo="Creación de comentario de contacto";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/contacto/crear.php");
        require_once("views/template/footer.php");
    } 
    public static function mostrar(){
        if($_POST){
        
            if(!isset($_POST["token"]) || !seg::validaSession($_POST["token"])){
                echo "Acceso restringido";
                exit();
            }

            empty($_POST["txtNombre_contacto"])?$error[0]="El nombre de contacto es necesario":$nombre = $_POST["txtNombre_contacto"];
            empty($_POST["txtCorreo_contacto"])?$error[1]="El correo del contacto es necesario":$correo = $_POST["txtCorreo_contacto"];
           
            $comentario=$_POST["txtComentario_contacto"];

            if (isset($error)){
                $titulo="Creación de comentario de contacto";
                require_once("views/template/header.php");
                require_once("views/template/navbar.php");
                require_once("views/contacto/crear.php");
                 require_once("views/template/footer.php");
            }else{
            $nombre=filter_var($nombre, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $correo=filter_var($correo, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $comentario=filter_var($comentario, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            
            $contacto = new contacto($nombre, $correo, $comentario);
            $resultados = $contacto->getDatos();
            $titulo="Mostrar datos de contacto";
            require_once("views/template/header.php");
            require_once("views/template/navbar.php");
            require_once("views/contacto/mostrar.php");
            require_once("views/template/footer.php");
            }
        }
    }
}
?>