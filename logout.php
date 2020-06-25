<html>
<title>Cine-art | Logout Confirmation</title>

<?php
session_start();
?>

<head>
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bellota:wght@700&family=DM+Sans:wght@400;500&display=swap');    
    </style>
    <link rel="stylesheet" href="1.css" />
    <link rel="stylesheet" href="0.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body align="center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(5.jpg) center center; background-size: cover;">
<div class="centered">
	<?php
		if(!isset($_POST['submit']))
		{
	?>
    <form name="logoutform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset style="width: 40vw;">

            <legend style="font-size: 3vmax;">Log Out Confirmation</legend>
            
            <p style="font-family: DM Sans; font-size: 14px; color: silver">
            	Are you sure you want to log out?
            </p>
            <br>

            <input type="submit" value ="Yes" id="b1" name="submit" style="border-radius: 13px; font-size: 14px">&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="home.php"><input type="button" value="No" id="b2" name="cancel" style="font-size: 14"></a><br><br>

        </fieldset>
    </form>
    <?php
		}

    	if(isset($_POST['submit']))
    	{
    		session_unset();
			session_destroy();

			//header("Refresh:0; URL=login.php");
	?>
			<body align="center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(5.jpg) center center; background-size: cover;">
				<div class="centered">
					<form name="logoutform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			        	<fieldset style="width: 50vw;">

				            <legend style="font-size: 3vmax;">Thank You for Booking With Us!</legend>
				            <a href="login.php"><input type="button" value="Back to Login Page" id="b2" name="cancel" style="font-size: 14; width: 10em; "></a><br><br>
		        		</fieldset>
		    		</form>
		    	</div>
		    </body>
    <?php	
    	}
    ?>
</div>
</body>

</html>
