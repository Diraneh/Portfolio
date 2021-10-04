<?php
class Databases
{
    public function connect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=login;port=3306;charset=utf8', 'root', '');
            return $db;        
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }    
}