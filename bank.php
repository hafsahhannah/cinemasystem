<html>
<title>Transaction Receipt</title>

<head>
    <?php
    session_start();
if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
    $crdnum=$_POST['cardNumber'];
    $bankname=$_POST['bank'];
    ?>
    <link rel="stylesheet" href="5.css" />

</head>

<body>
    <table id="bank_transac">
        <tr>
            <td id="bankname"><?php echo $bankname ?></td>
        </tr>
        <tr>
            <td>
                <div>
                    <pre id="transac_details">
                    Merchant                           : Malaysian Cinema Chain<br>
                    Transaction amount           : RM <?php echo $_SESSION['amount']; ?><br>
                    Credit Card                        : <?php echo $crdnum ?></pre>

                </div>
        <tr>
        <tr>
            <td>
                <font color="dodgerblue" face="calibri"><b>Authenticate Payment</b></font>
                <br>
                <font size="2.5">OTP sent to your mobile number ending
                    <?php ?>
                </font><br><br>
                <font size="2">Enter One Time Password (OTP)</font>
                <div id="otp">
                    <input type="text" minlength=6 maxlength="6" placeholder="123456">
                    <a href="saveBooking.php"><button> Make Payment</button></a> </div>
                <br><a href="#">
                    <font size="2">
                        <label style="margin-left:260px;">Resend OTP</label>
                    </font>
                </a><br>
                <font size="2"><a href="payment.php?amount=<?php echo $_SESSION['amount'];?>&numseats=<?php echo $_SESSION['numseats'];?>&dob=<?php echo $_SESSION['dob'];?>">Go Back </a>to merchant</font>

            </td>
        </tr>
        </tr>
        </td>
        </tr>
    </table>
</body>

</html>
