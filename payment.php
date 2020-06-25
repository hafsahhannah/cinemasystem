<html>
<title>Online Credit Card Payment</title>
<?php
    session_start();
    
$_SESSION['amount']=$_GET['amount'];
$_SESSION['numseats']=$_GET['numseats'];
$_SESSION['dob']=$_GET['dob'];
if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
    
    function getName(){
        $id=$_SESSION['user_id'];
        include 'connection.php';
    
        $sql = "SELECT name FROM login WHERE      username='".$id."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) { 
            echo $id;
            }
        else{
            while($row = $result->fetch_assoc()) {
               $name=$row["name"];
                             }
            $_SESSION['idname']=$name;
                             echo $name;
            }
    
    }
    ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        var queries = queryString.split("=");
        queryString = queries[1];
    </script>

    <base target="_self" />
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="3.css" />
    <link rel="stylesheet" href="5.css" />
    <link rel="stylesheet" href="4 booking.css" />
    <link rel="stylesheet" href="7.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body style="background-image:url(15.jpg)";></body>
<body align="center">
    <div class="centered">
    <form name="myform" action="bank.php" method="post">
        <fieldset id="fset">
        <fieldset style="width: 28vw;">
            <legend id="legd">Payment</legend>

            <font class="labels">Type of Card</font>
            <select name="cardtype" id="labels" style="width:28vw; min-height:28px; font-family:DM Sans; font-size:14;" required>

                <option value="" disabled selected hidden>Choose Type of Card:&nbsp;&nbsp;&nbsp;&nbsp;</option>

                <option>VISA</option>
                <option>MasterCard</option>
                <option>American Express</option>
                <option>UnionPay</option>
            </select><br><br>

            <font class="labels">Bank</font>
            <select name="bank" id="labels" style="width:28vw; min-height:28px; font-family:DM Sans; font-size:14;" required>

                <option value="" disabled selected hidden>Choose Bank:&nbsp;&nbsp;&nbsp;&nbsp;</option>

                <option>Maybank</option>
                <option>CIMB Bank</option>
                <option>Public Bank Berhad</option>
                <option>RHB Bank</option>
                <option>Hong Leong Bank</option>
                <option>AmBank</option>
                <option>UOB Malaysia Bank</option>
                <option>Bank Rakyat</option>
                <option>OCBC Bank Malaysia</option>
                <option>HSBC Bank Malaysia</option>
                <option>Affin Bank</option>
                <option>Bank Islam Malaysia</option>
                <option>Standard Chartered Bank Malaysia</option>
                <option>CitiBank Malaysia</option>
                <option>Bank Simpanan Nasional (BSN)</option>
                <option>Bank Muamalat Malaysia Berhad</option>
                <option>Alliance Bank</option>
                <option>Agrobank</option>
            </select><br><br>

            <font class="labels">Name On Card</font>
            <input type="text" name="nameOnCard" value="" placeholder="Eg. Hannah binti Harun" id="text3" required pattern="[a-zA-Z0-9\s]+"><br><br>
            <font class="labels">Card Number</font>
            <input type="text" name="cardNumber" value="" maxlength="16" placeholder="1234 1234 1234 1234" id="text3" required pattern="[1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
            <br><br>
            <font class="labels">Expiration Date</font>
            <input type="month" name="expDate" id="text3" min="2020-06" value="2020-06" required>
            <br><br>
            <font class="labels">CVV</font><br>
            <input type="password" name="pass" value="" maxlength="3" minlength=3 placeholder="***" id="text3" required>

            <input style="width: 5.2em" align="center" type="submit" value="Pay" id="b1">
            <br><br>
        </fieldset>
    </form>
    </div>

</body>

</html>