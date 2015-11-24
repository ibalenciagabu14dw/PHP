<?php
try{
    
   $pdo = new PDO("mysql:host=localhost;dbname=apptracking",'root', ''); 

   
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
