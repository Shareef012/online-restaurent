<?php
$mail = $_REQUEST["username"];
$npswd = $_REQUEST["new-password"];
$cpswd = $_REQUEST["confirm-password"];

if ($npswd === $cpswd) {
    try {
        $con = new PDO("localhost", "root", "");
        $stmt = $con->prepare("UPDATE register_info SET pass=? WHERE mail=?");

        $stmt->bindParam(1, $npswd);
        $stmt->bindParam(2, $mail);

        if ($stmt->execute()) {
            header("Location: login.html");
            exit;
        }

        $stmt = null;
        $con = null;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    echo "<h1>New password and current password are not the same...</h1>";
}
?>
