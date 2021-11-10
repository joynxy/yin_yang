<?php
include "php/db_connect.php";
include "php/setup_session.php";
if (isset($_GET['empty'])) {
    unset($_SESSION['cart']);
    header('location: ' . $_SERVER['PHP_SELF']);
    exit();
}
if (isset($_GET['plus'])) {
    $_SESSION['cart'][$_GET['plus']]++;
}
if (isset($_GET['minus'])) {
    $_SESSION['cart'][$_GET['minus']]--;
}
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
    <div class="content-middle">
        <img src="assets/shoppingcartbg.png" id="bg-image" style="height:200px; width:auto;">
        <p class="header-1">Confirm Your Order</p>
        <?php
        $total = 0;
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            $total += $_SESSION['cart'][$i];
        }
        if ($total > 0) {
            echo 'Your shopping cart contains ' . $total . " item.";
        } else {
            echo 'Your shopping cart is empty.<br><br><br>';
            displayFooter();
            return;
        }
        ?>
        <br>
        <br>
        <div>
            <table class="cart_table_centre" border="1">
                <thead>
                    <tr>
                        <th class="cart_table_padding">Item</th>
                        <th class="cart_table_padding">Quantity</th>
                        <th>Unit Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    $sql = "SELECT product_name, product_price FROM f32ee.yy_products";
                    if (!$result = mysqli_query($conn, $sql)) {
                        echo "Something went wrong when fetching data from database: " . mysqli_error($conn);
                    }
                    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                        $row = mysqli_fetch_assoc($result);
                        if ($_SESSION['cart'][$i] > 0) {
                            echo "<tr>";
                            echo "<td class='cart_table_padding'>" . $row['product_name'] . "</td>";
                            echo '<td><a href="' . "?minus=" . $i . '"><img src="assets/deduct.png" class="cc_minus" style="height:18px; width:18px; padding-right:5px;"></a>';
                            echo $_SESSION["cart"][$i];
                            echo '<a href="' . "?plus=" . $i . '"><img src="assets/add.png" class="cc_plus" style="height:18px; width:18px; padding-left:5px;"></a>';
                            echo "<td>$" . $row['product_price'] . "</td>";
                            echo "</tr>";
                            $total = $total + (float)$row['product_price'] * (int)$_SESSION['cart'][$i];
                        }
                    }
                    echo "<tr>";
                    echo "<td colspan=2 align='centre' style='padding:15px; font-size:20px; font-weight:bold;'>Total price </td>";
                    echo "<td align='center' style='font-size:20px;font-weight:bold;'>$" . number_format($total, 2) . "</td>";
                    echo "</tr>";
                    ?>
                </tbody>
            </table>
            <br>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p>
        </div>

        <a href="payment_form.php" type="button" class="button" value="Proceed to checkout">Proceed to checkout</a>
    </div>

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

<?php
function displayFooter(){
echo '<footer id="footer">
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
    <img src="assets/facebook.png" class="footer-right-icons"></a>
    <img src="assets/instagram.png" class="footer-right-icons"></a>
    <img src="assets/twitter.png" class="footer-right-icons"></a>
</div>
</footer>
<div id="copyright">
Copyright &copy; 2021 Yin Yang Pte. Ltd. All Rights Reserved.
</div>';
}
?>