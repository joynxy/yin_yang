<?php
include "php/setup_session.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Yin Yang Ramen House</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    
    <script type="text/javascript" src="javascript/career_validator.js"></script>
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
        <img src="assets/careerbg1.png" id="header-image">
        <p class="header-1">Careers</p>
        <p>Join the Yin Yang Family now! Fill up the form to get started.</p>
        <form action="career_application.php" method="post">
            <table class="careers-contact-table" border="0">
                <tr>
                    <td>&#42;Name:</td>
                    <td><input type="text" name="CustName" id="CustName" size=30 required
                            placeholder="Enter your name here"></td>
                </tr>
                <tr>
                    <td>&#42;Email:</td>
                    <td><input type="email" name="CustEmail" id="CustEmail" required
                            placeholder="Enter your Email-ID here"></td>
                </tr>
                <tr>
                    <td><label for="startDate">Start Date:</label></td>
			        <td><input type="date" id="startDate" name="startDate" date-date-format="dd-mm-yyyy"></td>
                </tr>
                <tr>
                    <td>&#42;Experience:</td>
			    <td><textarea type="textarea" name="experience" id="experience" rows="4" cols="40"  required placeholder="Enter your past experience here"></textarea></td>
                </tr>
            </table>
            <input type="submit" value="Apply Now" class="button-cart" style="margin-left:auto; margin-right:40px; margin-top:20px">
            <input type="reset" value="Clear" class="button-clear" style="margin-top:20px">
        </form>
    </div>
    <script type="text/javascript" src="javascript/career_validator2.js"></script>

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