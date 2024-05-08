<?php
    $db = new PDO("mysql:host=localhost;dbname=Vova","root","");

    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $stmt = $db->prepare("INSERT INTO `feedback` (`name`, `phone`) VALUES (?, ?)");

    $stmt->execute([$name, $phone]);

    header('Location: /index.php?feedback=success#feedback_form');
?>