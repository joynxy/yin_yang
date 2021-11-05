<?php
include "php/setup_session.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Yin Yang Ramen House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="javascript/payment_validator.js"></script>
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
    <div class="content-middle">
        <p>Please fill in the fields below. All fields with an asterisk* are required.<br>
            A confirmation e-mail will be sent once we receive the order!</p>
        <form method="post" action="confirm_order.php" onsubmit="return validateForm('order');">
            <table class="careers-contact-table" border="0">
                <tr>
                    <td>&#42;Name:</td>
                    <td><input type="text" name="place_order_Name" id="place_order_Name" size=30 required placeholder="Enter your name here"></td>
                </tr>
                <tr>
                    <td>&#42;Email:</td>
                    <td><input type="email" name="place_order_Email" id="place_order_Email" required placeholder="Enter your Email-ID here"></td>
                </tr>
                <tr>
                    <td>&#42;Address:</td>
                    <td><input type="text" id="place_order_Address" name="place_order_Address" required placeholder ="999 Lane 999"></td>
                </tr>
                <tr>
                    <td>&#42;Credit Card Number:</td>
                    <td><input type="text" name="place_order_Card" id="place_order_Card" required placeholder="Enter 16 digit card number"></td>
                </tr>
                <tr>
                    <td>&#42;CVC Number:</td>
                    <td><input type="text" name="place_order_CVC" id="place_order_CVC" required placeholder="Enter 3 digit CVC number"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Confirm order"></td>
                </tr>
            </table>
        </form>
    </div>
    <script type="text/javascript" src="javascript/payment_validator2.js"></script>
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