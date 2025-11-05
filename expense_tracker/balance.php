<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		
        $balance = $_POST['balance'];

        
    }
    if(!empty($user_name)  && !is_numeric($user_name))
		{
            $query2 = "UPDATE users SET balance='$balance' WHERE user_name='$user_name'";
             mysqli_query($con, $query2);
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>balance</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">
            <h1>Update your Account Balance</h1><br></div>

			<input id="text" type="text" name="user_name" placeholder="Enter your Username"><br><br>
            <input id="text" type="text" name="balance" placeholder="Enter your current balance"><br><br>

			<input id="button" type="submit" value="Update"><br><br>

			<a href="index.php">Click to Go Back</a><br><br>
		</form>
	</div>
</body>
</html>
