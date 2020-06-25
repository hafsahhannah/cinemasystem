<html>
<title>Cine-art | Login</title>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="0.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body align="center">
    <p id="logo">CINE-ART</p> 

    <div class="centered">
    <form name="myform" action="logger.php" method="post">
        <fieldset style="width: 25vw;">
            <legend>Login</legend>
            <input type="email" name="userid" value="" placeholder=" Enter email address" id="text1" required /><br><br>
            <input type="password" name="pass" value="" placeholder=" Enter password" id="text2" maxlength="8" minlength="6" required />
            <br><br>
            <input type="submit" value="Login" id="b1" name="login" style="font-size: 14">&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.html"><input type="button" value="Cancel" id="b2" name="cancel" style="font-size: 14"></a><br><br>
            <div class="lass" style="align:center; margin-left:0px;">
                <a href="signup.html" style="font-size: 14">New member? Sign up now.</a>
            </div>
            <br>
            <div class="lass" style="align:center; margin-left:0px;">
                <a href="fp.html" style="font-size: 14">Forgot password?</a>
            </div>

        </fieldset>
    </form>
    </div>

</body>

</html>
