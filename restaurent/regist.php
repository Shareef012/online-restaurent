<?php
    $fname = $_REQUEST["uname"];
    $lname = $_REQUEST["lname"];
    $mob = $_REQUEST["mob"];
    $mail = $_REQUEST["mail"];
    $pass = $_REQUEST["pass"];
    
    try {
        $con = new PDO("localhost", "root", "");
        $stmt = $con->prepare("INSERT INTO register_info VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $fname);
        $stmt->bindParam(2, $lname);
        $stmt->bindParam(3, $mob);
        $stmt->bindParam(4, $mail);
        $stmt->bindParam(5, $pass);
        $stmt->execute();
        
        if ($stmt !== false) {
            header("Location: main.html");
            exit;
        }
        
        $con = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
<?php
    $fname = $_REQUEST["uname"];
    $lname = $_REQUEST["lname"];
    $mob = $_REQUEST["mob"];
    $mail = $_REQUEST["mail"];
    $pass = $_REQUEST["pass"];
    
    try {
        $con = new PDO("mysql:host=localhost;dbname=shareef;charset=latin1", "root", "Shareef@53");
        $stmt = $con->prepare("INSERT INTO register_info VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $fname);
        $stmt->bindParam(2, $lname);
        $stmt->bindParam(3, $mob);
        $stmt->bindParam(4, $mail);
        $stmt->bindParam(5, $pass);
        $stmt->execute();
        
        if ($stmt !== false) {
            header("Location: main.html");
            exit;
        }
        
        $con = null;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
