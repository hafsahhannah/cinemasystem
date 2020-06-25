<html>
<title>Cine-art | Showtime</title>
<?php
session_start();

$_SESSION['movsel']=$_GET['movie'];
if ( isset( $_SESSION['user_id'] ) ) {
    $idh=$_SESSION['user_id'];
    
} else {echo 'session expired.';
header("Refresh:0; URL=expiredsess.php");
die();
}
function getMovieName(){
    if($_SESSION['movsel']){ echo $_SESSION['movsel'];}
    else{
        echo "Unknown";
    }
}
function getTrailer()
{   $tr= $_SESSION['movsel'];

include 'connection.php';

$sql = "SELECT trailer_link FROM moviedb WHERE      title='".$tr."'";
$result = $conn->query($sql);
if ($result->num_rows == 0 ) { 
    echo "https://www.youtube.com/embed/j8SOfg2pxXk";
}
else{
    while($row = $result->fetch_assoc()) {
     $link=$row["trailer_link"];
 }
 echo $link;
}

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap');
    </style>
    <script>
        var queryString = decodeURIComponent(window.location.search);
        queryString = queryString.substring(1);
        var queries = queryString.split("=");
        queryString = queries[1];

    </script>

    <base target="_self" />
    <link rel="stylesheet"  type="text/css"  href="1.css"/>
    <link rel="stylesheet"  type="text/css"  href="2.css" >
    <link rel="stylesheet"  type="text/css"  href="3.css" >
    <link rel="stylesheet"  type="text/css"  href="7.css" >
    <link href="2.css" rel = "stylesheet" type = text/css >
    <link href="1.css" rel = "stylesheet" type = text/css >
    <link href="3.css" rel = "stylesheet" type = text/css >
    <link href="7.css" rel = "stylesheet" type = text/css >
</head>

<body style="background-image:url(4.jpg)">

    <div class="topnav" style="margin-bottom: 10px;">

        <a class="active" href="home.php"><span style="font-family:DM Sans; font-size:16;">Home</span></a>
        <div class="dropdown">
            <a class="dropbtn" href=""><span style="font-family:DM Sans; font-size:16;">
                <?php getName(); ?></span>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="fp22.php?idx=<?php echo $idh; ?>"><span style="font-family:DM Sans; font-size:16;">Change Password</span></a>
                <a href="profile.php"><span style="font-family:DM Sans; font-size:16;">Edit Profile</span></a>
            </div>
        </div>
        <a href="bookings.php"><span style="font-family:DM Sans; font-size:16;">Bookings</span></a>
        <div><a href="logout.php"><span style="font-family:DM Sans; font-size:16;">Logout</span></a></div>
    </div>
    <div><div class="red-square">
        <h1>
            <?php getMovieName(); ?></h1>
        </p></div>
    </div> 
</div>
<div>
    <iframe id="video" align=”middle” margin=”auto” frameborder=”0″ allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" width="600px" height="300px" src="<?php getTrailer(); ?>">
    </iframe></div>
    <div><div class="red-square">
        <h1><p style="background-color:rgba(170,0,0,0.2);text-align:center;font-size:30px;color:black;width:100%px;font-family:DM Sans;">Show Timings</p></h1>
    </div>

    <div class="timings">
        <label class="hall">GSC: City Centre &nbsp;</label>
        <a href="booking.php?time=10:30%20am&movie=<?php getMovieName(); ?>&theatre=GSC%20Cinemas">
            <button class="btnq"><span>10:30 am </span></button>
        </a>
        <a href="booking.php?time=01:15%20pm&movie=<?php getMovieName(); ?>&theatre=GSC%20Cinemas"><button class="btn"><span>01:15 pm </span></button></a>
        <a href="booking.php?time=04:30%20pm&movie=<?php getMovieName(); ?>&theatre=GSC%20Cinemas"><button class="btn"><span>04:30 pm </span></button></a>
        <a href="booking.php?time=07:00%20pm&movie=<?php getMovieName(); ?>&theatre=GSC%20Cinemas"><button class="btn"><span>07:00 pm </span></button></a>

    </div>
    <div class="timings">
        <label class="hall">TGV: KLCC Mall &nbsp;&nbsp;&nbsp;&nbsp;</label>
        <a href="booking.php?time=10:30%20am&movie=<?php getMovieName(); ?>&theatre=TGV%20Cinemas"><button class="btnq"><span>10:30 am </span></button></a>
        <a href="booking.php?time=01:15%20pm&movie=<?php getMovieName(); ?>&theatre=TGV%20Cinemas"><button class="btn"><span>01:15 pm </span></button></a>

    </div>
    <div class="timings">
        <label class="hall">MBO: Brem Mall &nbsp;&nbsp;&nbsp;</label>
        <a href="booking.php?time=04:30%20pm&movie=<?php getMovieName(); ?>&theatre=MBO%20Cinemas"><button class="btnq"><span>04:30 pm </span></button></a>
        <a href="booking.php?time=07:00%20pm&movie=<?php getMovieName(); ?>&theatre=MBO%20Cinemas"><button class="btn"><span>07:00 pm </span></button></a>
    </div>
    <div class="timings">
        <label class="hall">TGV: Aeon AU2 &nbsp;&nbsp;&nbsp;&nbsp;</label>

        <a href="booking.php?time=01:15%20pm&movie=<?php getMovieName(); ?>&theatre=TGV%20Aeon"><button class="btnq"><span>01:15 pm </span></button></a>


    </div>
</div>

</div>
</body>

</html>

<style>
    body {
        background-color: #2f3742;
        color: #dfe0e4;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    h1 {

        max-width: 500px;
        margin: auto;
        font-size: 40px;
        color: #fff;
        text-align: center;
        text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #B22222, 0 0 20px #B22222, 0 0 25px #B22222, 0 0 30px #B22222, 0 0 35px #B22222;
    }

    .red-square {
      margin: auto;
      width: 60%;
      padding: 5px;
      margin-lef
  }
  iframe {
     display: flex;
     width: 500px; /* It should not be 100% */
     height: 500px:
     margin-left: auto;   /* Automatic margin from left */
     margin-right: auto; /* Automatic margin from right */
 } 

</style>
