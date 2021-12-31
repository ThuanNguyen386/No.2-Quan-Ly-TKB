
<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "db";
    $password = "";
    $dsn_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
        $connect = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, $dsn_options);
        // set the PDO error mode to exception
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit();
    }
?>
