<?php



if(!empty($_POST["name"])){
    $name = $_POST["name"];
    $email= $_POST["email"];

    echo $name;
    echo "</br>";
    echo $email;
}else{
    echo "El formulario esta vacio";
}