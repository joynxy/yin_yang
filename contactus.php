<?php
include "php/setup_session.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Yin Yang Ramen House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    
    <script type="text/javascript" src="javascript/contact_validator.js"></script>
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7136383779975!2d103.68094601475408!3d1.348309899016626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0f0a99014463%3A0xb8bb0800c52d8219!2sNanyang%20Technological%20University!5e0!3m2!1sen!2ssg!4v1633233008589!5m2!1sen!2ssg"
            width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <p class="header-1">Contact us</p>
        <p>Don't hesitate to contact us! We will get back to you within 24 hours.</p>
    <form action="feedback_form.php" method="post">
        <table class="careers-contact-table" border="0">
            <tr>
                <td>&#42;Name:</td>
                <td><input type="text" name="ContactName" id="ContactName" size=30 required
                        placeholder="Enter your name here"></td>
            </tr>
            <tr>
                <td>&#42;Email:</td>
                <td><input type="email" name="ContactEmail" id="ContactEmail" required
                        placeholder="Enter your Email-ID here"></td>
            </tr>
            <tr>
                <td>&#42;Phone No.:</td>
                <td><input type="tel" name="ContactNumber" id="ContactNumber" required
                        placeholder="12345678"></td>
            </tr>
            <tr>
                <td>&#42;Feedback:</td>
            <td><textarea type="textarea" name="Feedback" id="Feedback" rows="4" cols="40"  required placeholder="Enter feedback here"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Contact Us" class="button-cart" style="margin-left:auto; margin-right:40px; margin-top:20px">
        <input type="reset" value="Clear" class="button-clear" style="margin-top:20px">
    </form>
    </div>
    <script type="text/javascript" src="javascript/contact_validator2.js"></script>

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
            <img src="assets/facebook.png" class="footer-right-icons">
            <img src="assets/instagram.png" class="footer-right-icons">
            <img src="assets/twitter.png" class="footer-right-icons">
        </div>
    </footer>
    <div id="copyright">
        Copyright &copy; 2021 Yin Yang Pte. Ltd. All Rights Reserved.
    </div>
</body>

</html>