<?php
include "php/setup_session.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Yin Yang Ramen House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    
</head>

<body>
    <div class="topnav">
        <div class="topnav-left">
            <a href="index.php"><img src="assets/logo.png"></a>
        </div>
        <div class="topnav-right">
            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="ordernow.php">Order now</a>
            <a href="careers.php">Careers</a>
            <a href="contactus.php">Contact us</a>
            <a href="shoppingcart.php">
                <span id="shopping_cart">
                    <img src="assets/cart.png" width="50%" height="auto">
                    <?php
                    $total = 0;
                    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                        if ($_SESSION['cart'][$i] > 0) {
                            $total += $_SESSION['cart'][$i];
                        }
                    }
                    echo $total;
                    ?>
                </span>
            </a>
        </div>
    </div>
    <div>
        <img src="assets/complete.png" style="height:150px; width:auto; clear: both; display: block; margin-left: auto; margin-right: auto;">
    </div>
    <div class="content-middle">
        <?php
            include "db_connect.php";
            $to = 'f32ee@localhost';
            $place_order_Name = $_POST['place_order_Name'];
            $place_order_Email = $_POST['place_order_Email'];
            $place_order_Address = $_POST['place_order_Address'];
            $place_order_Card = $_POST['place_order_Card'];
            $subject = "Order Confirmation";
            $headers = 'From: f32ee@localhost' . "\r\n" .
            'Reply-To: f32ee@localhost' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
           
            do {
                $rand = rand();
            } while($rand === 0);
            $message = "Dear Customer, thank you for your order! <br><br> Your receipt number is $rand.<br>
             Kindly show this to the delivery personnel to collect your food. <br><br>You ordered: <br><br>" ;
            $email_message = "Dear Customer, thank you for your order! Your receipt number is $rand.\nKindly show this to the delivery personnel to collect your food.\n\nYou ordered:\n\n" ;
            $total = 0;
            $sql = "SELECT product_name, product_price FROM f32ee.yy_products";
            if(!$result = mysqli_query($conn, $sql)){
                echo "Something went wrong when fetching data from database: " . mysqli_error($conn);
            }
            $sql = "INSERT INTO f32ee.yy_orders (order_id, order_date) VALUES ($rand, CURDATE())";
            if(!$hejsan = mysqli_query($conn, $sql)){
                echo "Something went wrong when inserting data into order table: " . mysqli_error($conn);
            }
            for($i = 0; $i < count($_SESSION['cart']); $i++){
                 $row = mysqli_fetch_assoc($result);
                 if($_SESSION['cart'][$i] > 0){
                    $quantity = $_SESSION['cart'][$i];
                    $message .= $_SESSION['cart'][$i] . "x " . $row['product_name'] . " for $" . ($_SESSION['cart'][$i] * $row['product_price']) . "<br>";
                    $email_message .= $_SESSION['cart'][$i] . "x " . $row['product_name'] . " for $" . ($_SESSION['cart'][$i] * $row['product_price']) . "\n";
                    $sql = "INSERT INTO f32ee.yy_sales (receipt_no, product_id, quantity) VALUES ($rand, ($i + 1), $quantity)";
                    if(!$hejsan = mysqli_query($conn, $sql)){
                        echo "Something went wrong when inserting data into database: " . mysqli_error($conn);
                    }
                    $_SESSION['cart'][$i] = 0; // To clear the cart to continue shopping
                 }
             }
            $message .= "<br>The items will be delivered to:<br>" . $place_order_Address . "<br>";
            $email_message .= "\nThe items will be delivered to:\n" . $place_order_Address . "\n";
            $message .= "<br>Credit Card Number used: **** **** **** " . substr($place_order_Card, 12, 16) . "<br>";
            $email_message .= "\nCredit Card Number used: **** **** **** " . substr($place_order_Card, 12, 16) . "\n";
            $message .= "<br>Confirmation mail sent to " . $place_order_Email . "<br>";
            echo '<span style="display:block;margin-top:30px;text-align:center;">' . $message . '</span>';
            mail($to, $subject,$email_message, $headers, '-ff32ee@localhost');
        ?>
    </div>
    <script type="text/javascript" src="scripts/javascript/career_contact_validator2.js"></script>

    <footer id="footer">
        <div class="footer-left">
            <table>
                <tr>
                    <td>
                        <img class="footer-icon" src="assets/location.png" style="width:70%">
                    </td>
                    <td class="footer-icontext">
                        123 Orchard Avenue #09-88<br>
                        Singapore 567890
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="footer-icon" src="assets/email.png">
                    </td>
                    <td class="footer-icontext">
                        yinyang@gmail.com
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="footer-icon" src="assets/phone.png" style="width:26px">
                    </td>
                    <td class="footer-icontext">
                        6123 4567
                    </td>
                </tr>
            </table>
        </div>
        <div class="footer-right">
            Follow us:<br>
            <a href="https://www.facebook.com/"><img src="assets/facebook.png" class="footer-right-icons"></a>
            <a href="https://www.instagram.com/"><img src="assets/instagram.png" class="footer-right-icons"></a>
            <a href="https://twitter.com/?lang=en"><img src="assets/twitter.png" class="footer-right-icons"></a>
        </div>
    </footer>
    <div id="copyright">
        Copyright &copy; 2021 Yin Yang Pte. Ltd. All Rights Reserved.
    </div>
</body>

</html>