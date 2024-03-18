<?php
session_start();
$email = $_SESSION['email'];

try {
    $con = new PDO("mysql:host=localhost;dbname=shareef", "root", "");
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
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        .profile {
            max-width: 600px;
            margin: 0 auto;
            background-color: lightblue;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile h2 {
            color: #333333;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px;
        }

        .profile p {
            line-height: 1.5;
        }

        .profile .info {
            margin-bottom: 20px;
        }

        .profile .info span {
            font-weight: bold;
        }

        .profile .actions {
            text-align: center;
        }

        .profile .actions a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333333;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .profile .actions a:hover {
            background-color: #555555;
        }
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
