<?php
	$message ="";
	if(isset($_POST["login"]) && $_POST["login"] !== "" &&
	   isset($_POST["password"]) && $_POST["password"] !== ""){
        $user = $_POST["login"];
        $password = $_POST["password"];

        $con = @new mysqli('localhost','root','root','Test');
        if ($con->connect_errno) {
            die("Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error);
        }
		
		$result = $con->query("SELECT password FROM User WHERE name='".$user."'");
		$row = $result->fetch_row();
		if($row[0]==$password){
			session_start();
			$_SESSION["user"] = $user;
			header("Location: view/home.php");
		}else{
			$message = "Login or password invalid";		
            #exit;
		}
    }
?>