<?php

//============Config Database


    if(file_exists(dirname (__FILE__). "./config.php")){
        require_once(dirname (__FILE__). "./config.php");
    }

    if($conn == true){
            $test = "True";
        }else{
            $test = "False";
        }

//============Config Database


//============Setting up Variables

	$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : NULL;
	$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : NULL;
	$username = isset($_POST['username']) ? $_POST['username'] : NULL;
	$email = isset($_POST['email']) ? $_POST['email'] : NULL;
	$password = isset($_POST['password']) ? $_POST['password'] : NULL;

//============Setting up Variables





?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>

        <!-- CSS Link -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    	<!-- ==== ANNIMATION ==== -->

    		<div class="container">
    			<div class="box">
    				<div class="dot"></div>
    			</div>
    		</div>


    	<!-- ==== ANNIMATION ==== -->



    	<!-- Database Connected  -->

    		<h1> Database Has Connection : <?php echo $test ;  ?> </h1>

    	<!-- Database Connected  -->
       

    	<!-- ===== REGISTRATION FORM ===== -->

    	<form action="#" method="POST" enctype="multipart/form-data">
    		<input type="text" name="first_name" placeholder="Your First Name" required>
    		<input type="text" name="last_name" placeholder="Your Last Name" required>
    		<input type="text" name="username" placeholder="Your Username" required>
    		<input type="email" name="email" placeholder="Your Email" required>
    		<!-- <input type="file" name="image" required> -->
    		<input type="password" name="password" placeholder="Password" required>

    		<input type="submit" value="Create" name="submit">
    	</form>


    	<!-- ===== REGISTRATION FORM ===== -->

    	<!-- ====== Loadding Data into database ======= -->

   
		    <?php
		     if(isset($_POST['submit'])){
		     		$first_name = $_POST['first_name'];
		     		$last_name = $_POST['last_name'];
		     		$username = $_POST['username'];
		            $email = $_POST['email'];
		            $password = $_POST['password'];



		            $sql = "INSERT INTO info (firstname,lastname,username,email,password)
		            VALUES ('$first_name','$last_name','$username','$email','$password')";
		            if(mysqli_query($conn, $sql)){
		                function success(){
		                	return "New Account Created Successfully";
		                }
		            }else{ function success(){
		            	return "Details Already Exists";
		            	}

		                //echo "Error: ". $sql ." ". mysqli_error($conn);
		            }
		            mysqli_close($conn);
		   		echo "<h1>".success()."</h1>";

		        }

		    	


		    ?>


	    <!-- ====== Loadding Data into database ======= -->


	    <!-- ======  Data clears when tab is refreshed ======= -->

	    <script type="text/javascript">
	        if( window.history.replaceState ){
	            window.history.replaceState( null, null, window.location.href);
	        }
	    </script>

	    <!-- ======  Data clears when tab is refreshed ======= -->



    </body>
</html>