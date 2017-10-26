<?php
    //staring the session


    //checking connection to database
    $con = mysqli_connect('localhost','root','','project');

    if (mysqli_connect_errno($con)){
        echo "failed to connect"; 
    }
  
  //creating variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypt = hash('ripemd128', $password);

    //query the database
    $sql="SELECT * FROM users WHERE username = '$username' AND password = '$encrypt'";

    $result=mysqli_query($con, $sql);

    //counting number of tables
    //$numrows=mysqli_num_rows($result);

    //test if it returns anything
    if(mysqli_num_rows($result) == 0){
      redirect_to("index.html");
    }else{
      redirect_to("index.html");
    }
      
?>