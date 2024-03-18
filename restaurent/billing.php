<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["item"]) && is_array($_POST["item"])) {
        ?>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Billing</title>
            <style>
                body {
                    font-family: "Sofia", sans-serif;
                    font-size: 20px;
                    background-color: plum;
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-size: cover;
                }

                p {
                    color: lightyellow;
                    font-size: x-large;
                    line-height: 2em;
                    font-family: "Sofia", sans-serif;
                }

                h1,
                h3 {
                    color: deeppink;
                    text-shadow: 3px 3px 3px #ababab;
                    background: lightblue;
                    font-family: "Audiowide", sans-serif;
                }

                table {
                    border: 1px solid;
                    width: 100%;
                    border-collapse: collapse;
                }

                td {
                    font-family: "Audiowide", sans-serif;
                    color: red;
                    font-family: sans-serif;
                    text-align: center;
                    padding: 15px;
                }

                th {
                    height: 70px;
                    font-family: sans-serif;
                    color: deeppink;
                }

                td,
                th {
                    padding: 15px;
                }

                img {
                    border-radius: 20px;
                    border: double black 5px;
                    width: 40%;
                }

                h1,
                h3,
                p,
                th,
                td {
                    text-align: center;
                }

                table {
                    margin: auto;
                    background-color: rgba(255, 255, 255, 0.7);
                }

                img {
                    height: 150px;
                    width: 150px;
                    position: relative;
                    left: 20%;
                    top: 10%;
                }
            </style>
        </head>
        <body>
            <center><h1>TINI POO MOWAAA...</h1></center>
            <center><h3>Billing</h3></center>
            <table>
                <tr>
                    <th>item name</th>
                    <th>food item</th>
                    <th>price</th>
                    <th>total</th>
                </tr>
                <?php
                try {
                    $value = $_POST["item"];
                    $total = 0;

                    foreach ($value as $item) {
                        $con = new PDO("mysql:host=localhost;dbname=shareef", "root", ""); // Update with your database details

                        $stmt = $con->prepare("SELECT * FROM orders WHERE item_name=?");
                        $stmt->execute([$item]);
                        $result = $stmt->fetchAll();

                        foreach ($result as $row) {
                            ?>
                            <tr>
                                <td><?= $row['item_name'] ?></td>
                                <td><img src="<?= $row['image'] ?>" width="100" height="100"></td> <!-- Adjusted width for image -->
                                <td><p>INR <?= $row['amount'] ?></p></td> <!-- Added space after "INR" for better formatting -->
                                <td><?= $row['amount'] ?></td>
                                <?php
                                $total += (int)$row['amount'];
                                ?>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    <hr>
                    <tr>
                        <th>TOTAL AMOUNT TO BE PAID</th>
                        <td></td>
                        <td></td>
                        <th><?= $total ?></th>
                    </tr>
                    <?php
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
                ?>
            </table>
        </body>
        </html>
        <?php
    } else {
        // $_POST["item"] is not an array
        echo "Form submission does not contain an array for item";
    }
} else {
    echo "Invalid request!";
}
?>
