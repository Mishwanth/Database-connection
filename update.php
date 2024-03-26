<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $oldemail = $_POST['oldemail'];
        $oldpassword = $_POST['oldpassword'];
        $name = $_POST['pname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        $updateQuery = "UPDATE passenger SET passenger_name='$name', phone='$phone', email='$email', _password='$password' WHERE email='$oldemail' AND _password='$oldpassword'";
        if($conn->query($updateQuery) === TRUE){ 
            $conn->commit();               
            header("Location: options.html");
            exit();
            
        }
           
    }
   
    
    $conn->close();

    ?>