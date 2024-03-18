<?php
session_start();
$email = $_SESSION['email'];

try {
    $con = new PDO("localhost", "root", "");
    $stmt = $con->prepare("SELECT * FROM register_info WHERE mail=:email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f1f1f1;
      background-image: url('https://cptlyne.com/wp-content/uploads/2020/11/Sans-titre-15.jpg');
    }
    /* Rest of your CSS styles */
  </style>
</head>
<body>
    <div class="profile">
        <h1>User Profile</h1>
        <img src="img1.jpeg" alt="Profile Picture">
        <div class="info">
            <h2><?= $row['fname'] ?></h2>
            <p><span>Email:</span> <?= $row['mail'] ?></p>
            <p><span>Phone No:</span><?= $row['mob'] ?></p>
            <p><span>Age:</span> 20</p>
        </div>
        <div class="actions">
            <a href="signup.html">Edit Profile</a>
        </div>
    </div>
</body>
</html>
<?php
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
