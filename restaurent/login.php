<?php
session_start();

$mail = $_REQUEST["mail"];
$pass = $_REQUEST["pass"];

try {
    $con = new PDO("mysql:host=localhost;dbname=shareef", "root", "");
    $stmt = $con->prepare("SELECT fname FROM register_info WHERE mail=? AND pass=?");
    $stmt->bindParam(1, $mail);
    $stmt->bindParam(2, $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION["email"] = $mail;
        echo "Session variable 'email' set to: " . $_SESSION["email"];
        header("Location: main.html");
        exit;
    } else {
        echo "INCORRECT MAIL AND PASSWORD";
    }

    $con = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
