<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkUserQuery = "SELECT * FROM passenger WHERE email='$email' AND _password='$password'";
    $userResult = $conn->query($checkUserQuery);

    if ($userResult->num_rows > 0) {
        $deleteQuery = "DELETE FROM passenger WHERE email='$email' AND _password='$password'";
        if ($conn->query($deleteQuery) === TRUE) {
            header("Location: options.html");
            exit();
        } else {
            echo "Error deleting user record: " . $conn->error;
        }
    } else {
        echo "User not found. Please check your email and password.";
    }
    echo '<html>';
        echo '<form action="redirect.php" method="post">
        <input type="hidden" name="location" value="options.html">
        <button type="submit">BACK</button>
    </form>';
        echo '</html>';
}

$conn->close();
?>
