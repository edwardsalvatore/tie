<?php
session_start();
$con = mysqli_connect("localhost", "root","","tie");
if(isset($_POST['insert_data']))
{ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];
    
    
    $query = "INSERT INTO contact(name,	phonenumber, email,	message) VALUES ('$name','$email','$phonenumber','$message')";
           
    $query_run =mysqli_query($con,$query);
    
    if($query_run)
    {
        $_SESSION['status'] ="THANK YOU FOR YOUR RESPONSE";
        header("Location: contactus.php");
    
    }
    
    else{
        $_SESSION['status'] = "Data not Inserted";
        header("Location: contactus.php");
    }
    
    
    // Check connection
    if ($con) {
        echo "Connected successfully";
        
    
    }else{
         die("Connection failed:" . mysqli_connect_error());
    }
    


}

?>