<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])){
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);

    //checking empty fields
    if(empty($name) || empty($age) || empty($email)){
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else{
        //if all the fields are filled (not empty)

        //insert data to database
        $insertquery = "insert into users( name,age,email) values('$name','$age','$email' )";

		//$iquery = mysqli_query($con, $insertquery);
        $result = mysqli_query($mysqli, $insertquery);
    }

        //display success message
        echo "<p class='text-success'>Data added successfully.</p>";
        echo "<br/><a href='index.php'>View Result</a>";
    }

?>