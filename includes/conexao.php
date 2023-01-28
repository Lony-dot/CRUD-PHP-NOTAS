<?php
 //Conexão
 $conn = new mysqli("localhost", "root", "", "sisnotas");
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
?>