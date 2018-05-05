<?php 
class mysqlConnect
{
    public function __construct()
    {
        $con = new mysqli('localhost','root','123456789','db_');
    }
}