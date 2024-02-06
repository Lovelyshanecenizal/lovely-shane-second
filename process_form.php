<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add your logic here to process the form data.
    // For now, let's just print the data to the screen.
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
} else {
    // Redirect the user if they try to access the script directly.
    header("Location: index.html");
    exit();
}
?>
