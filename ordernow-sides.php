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
        <img src="assets/sidesbg.jpeg" id="header-image">
    </div>
    <div class="home-middle">
        <p class="header-1">Sides</p>
        <figure class="menu">
            <!-- Some images are taken from: https://takagiramen.com/menu/ -->
            <img src="assets/sides_1.png" />
            <figcaption id="order-name">$2.00<br><br>Edamame</figcaption>
            <figcaption id="order-info">Freshly boiled soybeans served with a sprinkle of sea salt and furikake.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="edamame" class="button-cart"></label>
            </form>
        </figure>
        <figure class=" menu">
            <!-- This image is taken from: https://sushitei.com/menu/Sushi%20Tei%20Grand%20Menu.pdf -->
            <img src="assets/sides_2.png" />
            <figcaption id="order-name" style="padding-top: 10px;">$8.00<br><br>Sashimi</figcaption>
            <figcaption id="order-info">Our chef's delectable omakase sashimi platter, air-flown directly from Japan.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="sashimi" class="button-cart"></label>
            </form>
        </figure>
        <figure class="menu">
            <img src="assets/sides_3.png" />
            <figcaption id="order-name">$5.00<br><br>Chawanmushi</figcaption>
            <figcaption id="order-info">Steamed egg custard with shimeji mushroom, gingko nut, chicken and ham.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="chawanmushi" class="button-cart"></label>
            </form>
        </figure><br>
        <figure class="menu">
            <img src="assets/sides_4.png" />
            <figcaption id="order-name">$4.00<br><br>Takoyaki</figcaption>
            <figcaption id="order-info">Japanese octopus balls drizzled with Kewpie mayonnaise and nori flakes.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="takoyaki" class="button-cart"></label>
            </form>
        </figure>
        <figure class="menu">
            <img src="assets/sides_5.png" />
            <figcaption id="order-name">$13.00<br><br>Sushi</figcaption>
            <figcaption id="order-info">Premium selection of top-grade, carefully crafted assorted sushi.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="sushi" class="button-cart"></label>
            </form>
        </figure>
        <figure class="menu">
            <img src="assets/sides_6.png" />
            <figcaption id="order-name">$9.00<br>Gyoza<br></figcaption>
            <figcaption id="order-info">Pan-fried Japanese chicken dumplings served with crunchy slices of shredded
                cabbage.
            </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="gyoza" class="button-cart"></label>
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