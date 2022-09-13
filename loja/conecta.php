<?php 
    $servername = "localhost";
    $database = "loja";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
    if (!$conn) {
        die("Falha na Conexão: " . mysqli_connect_error());
    }
   // echo "Sucesso na Conexão";
 ?>