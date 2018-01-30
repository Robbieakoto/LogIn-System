<?php

try{
    // CONNECTION TO THE DATABASE
    $conn = new PDO ("mysql:host=127.0.0.1;dbname=form","root","");
   // echo "connected";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e)
{
    echo "error" .$e->getMessage();
}


//CHECKING THE PRESENCE OF DATA FROM FORM
  if (isset($_POST['sign_up'])){
      

        $name = $_POST['name'];
        $email = $_POST['email'];
       $password = $_POST['password'];


//adding users to the table

       $sql = "INSERT INTO signup (username, Email, password) VALUES (:name, :email, :password)";	
       $stmt =$conn ->prepare($sql) ;
       
       
       $stmt->bindParam(":name", $name);
       $stmt->bindParam(":email", $email);
       $stmt->bindParam(":password", $password);
       
       $result= $stmt->execute();
      
}




?>