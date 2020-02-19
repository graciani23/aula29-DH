<?php
    require 'Controller/formController.php';

    //echo $_SERVER['REQUEST_URI'];die;

    if($_SERVER['REQUEST_URI'] === '/graciani/aula29/mvc/formulario') {

    $obj = new FormController();
    $obj->form();

    } else if ($_SERVER['REQUEST_URI'] === '/graciani/aula29/mvc/') {
    $obj = new FormController();
    $obj->home();    
    
    } else {
        echo "404 - Não encontrado";
    }
    //echo "Eu quero ser um MVC"
?>