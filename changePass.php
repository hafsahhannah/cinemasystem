<html>
<title>Cine-art | Change Password</title>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel="stylesheet" href="1.css" />
    <?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {
     echo"<script type='text/javascript'> alert('session expired...');window.location.replace('login.php');</script>";die();
}
?>
</head>

<body align="center" style="background-image:url(4.jpg)">
<div class="centered">
    <form name="fpform" action="fp4.php" method="post">
        <fieldset style="width: 35vw;">
            <legend style="font-size:4vmax;">Change Password</legend>
            <input type="password" name="pas1" value="" placeholder="Enter new password" id="text2" required maxlength=8 minlength=4 /><br><br>
            <input type="password" name="pas2" value="" placeholder="Confirm new password" id="text2" required maxlength=8 minlength=4 /><br><br>
            <input type="submit" value="Submit" id="b1" name="login" style="font-size: 14">&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.html"><input type="button" value="Cancel" id="b2" name="cancel" style="font-size: 14"></a><br><br>
<!--        This cancel button will disrupt the session sequence though. Make an isset for it to cancel session later.-->
        </fieldset>
    </form>
</div>
</body>

</html>
