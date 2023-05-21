<?php

namespace Seeders;

use Seeders\Interfaces\CreateTableIfNotExists;
use DB;

class CreateTreeTable implements CreateTableIfNotExists
{
    private static $table = "tree";
    private $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    /*
     * Get Current Class Table
     */
    public function getTable()
    {
        return self::$table;
    }

    /*
     *Build Sql query
     */
    private function buildQuery()
    {
        $table = self::$table;

        $q = "CREATE TABLE $table( 
          id   INT AUTO_INCREMENT,
          full_name  VARCHAR(100)  NULL, 
          username VARCHAR(50) NOT NULL, 
          password   VARCHAR(100) NOT NULL, 
          date  VARCHAR(100)NOT NULL, 
         )";

        return $q;
    }

    /*
     * Create Table
     */
    public function run()
    {
        $this->db->prepare($this->buildQuery());
    }

}