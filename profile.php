<html>
<title>Cine-art | Edit Profile</title>
<?php
    session_start();
    
    if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
    function getName(){
        $id=$_SESSION['user_id'];
        include 'connection.php';
    
        $sql = "SELECT name FROM login WHERE username='".$id."'";
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
    <base target="_self" />
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="3.css" />
    <link rel="stylesheet" href="7.css" />
    <style>
        ::placeholder {
            color: grey;
        }
    </style>
</head>

<body style="background: linear-gradient(rgba(0,0,0,0.8),
rgba(0,0,0,0.5)), url(10.jpg) center center; background-size: cover; background-attachment: fixed">

    <div class="topnav" style="margin-bottom: 10px;">

        <a class="active" href="home.php">Home</a>
        <div class="dropdown">
            <a class="dropbtn" href="">
                <?php getName(); ?>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="fp22.php?idx=<?php echo $idh; ?>">Change Password</a>
                <a href="profile.php">Edit Profile</a>
            </div>
        </div>
        <a href="bookings.php">Bookings</a>
        <div><a href="logout.php">Logout</a></div>

    </div>

    <div class="logo-container" style="background-color:rgba(170,0,0,0.4);
    text-align:center;
    width:100%;
    height: 37.5vh;">
        <div class="logo">
            <div class="text">
                Profile Update
            </div>
        </div>
    </div>

    <div class="centered">
    <form action="updater.php" onsubmit="return validateForm();" method="post" align="center">
        <fieldset style="width: 25vw; margin-top: 50vh;">
        <input type="text" name="name" value="" placeholder="New username, e.g: Hannah Harun" minlength="3" maxlength="20" class="inp" pattern="[a-zA-Z0-9\s]+"><br><br>
        <input type="tel" class="inp" name="phone" value="" placeholder="Enter mobile number (10-11 digits)" maxlength="11" pattern="01[0-9]{8,9}">
        <!--<span class="note"> format: x x x x x x x x x x(only digits)</span>-->
        <br><br>
        <select name="secques" id="ddmenu" class="dmenu" style="width:235px; min-height:28px; font-family:DM Sans; font-size:14px;">

            <option value="empty" selected hidden>Change Security Question:&nbsp;&nbsp;&nbsp;&nbsp;</option>
            <option>What is your mother's maiden name?</option>
            <option>What is your nick name?</option>
            <option>Where is your favorite place to vacation?</option>
            <option>Which city were you born in?</option>
            <option>Where did you go to high school/college?</option>
            <option>What is your favorite food?</option>

        </select><br><br>
        <input type="text" name="answer" value="" class="inp" placeholder="Enter answer" maxlength="30">
        <br><br>

        <input type="submit" class="inpbtn" value="Update" style="font-family: DM Sans; font-size: 14px;">
        <br><br>

        </fieldset>
    </form>
    </div>
</body>

</html>
