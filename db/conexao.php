<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=banco", "root", "");
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo $e->getCode();
    }
?>