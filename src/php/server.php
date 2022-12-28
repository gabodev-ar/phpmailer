<?php

//Creamos funciones de sanitización y validación
//de los inputs.
function sanitizer($input){
    return htmlentities(addslashes($input), ENT_QUOTES);
}

function validator_empty($name, $email, $message){
    return !empty($name) && !empty($email) && !empty($message);
}

function validator_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if(isset($_POST) && validator_empty(...$_POST)){

    //Declaramos variables y las sanitizamos.
    $name    = sanitizer($_POST['name']);
    $email   = sanitizer($_POST['email']);
    $message = sanitizer($_POST['message']);

    //establecemos un nuevo condicional
    //para validar la estructura del email ingresado.
    if(validator_email($email)) {

        echo json_encode("Este email $email sí es válido.");

    }else{

        echo json_encode("El email $email no es un email válido.");
    }


}else {

    echo json_encode("failure");
}


