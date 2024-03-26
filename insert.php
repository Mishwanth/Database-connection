<?php
    echo "inserted";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $name = $_POST['pname'];
        $email = $_POST['email'];
        $password = $_POST['password']; //password = ;
        $phone = $_POST['phone'];
        $sql = "INSERT INTO passenger (passenger_name, email, _password, phone) VALUES ('$name', '$email', '$password', '$phone')";
        if ($conn->query($sql) === TRUE) {
            header("Location: options.html");
            exit();
        }
    }
    $conn->close();

    ?>