<?php

require_once 'Classes/DB.php';
require_once 'seeders/Interfaces/CreateTableIfNotExists.php';
require_once 'seeders/CreateUsersTable.php';

// Gets options from the command line argument list
$getopt = getopt("p:");

$table = array_key_exists('p', $getopt) ? $getopt['p'] : null;

if (!is_null($table)) {

    $obj = null;

    if ($table == "users") {
        $obj = new \Seeders\CreateUsersTable();
    } elseif ($table == "tree") {
        $obj = new \Seeders\CreateTreeTable();
    }

    if (!is_null($obj)) {
        $obj->run();
    }

} else {
    echo "\e[0;31mYou must give parameter by -p{value}\e[0m\n";
    return false;
}