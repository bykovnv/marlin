<?php
    $db = new PDO('mysql:host=localhost;dbname=php-start;', 'php-start_usr', 'pqQn1C7FxQ7A1Vn6', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    $sql = "INSERT task_9 (text) VALUES (:text)";
    $query = $db->prepare($sql);
    $text = $_POST["text"];
    $params = ["text" => $text];
    $query->execute($params);
    header('Location: https://doodee.ru/php/task_9.php');  
    
?>