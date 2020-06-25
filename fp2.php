<html>
<title>Cine-art | User Verification</title>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="0.css" />
    <link rel="stylesheet" href="style.css" />
    <?php
    function error(){
        echo"<script type='text/javascript'> alert('user with the entered e-mail address does not exist.');window.location.replace('fp.html');</script>";
    }
    ?>

</head>

<body align="center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(8.jpg) center center; background-size: cover;">
<div class="centered">
    <form name="fpform" action="/mtbs/fp3.php" method="post">
        <fieldset style="width: 35vw;">

            <legend style="font-size: 4vmax;">Security Question</legend>

            <label style="font-family: DM Sans; color: silver;">
                <?php
                include 'connection.php';

// Retrieve email address from fp.html
$id=$_POST['idx'];
#$id_retry = $_SESSION['user_id'];

// if(isset($_POST['idx']))
// {
//     $id = $_POST['idx'];
//     $sql = "SELECT secques FROM login WHERE username='$id'";
// }
// else
// {
//     $id_retry = $_SESSION['user_id'];
//     $sql = "SELECT secques FROM login WHERE username='$id_retry'";
// }
$sql = "SELECT secques FROM login WHERE username='$id'";
$result = $conn->query($sql) or die ("Error in query: " . mysqli_error());

// If email is not in database
if ($result->num_rows == 0 ) {
    // Pick a random secques from the database
    $sql = "SELECT secques FROM login ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)){
        echo $row["secques"];
    }
}

// If email is in the database
else {
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['user_id'] = $id;
        echo $row["secques"];
    }
}            ?>
            </label><br><br>


            <input type="text" name="answer" value="" placeholder=" Enter answer" id="text2" required pattern="[a-zA-Z]*" /><br><br>
            <input type="submit" id="b1" name="Submit" style="border-radius: 13px; font-size: 14px">&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="fp.html"><input type="button" value="Cancel" id="b2" name="cancel" style="font-size: 14"></a><br><br>

        </fieldset>
    </form>
</div>
</body>

</html>
