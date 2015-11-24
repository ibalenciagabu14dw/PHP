<?php
try{
    
   $pdo = new PDO("mysql:host=localhost;dbname=apptracking",'root', 'zubiri'); 

   
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
