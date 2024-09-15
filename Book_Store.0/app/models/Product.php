<?php
// echo __DIR__.'/../database/config.php';
// die();
include_once __DIR__ . '../database/config.php';
class Product extends config implements operations
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database_name = "ecommerce";
    public  function create() {}
    public function update() {}
    public function read() {}
    public function delete() {}
}
