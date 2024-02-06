<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["demo-name"];
    $email = $_POST["demo-email"];
    $category = $_POST["demo-category"];
    $priority = isset($_POST["demo-priority"]) ? $_POST["demo-priority"] : "";
    $copyEmail = isset($_POST["demo-copy"]) ? "Yes" : "No";
    $notRobot = isset($_POST["demo-human"]) ? "Yes" : "No";
    $message = $_POST["demo-message"];

    // You can add your logic here to process the form data.
    // For now, let's just print the data to the screen.
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Category: $category<br>";
    echo "Priority: $priority<br>";
    echo "Copy Email: $copyEmail<br>";
    echo "Not a Robot: $notRobot<br>";
    echo "Message: $message<br>";
} else {
    // Redirect the user if they try to access the script directly.
    header("Location: index.html");
    exit();
}
?>
