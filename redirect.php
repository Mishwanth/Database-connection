<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $location = $_POST["location"];
    header("Location: $location");
    exit();
}
?>
