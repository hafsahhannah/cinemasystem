<html>
<title>Cine-art | Movies</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap');
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="2.css" />
    <link rel="stylesheet" href="7.css" />
    <?php
    session_start();
    
    if ( isset( $_SESSION['user_id'] ) ) 
    {
        $idh=$_SESSION['user_id'];
        
    }
    else 
    {
        echo 'session expired.';
        header("Refresh:0; URL=expiredsess.php");
        die();
    }

    function setMovieSelected($mov)
    {
        $_SESSION['movsel']=$mov;
    }

    function getName()
    {
        $id=$_SESSION['user_id'];
        include 'connection.php';
        
        $sql = "SELECT name FROM login WHERE username='".$id."'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0 ) 
        { 
            echo $id;
        }
        else
        {
            while($row = $result->fetch_assoc()) 
            {
             $name=$row["name"];
            }
            $_SESSION['idname']=$name;
            echo $name;
        }
     
    }
    ?>

</head>

<body style="background-image:url(13.jpg)">
    <div class="topnav">

        <a class="active" href="home.php"><span style="font-family:DM Sans; font-size:16;">Home</span></a>
        <div class="dropdown">
            <a class="dropbtn" href="">
                <span style="font-family:DM Sans; font-size:16;"><?php getName(); ?></span>
                <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
                <a href="fp22.php?idx=<?php echo $idh; ?>"><span style="font-family:DM Sans; font-size:16;">Change Password</span></a>
                <a href="profile.php"><span style="font-family:DM Sans; font-size:16;">Edit Profile</span></a>
            </div>
        </div>
        <a href="bookings.php"><span style="font-family:DM Sans; font-size:16;">Bookings</span></a>
        <div><a href="logout.php" target="_self"><span style="font-family:DM Sans; font-size:16;">Logout</span></a></div>
        
    </div>
    <br>
    <!--<div id="movie_lang_selection" style="height:10px;">
        <b>
            <font face="impact" color="white">Movies</font>
        </b> <input type="checkbox" name="all">
        <font face="calibri" color="white">All</font> <input type="checkbox" name="en">
        <font face="calibri" color="white">English</font> <input type="checkbox" name="hi">
        <font face="calibri" color="white">Hindi</font>

    </div> -->
    <br>
    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/mad-max.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Mad%20Max" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt1392190/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>


        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Mad Max</p>
            </b></h4>
        </div>
    </div>
    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">

        <div style="background-image: url(movieIMG/a-kid-like-jake-et00057246-15-05-2017-03-21-35.jpg)" ; class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=A%20Kid%20Like%20Jake" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt6884200/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">A Kid Like Jake</p>
            </b></h4>
        </div>
    </div>


    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/inside-out.jpg) ;" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Inside%20Out" class="bk_inf">
                        Book

                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt2096673/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container" >
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Inside Out</p>
            </b></h4>
        </div>
    </div>


    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/finding-nemo.jpg) ;" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Finding%20Nemo" class="bk_inf">
                        Book

                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt0266543/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Finding Nemo</p>
            </b></h4>
        </div>
    </div>


    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/aquaman-et00052996-02-02-2017-10-15-37.jpg) ;" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Aquaman" class="bk_inf">
                        Book

                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt1477834/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Aquaman</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/chernobyl.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Chernobyl" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt7366338/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>
        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Chernobyl</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/joker.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Joker" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt7286456/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Joker</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/up.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=UP" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt1049413/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>
        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">UP</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/avengers.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Avengers" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt4154796/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Avengers: Endgame</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/parasite.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Parasite" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt6751668/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Parasite</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/knives-out.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Knives%Out" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt8946378/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Knives Out</p>
            </b></h4>
        </div>
    </div>

    <div class="card" style= "margin-left:2.1vw; margin-right:2.1vw;">
        <div style="background-image: url(movieIMG/peter-rabbit.jpg)" class="image">
            <div class="overlay">
                <div class="btn1">
                    <a href="book movie.php?movie=Peter%20Rabbit" class="bk_inf">
                        Book
                    </a>
                </div>
                <div class="btn2"><a href="https://www.imdb.com/title/tt5117670/" class="bk_inf">
                    About
                </a></div>
            </div>
        </div>

        <div class="container">
            <h4><b>
                <p style="text-align:center;font-size:16px; font-family: DM Sans">Peter Rabbit</p>
            </b></h4>
        </div>
    </div>

</body>

</html>