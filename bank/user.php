<?php


namespace App\Briqsbank;

use App\Briqsbank\Database\DB;
use PDO;

class user{
    private $db;
    

    public function_contruct(){
        $this->db = DB::getinstance()->getconnection();

    }
    public function register(string $name, $email):int {
        $statement = $this->db->prepare("INSERT INTO users(name ,email)VALUES(?,?)"):
        $statement->execute([$name,$email]);
        return $this->db->lastInsertId();

    }
    public function getuser(int $db )aray:false{
        $statement = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $statement->execute([$id]);
        return $statement->fecth(PDO::FECTH_ASSOC);
 
    }
}