<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM user");

json_encode($usuarios);



    echo "</br>";
    echo "<b>Nome: </b>";
    print_r($usuarios[1]['nome']);
    echo "<br>";
    echo "<b>Email: </b>";
    print_r($usuarios[1]['email']);
    echo "<br>";
    echo "<b>telefone: </b>";
    print_r($usuarios[1]['telefone']) ;
    echo "<br>";






?>

