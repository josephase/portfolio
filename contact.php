<?php
    //checking connection to database
    $con = mysqli_connect('localhost','root','','health_link');

    if (mysqli_connect_errno($con)){
        echo "failed to connect"; 
    }
    // creating vairibles for data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    //inserting values into the users table on project database
    mysqli_query($con, "INSERT INTO contact (name,email,message)
                        VALUES ('$name', '$email','$message')");
    
    //checking if the data were recorded in the database
    if(mysqli_affected_rows($con)>0){
        echo "Thank you". $name. " ". "we will get back to you shortly";
        echo '<a href="index.html"> Continue with our page </a>';
    }else{
        echo 'user not added';
        echo mysqli_error($con);
    }
?>