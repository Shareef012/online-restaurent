<?php
$mail = $_REQUEST["mail"];
$pass = $_REQUEST["pass"];

try {
    $con = new PDO("localhost", "root", "");
    $stmt = $con->prepare("SELECT fname FROM register_info WHERE mail=? AND pass=?");
    $stmt->bindParam(1, $mail);
    $stmt->bindParam(2, $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        session_start();
        $_SESSION["email"] = $mail;
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
