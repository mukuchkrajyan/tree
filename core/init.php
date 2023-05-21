<?php


spl_autoload_register(function ($classname) {

    $class_path = str_replace('\\', '/', $classname);

    include $_SERVER['DOCUMENT_ROOT'] . '/' . $class_path . '.php';
//    include $_SERVER['DOCUMENT_ROOT'] . '/Classes/' . $classname . '.php';

});
