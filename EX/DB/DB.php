<?php
//測試連線是否正常

namespace DB;
use PDO;
use PDOException;

class DB{
    public function __construct()
    {
     try {

    $db = new PDO('mysql:host=10.1.1.32;dbname=hello','peter','World123');
    if (isset($db)) printf("Connection Success");
    }   catch(PDOException $e) {
    printf("Could not connect to the database: %s ",$e->getMessage());
    }
        
        
    }




}

?>