<?php

    include_once("topoadmin.php");
    include_once("menuadmin.php");

    // Conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudoadmin.php";
        include_once("$var");
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("rodapeadmin.php");

?>