<html>

<head>
    <title>Cine-art | Change Password</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel=\"stylesheet\" href=\"1.css\" />
    <link rel=\"stylesheet\" href=\"0.css\" />
    <link rel=\"stylesheet\" href=\"style.css\" />"
    <?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    // echo $idh. 'is being used';
    
} else {
    echo 'Password can\'t be changed. Session expired.';
    header("Refresh:2; URL=login.php");
    die();
}
    
    function error(){
        // echo"<script type='text/javascript'> alert('Both passwords don\'t match!');window.location.replace('changePass.php');</script>";
        echo "    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel=\"stylesheet\" href=\"1.css\" />";
        echo "<script type='text/javascript'>
        setTimeout(function () {
            window.location.href = 'changePass.php'; //will redirect to your blog page (an ex: blog.html)
        }, 6500);
        </script>";
        echo "<body align=\"center\" style=\"background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(8.jpg) center center; background-size: cover;\">
<div class=\"centered\">
    <legend style=\"font-size: 3vmax; margin-top: -10.45vh;\">PASSWORD CHANGE UNSUCCESSFUL</legend>
    <div class=\"centered\" style=\"margin-top:10.45vh;\"><fieldset>
<label id=\"passprob\" style=\"font-size: 1.5vmax; color:silver;\">Your passwords don't match. Redirecting you in a few seconds<label>
</fieldset></div>
</div>
</body>";
        die();
    }

    function success(){
        session_unset();
        session_destroy();
        // echo"<script type='text/javascript'> alert('password changed successfully!!');window.location.replace('logout.php');</script>";
        echo "    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel=\"stylesheet\" href=\"1.css\" />";
        echo "<script type='text/javascript'>
        setTimeout(function () {
            window.location.href = 'login.php'; //will redirect to your blog page (an ex: blog.html)
        }, 6500);
        </script>";
        echo "<body align=\"center\" style=\"background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(8.jpg) center center; background-size: cover;\">
<div class=\"centered\">
    <legend style=\"font-size: 3vmax; margin-top: -12.45vh\">PASSWORD CHANGE <br> SUCCESSFUL</legend>
    <div class=\"centered\" style=\"margin-top:8.45vh;\"><fieldset>
<label id=\"passprob\" style=\"font-size: 1.5vmax; color: silver;\">Please relogin. <br> Redirecting you in a few seconds<label>
</fieldset></div>
</div>
</body>";
        die();
    }
   
    function error2(){
        echo "    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel=\"stylesheet\" href=\"1.css\" />";
        // echo"<script type='text/javascript'> alert('password change unsuccessful!!');window.location.replace('changePass.php');</script>";
        echo "<script type='text/javascript'>
        setTimeout(function () {
            window.location.href = 'changePass.php'; //will redirect to your blog page (an ex: blog.html)
        }, 6500);
        </script>";
        echo "<body align=\"center\" style=\"background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(8.jpg) center center; background-size: cover;\">
<div class=\"centered\">
    <legend style=\"font-size: 3vmax; margin-top: -10.45vh;\">PASSWORD CHANGE UNSUCCESSFUL</legend>
    <div class=\"centered\" style=\"margin-top:8.45vh;\"><fieldset>
<label id=\"passprob\" style=\"font-size: 1.5vmax; color: silver;\">Try again. Redirecting you in a few seconds<label>
</fieldset></div>
</div>
</body>";
        die();
    }
    ?>
</head>


<body>

    <?php
     include 'connection.php';
            $pas1=$_POST['pas1'];
            $pas2=$_POST['pas2'];
            if(strcmp($pas1,$pas2)==0)
            {
            $sql = "UPDATE `login` SET `password`='$pas2' where username='$idh'";
            $result = $conn->query($sql);
                if($result){success();}
                    else{error2();}
            }
            else{
                error();
            }
                $conn->close();

        ?>
</body>

</html>
