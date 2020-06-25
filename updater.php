<html>
<title>Cine-art | Updating..</title>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel="stylesheet" href="1.css" />
</head>
<body>
    <?php 
    session_start();
    
    if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
         include 'connection.php';
        $query="";
         $userid=$_SESSION['user_id'];  
    if(!empty($_POST['name'])){
        $query .= "UPDATE login SET name='".$_POST['name']."' WHERE username='".$userid."';";
    }
    if(!empty($_POST['phone'])){
      $query .= "UPDATE login SET mob='".$_POST['phone']."' WHERE username='".$userid."';";
    }
    if(!empty($_POST['answer']) && $_POST['secques']!='empty'){
      $query .= "UPDATE login SET secques='".$_POST['secques']."' WHERE username='".$userid."';";
       
        $query .="UPDATE login SET answer='".$_POST['answer']."' WHERE username='".$userid."'";
    }   
    
//    if(!empty($_POST['answer']) && $_POST['secques']=='empty'){
//        header("Refresh:3; URL=bookings.php");
//        echo '<body align="center" style="background: black;">
//<div class="centered">
//    <legend style="font-size: 4vmax;">PROFILE NOT UPDATED</legend>
//    <div class="centered">
//    <fieldset style="width: 25vw; margin-top: 18vh"><label id="passprob">Error: No security question selected.<label></fieldset>
//</div>
//</div>
//</body>';
//    }
//    else if(empty($_POST['answer']) && $_POST['secques']!='empty'){
//        header("Refresh:3; URL=profile.php");
//        echo '<body align="center" style="background: black;">
//<div class="centered">
//    <legend style="font-size: 4vmax;">PROFILE NOT UPDATED</legend>
//    <div class="centered">
//    <fieldset style="width: 40vw; margin-top: 18vh"><label id="passprob">Error: No answer for selected security question.<label></fieldset>
//</div>
//</div>
//</body>';
//    }
    mysqli_multi_query($conn, $query);
    if(mysqli_affected_rows($conn)>0)
    {
        header("Refresh:3; URL=home.php");
        echo '<body align="center" style="background: black;">
<div class="centered">
    <legend style="font-size: 4vmax;">PROFILE UPDATED</legend>
    <div class="centered">
    <fieldset style="width: 40vw; margin-top: 18vh"><label id="passprob">Redirecting you to home in a few seconds...<label></fieldset>
</div>
</div>
</body>';
    }
    else{
        header("Refresh:3; URL=profile.php");
        echo '<body align="center" style="background: black;">
<div class="centered">
    <legend style="font-size: 4vmax;">PROFILE NOT UPDATED</legend>
    <div class="centered">
    <fieldset style="width: 25vw; margin-top: 18vh"><label id="passprob">Redirecting you in a few seconds..<label></fieldset>
</div>
</div>
</body>';
    } 
     
 
     
mysqli_close($conn);
?>
</body>

</html>
