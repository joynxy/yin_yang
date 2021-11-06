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
        <img src="assets/ramenbg.jpeg" id="header-image">
    </div>
    <div class="home-middle">
        <!-- All 6 ramen images taken from: https://takagiramen.com/menu/ -->
        <p class="header-1">Ramen</p>
        <figure class="menu">
            <img src="assets/ramen_1.png" />
            <figcaption id="order-name">$18.00<br><br>Yin Yang Specialty Ramen</figcaption>
            <figcaption id="order-info">Tender chashu pork slices is paired with fresh handcrafted ramen in our
                signature Tonkotsu broth that has been boiled for 12 hours.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="specialty" class="button-cart"></label>
            </form>
        </figure>

        <figure class=" menu">
            <img src="assets/ramen_2.png" />
            <figcaption id="order-name">$16.00<br><br>Miso Ramen</figcaption>
            <figcaption id="order-info">Imported directly from Japan, the miso creates a rich and flavourful broth that
                complements the sweet corn topping.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="miso" class="button-cart"></label>
            </form>
        </figure>

        <figure class="menu">
            <img src="assets/ramen_3.png" />
            <figcaption id="order-name">$17.00<br><br>Karaka Ramen</figcaption>
            <figcaption id="order-info">A unique concoction of chillies is infused into the thick Tonkotsu soup, giving
                a spicy kick to this incredible bowl of ramen.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="karaka" class="button-cart"></label>
            </form>
        </figure><br>

        <figure class="menu">
            <img src="assets/ramen_4.png" />
            <figcaption id="order-name">$17.00<br><br>Black Tonkotsu Ramen</figcaption>
            <figcaption id="order-info">The essence of Japanese black garlic is steeped into the broth,
                creating an intense flavour to pair with crunchy black fungus.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="tonkotsu" class="button-cart"></label>
            </form>
        </figure>

        <figure class="menu">
            <img src="assets/ramen_5.png" />
            <figcaption id="order-name">$17.00<br><br>Mazesoba Ramen</figcaption>
            <figcaption id="order-info">Garnished with a lavish portion of sautéed pork, sweet corn and green scallions,
                savour the springy texture of our handmade ramen.</figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="mazesoba" class="button-cart"></label>
            </form>
        </figure>

        <figure class="menu">
            <img src="assets/ramen_6.png" />
            <figcaption id="order-name">$17.00<br><br>Tantanmen Ramen</figcaption>
            <figcaption id="order-info">Fermented beans and sesame gives this ramen a fragrant aroma and exquisite
                taste, topped off with slices of braised meat. </figcaption>
            <form method="get" action="php/add_to_cart.php">
                <label><input type=submit value="Add to cart" name="tantanmen" class="button-cart"></label>
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
        <a href="https://www.facebook.com/"><img src="assets/facebook.png" class="footer-right-icons"></a>
        <a href="https://www.instagram.com/"><img src="assets/instagram.png" class="footer-right-icons"></a>
        <a href="https://twitter.com/?lang=en"><img src="assets/twitter.png" class="footer-right-icons"></a>
    </div>
</footer>
<div id="copyright">
    Copyright &copy; 2021 Yin Yang Pte. Ltd. All Rights Reserved.
</div>

</html>