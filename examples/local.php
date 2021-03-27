<?php
try {
    $local = new PDO("mysql:host=localhost;dbname= ;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo "Connect false";
}