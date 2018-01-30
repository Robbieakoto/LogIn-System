<?php
include 'connection.php';

if(isset($_POST['log_in'])){
	$stmt = $conn->prepare("SELECT * FROM signup WHERE username=:username");
	$stmt->bindParam(':username',$username);

	$stmt->execute();
	
    $row = $stmt->fetch();
    if($row>0){
		$stmt->bindParam(':password',$password);
		if(password_verify($password, $row['password'])){
			if($row['status'] == 'active'){
				$_SESSION['username']=$row['username'];
				$_SESSION['password'] = $row['password'];

			header("location:index.php");
			} else {
				$status = "Account is not available. Please sign up  <a href='space Sign Up.php'>HERE</a> ";
			}
			
			} else {
			$status = "Invalid Credentials!";
			}

		} else {
		$status = "Invalid Credentials!";
	}
	
}
?>