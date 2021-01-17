<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'blog';
        $this->user     = 'root';
        $this->pass     = '';
        $this->charset  = 'utf8mb4';
    }

    function connect(){

        try {
            
            // DEBUG ERROR BD
            $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false];

            $pdo = new PDO("mysql:host=" . $this->host 
                            . ";dbname=" . $this->db 
                            . ";charset=" . $this->charset
                            ,$this->user
                            ,$this->pass
                            ,$option);

                            return $pdo;

        } catch (PDOException $e) {

            print_r("Error connection : " . $e->getMessage());
        }

    }




}


?>