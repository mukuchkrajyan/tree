<?php

namespace Seeders\Interfaces;


interface CreateTableIfNotExists{

    public function getTable();

    public function run();
}