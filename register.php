<?php
    //checking connection to database
    $con = mysqli_connect('localhost','root','','project');

    if (mysqli_connect_errno($con)){
        echo "failed to connect"; 
    }
    // creating vairibles for data
    $firstname = $_POST['fname'];
    $lasttname = $_POST['lname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $occu = $_POST['occupation'];
    $password = $_POST['password'];
    $nation = $_POST['nationality'];
    $encrypt = hash('ripemd128', $password);


    //inserting values into the users table on project database
    mysqli_query($con, "INSERT INTO users (first_name, last_name, nationality, phone_number,address,occupation, username, password)
                        VALUES ('$firstname', '$lasttname', '$nation','$phone', '$address', '$occu','$username', '$encrypt')");
    
    //checking if the data were recorded in the database
    if(mysqli_affected_rows($con)>0){
        echo "welcome ". $username;
        echo '<a href="reg.html"> Add another </a>';
    }else{
        echo 'user not added';
        echo mysqli_error($con);
    }
?>