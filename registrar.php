<html>

<title>Registration</title>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="0.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php 
         include 'connection.php';
         $userid=$_POST['userid'];  
         $phone=$_POST['phone']; 
        
         $sql = "SELECT * FROM login WHERE username='$userid'";
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
             header("Refresh:0; URL=redir-signup.php");
             die();
            // output data of each row
//             $message="The entered e-mail address already exists.";
        #echo"<script type='text/javascript'> { alert('$message');} window.location.replace('signup.html');</script>";
        #try display message tu kat page je dulu butttt ok mana nak tukar colour dia
//        echo $message;

        }
    
 else {
         $sql = "SELECT * FROM login";
         $result = $conn->query($sql);

         $checkpw = "SELECT * FROM login WHERE mob='$phone'";
         $resultpw = $conn->query($checkpw);
         if ($resultpw ->num_rows > 0) {
             header("Refresh:0; URL=redir-signup.php");
             die();
         }
//         while($row = $result->fetch_assoc()) {
//         if(strcmp($phone,$row["mob"])==0)
//            {
//           $message="user with the entered mobile number already exists.";
//
//        #echo "<script type='text/javascript'> { alert('$message');} window.location.replace('signup.html');</script>";
//
//        #try display message tu kat page je dulu butttt ok mana nak tukar colour dia
//        echo $message;
//    }
//}
     
$sql="INSERT INTO login (name,username,mob,password,secques,answer) VALUES ('$_POST[name]','$_POST[userid]','$_POST[phone]','$_POST[pass]','$_POST[secques]','$_POST[answer]')";
 
if ($conn->query($sql) === TRUE) {
    header("Location:home.php"); /* Redirect browser */
	exit();}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
 }
?>
</body>

</html>
