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
        <img src="assets/drinksbg.jpeg" id="header-image">
    </div>
    <div class="home-middle">
        <p class="header-1">Drinks</p>
        <figure class="menu">
            <!-- Some images are taken from: https://www.sunwithmoon.com.sg/wp-content/uploads/2021/04/2021-SWM-Drinks-Menu-PDF.pdf -->
            <img src="assets/drinks_1.png" />
            <figcaption id="order-name">$7.00<br><br>Citrus Lime Cocktail</figcaption>
            <figcaption id="order-info">A refreshing cocktail mix of lemon, lime and orange.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="citrus" class="button-cart"></label>
            </form>
        </figure>
        <figure class=" menu">
            <img src="assets/drinks_2.png" style="height:250px; width: auto" ; />
            <figcaption id="order-name">$7.00<br><br>Yuzu Fizz</figcaption>
            <figcaption id="order-info">Sparkling, zesty blend of honey Yuzu with lemon juice and soda.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="yuzu" class="button-cart"></label>
            </form>
        </figure>
        <figure class="menu">
            <img src="assets/drinks_3.png" style="height: 250px; width: auto" />
            <figcaption id="order-name">$6.00<br><br>Grapefruit Plum Soda</figcaption>
            <figcaption id="order-info">Boost immunity with this anti-oxidising grapefruit and Tsuyu Akane
                plum soda.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="plum" class="button-cart"></label>
            </form>
        </figure><br>
        <figure class="menu">
            <img src="assets/drinks_4.png" />
            <figcaption id="order-name">$25.00<br><br>Sake</figcaption>
            <figcaption id="order-info">A smooth yet crisp Sake that creates an exceptional balance on the palate.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="sake" class="button-cart"></label>
            </form>
        </figure>
        <figure class="menu">
            <img src="assets/drinks_5.png" style="padding-top: 51px;" />
            <figcaption id="order-name">$5.00<br><br>Matcha</figcaption>
            <figcaption id="order-info">Our house blend recipe of thick, silky matcha that is freshly-whisked.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="matcha" class="button-cart"></label>
            </form>
        </figure>
        <figure class="menu">
            <img src="assets/drink_6.png" />
            <figcaption id="order-name">$5.00<br><br>Houjicha</figcaption>
            <figcaption id="order-info">Roasted high-quality green tea that is soothing and calming.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="houjicha" class="button-cart"></label>
            </form>
        </figure><br>
    </div>
</body>

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

</html>