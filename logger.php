<html>

<title>Cine-art | User Authentication</title>

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
                   $recid=$_POST['userid'];
                   $recpass=$_POST['pass'];
                   
            $sql = "SELECT password FROM login where username='$recid'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
               $pass=$row["password"];
                             }
                } else {
                
                #echo "<script type='text/javascript'> { alert('No entries found with this username.');} window.location.replace('login.php');</script>";

                echo "Oops! User not found. Please try again.";
            }
    
                
            if(strcmp($recpass,$pass)==0)
            {
                 session_start();
                    $_SESSION['user_id'] = $recid;
                 echo "<script type='text/javascript'>  window.location.replace('home.php');</script>";
            }
            else{
                
                    header("Refresh:0; URL=redir-login.php");
                       die();
            }
            
                $conn->close();
            // Check connection

            
        ?>
</body>

</html>
