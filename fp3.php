<html>

<head>
    <title>Cine-art | Verifying Answer</title>
    <?php
session_start();

if (isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    // echo $idh.' is logged in';
}
//else {
//    error();
//    header("Location:login.php");
//}
    function error(){
        // echo"<script type='text/javascript'> alert('Wrong Answer!!');window.location.replace('login.php');</script>";
        echo "<script type='text/javascript'>
        setTimeout(function () {
            window.location.href = 'login.php'; //will redirect to your blog page (an ex: blog.html)
        }, 5000);
        </script>";

        echo "    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel=\"stylesheet\" href=\"1.css\" />";

        echo "<body align=\"center\" style=\"background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(8.jpg) center center; background-size: cover;\">
<div class=\"centered\">
    <legend style=\"font-size: 4vmax;\">WRONG ANSWER</legend>
    <div class=\"centered\" style=\"margin-top:8.45vh;\"><fieldset>
<label id=\"passprob\">Redirecting you in a few seconds<label>
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
     
            $answer=$_POST['answer'];
            $sql = "SELECT answer FROM login where username='$idh'";
            $result = $conn->query($sql);
            
             while($row = $result->fetch_assoc()) {
               $ans=$row["answer"];
            
             }

             // If both email and answer is correct
            if(strcmp($answer,$ans)==0)
            {
                 echo "<script type='text/javascript'>  window.location.replace('changePass.php');</script>";
            }
            else{
                session_unset();
                session_destroy();
                error();

            }
                $conn->close();

        ?>
</body>

</html>
