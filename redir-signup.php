<html>
<title>Cine-art | Sign Up</title>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap');
    </style>
    <link rel="stylesheet" href="1.css" />

</head>

<body align="center">
<div class="centered">
    <form name="myform" action="/mtbs/registrar.php" onsubmit="return validateForm();" method="post">
        <fieldset style="width: 25vw;">
            <legend style="font-size: 4vmax;">Sign Up</legend>
            <label id="passprob" style="color: silver;">The email or mobile number has already been used!<label><br><br>
                    <input type="text" name="name" value="" placeholder=" Enter name" id="text1" required><br><br>
            <input type="email" name="userid" value="" placeholder=" Enter email address" id="text2" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <br><br>
            <input type="tel" name="phone" value="" placeholder=" Enter mobile number (10-11 digit)" id="text2" required pattern="01[0-9]{8,9}" maxlength="11">
            <!--<span class="note">format: x x x x x x x x x x(only digits)</span>-->
            <br><br>
            <input type="password" name="pass" value="" placeholder=" Enter a 6 to 8-character password" id="text2" maxlength="8" minlength="6" required>
            <br><br>
            <select name="secques" id="ddmenu" style="width:235px; min-height:28px; font-family:DM Sans; font-size:14;" required>

                <option value="" disabled selected hidden>Choose Security Question:&nbsp;&nbsp;&nbsp;&nbsp;</option>

                <option>What is the maiden name of your mother?</option>

                <option>What is your nickname?</option>

                <option>Where is your favorite place to vacation?</option>

                <option>What city were you born in?</option>
                <option>Where did you go to high school/college?</option>
                <option>What is your favorite food?</option>

            </select><br><br>
            <input type="text" name="answer" value="" placeholder=" Enter answer" id="text2" maxlength="30" required>
            <br><br>


                    <input type="submit" value="Submit" id="b1" style="font-size: 14">&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.html"><input type="button" value="Cancel" id="b2" name="cancel" style="font-size: 14"></a><br><br>

        </fieldset>
    </form>
</div>

</body>

</html>
