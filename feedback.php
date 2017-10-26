<?php
    //checking connection to database
    $con = mysqli_connect('localhost','root','','health_link');

    if (mysqli_connect_errno($con)){
        echo "failed to connect"; 
    }
    // creating vairibles for data
    $firstname = $_POST['fname'];
    $lasttname = $_POST['lname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];


    //inserting values into the users table on project database
    mysqli_query($con, "INSERT INTO feedback (first_name, last_name, phone,address,message)
                        VALUES ('$firstname', '$lasttname','$phone', '$address', '$message')");
    
    //checking if the data were recorded in the database
    if(mysqli_affected_rows($con)>0){
        echo "Thank you". $firstname. " ". "your feedback is useful";
        echo '<a href="index.html"> Continue with our page </a>';
    }else{
        echo 'user not added';
        echo mysqli_error($con);
    }
?>