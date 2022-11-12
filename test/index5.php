<?php
    if(session_status()==1)session_start();
    if (isset($_COOKIE["user"]))
    echo " El valor de la cookies es de: ".$_COOKIE["user"];
    else
    echo "no hay cookies seteadas";
?>