<html>

<title>Cine-art | Your Bookings</title>
<?php
    session_start();
    if (isset( $_SESSION['user_id'])) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
    header("Refresh:0; URL=expiredsess.php");
    die();
}
    $loc="";
   function getPosterLoc($name){
        include 'connection.php';
        $sql = "SELECT posterLoc FROM moviedb WHERE      title='".$name."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) { 
            $GLOBALS['loc']="movieIMG/unavailable.jpg";
            }
        else{
            while($row = $result->fetch_assoc()) {
                if($row["posterLoc"]==""){
                    $GLOBALS['loc']="movieIMG/unavailable.jpg";
                }
                else{
                  $GLOBALS['loc']=$row["posterLoc"];  
                }
               
                             }
            }
    
   }
    function getName(){
        $id=$_SESSION['user_id'];
        include 'connection.php';
    
        $sql = "SELECT name FROM login WHERE      username='".$id."'";
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
    <link rel="stylesheet" href="6.css" />
    <link rel="stylesheet" href="7.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    </style>
    <script>
        function cancellor() {
            if (confirm("Are you sure?")) {
                var name = event.target.id;
                window.location.replace('cancelTicket.php?ticketid='.concat(name));
            }
        }

    </script>
</head>

<body align="center" style="background: linear-gradient(rgba(0,0,0,0.5),
rgba(0,0,0,0.5)), url(11.jpg) center center; background-size: cover; background-attachment: fixed">

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
        <a href="">Bookings</a>
        <div><a href="logout.php">Logout</a></div>

    </div>
    <p></p>
    <div class="logo-container" style="background-color:rgba(170,0,0,0.4);
    text-align:center;
    width:100%;
    height: 37.5vh;">
    <div class="logo">
        <div class="text">
            Your Tickets
        </div>
    </div>
    </div>

    <?php
        include 'connection.php';
    $sql = "SELECT * FROM bookings WHERE      userid='".$_SESSION['user_id']."' and cancel_status=1";
    $result = $conn->query($sql);
    $numtks = $result->num_rows;
    if($numtks==0){
        echo '<div id="no_bk" style="font-family:DM Sans; font-size: 30px;">No bookings yet!</div>';
    }
    else{
        while($row=$result->fetch_assoc())
        {
            getPosterLoc($row["movieName"]);
            $out = strlen(ucfirst($row["movieName"])) > 19 ? substr(ucfirst($row["movieName"]),0,19)."..." : ucfirst($row["movieName"]);
        echo '

    <div class="frame" style="margin-left:3vw; margin-right:3vw;">
        <div class="card">
            <div style="background-image: url('.$loc.')" class="image">
                <div class="overlay">
                    <div class="btn2">
                    <a href="https://www.imdb.com/title/tt6933454/?ref_=nv_sr_1" class="bk_inf" style="margin-left:auto; margin-right:auto;">
                     About
                    </a>
                    </div>
                </div>
             </div>
        <button class="cancelbtn" id="'.$row["ticketID"].'"
        onclick="cancellor();" style="margin-left:auto; margin-right:auto; line-height:0.8cm;">Cancel</button><br>
        <legend style="font-size:1.5vmax; margin-left:auto; margin-right:auto; line-height:1.2cm;">Ticket ID: '.$row["ticketID"].'</legend>
        </div>
    
        <div class="tk_details" style="line-height: 0.8cm;">
        <br><span class="movname">Movie: '.$out.'</span>
        <br>Theatre: '.ucfirst($row["hall"]).'
        <br>Date: '.$row["dob"].'
        <br>Showtime: '.$row["showTime"].'
        <br>Seats: '.$row["numSeats"].'
        <br>Paid: RM'.$row["amount"].'
        </div>
    </div>
    ';

    }
        
    }
    ?>
</body>

</html>
