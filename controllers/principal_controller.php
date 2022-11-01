<?php
require_once("utils/seg.php");
class principal_controller {
    public static function index() {
        $titulo="Página principal ";
        require_once("views/template/header.php");
        require_once("views/template/navbar.php");
        require_once("views/principal/index.php");
        require_once("views/template/footer.php");
    }
}
?>