<?php
class Mahasiswa_model{
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        $username = 'root'; // Define the username
        $password = ''; // Use '' if you don't have a password for the root user
    
        try {
            // Correct way to pass parameters to the PDO constructor
            $this->dbh = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    
    public function getAllMahasiswa()
    {
       $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
       $this->stmt->execute();
       return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
}