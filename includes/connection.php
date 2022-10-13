<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=intrapanel', 'root', '');
    echo "<span id='success'><div class='dot'></div></span>";
} catch (PDOException $e) {
    echo "<span id='denied'><div class='dot'></div></span>";
    exit('Database not connected.');
}
