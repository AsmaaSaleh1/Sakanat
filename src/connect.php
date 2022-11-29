<?php
try {
    $db = new mysqli('localhost','root','','sakanatpro');

}catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}
?>