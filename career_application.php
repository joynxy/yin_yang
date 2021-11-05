<?php
include "php/setup_session.php";
include "db_connect.php";
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
    <?php
            $to = 'f32ee@localhost';
            $headers = 'From: f32ee@localhost' . "\r\n" .
            'Reply-To: f32ee@localhost' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            $CustName = $_POST['CustName'];
            $CustEmail = $_POST['CustEmail'];
            $startDate = $_POST['startDate'];
            $experience = "N/A";
            if(strlen(trim($_POST['experience'])) > 0){
                $experience = $_POST['experience'];
            }
            $subject = "Job application";
            $message = "Dear " . $CustName . ", thank you for your application! <br> Please confirm your details: <br><br>" ;
            $CustEmail_message = "Dear " . $CustName . ", thank you for your application!\nPlease confirm your details:\n\n";
            $message .= "<br>Name: " . $CustName . "<br>";
            $CustEmail_message .= "\nName: " . $CustName. "\n";
            $message .= "<br>Start Date: " . $startDate . "<br>";
            $CustEmail_message .= "\nStart Date: " . $startDate. "\n";
            if(strlen($experience) > 0){
                $message .= "Experience: " . $experience . "<br>";
                $CustEmail_message .= "Experience: " . $experience . "\n";
            }
            do{
                $rand = rand();
            } while($rand === 0);
            $message .= "<br>You application id is: " . $rand . "<br>Kindly save your ID for the interview.<br>";
            $CustEmail_message .= "\nYou application id is: " . $rand . "\nKindly save your ID for the interview.\n";
            $sql = "INSERT INTO f32ee.yy_applicants (applicant_id, applicant_name, applicant_email, applicant_date, applicant_experience) VALUES ($rand, '$CustName','$CustEmail', '$startDate','$experience')";
            if(!$result = mysqli_query($conn, $sql)){
                echo "Something went wrong when inserting data to database: " . mysqli_error($conn);
            }
            $message .= "<br>Confirmation mail sent to " . $CustEmail;
            echo '<span style="display:block;margin-top:30px;text-align:center;">' . $message . '</span>';
            mail($to, $subject, $CustEmail_message, $headers, '-ff32ee@localhost');
        ?>
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