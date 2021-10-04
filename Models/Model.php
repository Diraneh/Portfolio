<?php
require_once('public/connect.php');
class model extends Databases{

    public function  sendmessage(){
        $inscription = $this->connect()->prepare('SELECT * FROM login');
        $inscription->execute();
        $result = $inscription->fetchALL(PDO::FETCH_ASSOC);
        return $result;
     }

    }
    