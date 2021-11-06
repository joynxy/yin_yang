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
    <div class="content-middle">
        <?php
            $to = 'f32ee@localhost';
            $headers = 'From: f32ee@localhost' . "\r\n" .
            'Reply-To: f32ee@localhost' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            $subject = "Feedback";
            $ContactName = $_POST['ContactName'];
            $ContactEmail = $_POST['ContactEmail'];
            $ContactNumber = $_POST['ContactNumber'];
            $Feedback = $_POST['Feedback'];
            echo '<img src="assets/complete.png" style="height:150px; width:auto; padding-bottom:50px"><br>';
            echo "Dear customer, thank you for contacting us. <br><br> We have received your feedback and will be contacting you shortly.<b>";
            $sql = "INSERT INTO f32ee.yy_feedback (feedback_id, feedback_name, feedback_email, feedback_phone, feedback) VALUES (NULL, '$ContactName', '$ContactEmail', '$ContactNumber', '$Feedback')";
            if(!$result = mysqli_query($conn, $sql)){
                echo "Something went wrong when inserting data to database: " . mysqli_error($conn);
            }
            $CustEmail_message = "Dear " . $ContactName . ", thank you for your feedback.\nWe are sorry to hear that you did not have a great experience while dining with us.\n\nWe would like to learn more about your specific situation and make things right. If you would not mind giving us a call at 6123 4567 at your earliest convenience, it would be greatly appreciated.\n\nWe look forward to speaking with you and working towards earning back your business.";
            mail($to, $subject, $CustEmail_message, $headers, '-ff32ee@localhost');
        ?>
        <br>
        <br>
        <br>
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