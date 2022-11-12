<?php 
if(session_status()==1)session_start();
$_SESSION["nombre"]="Jose Perez";
$_SESSION["email"]="jperez@gmail.com";
echo "se crearon las sesionnes";
?>