<?php
$insert = false;
if(isset($_POST['name']))
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";
     // Collect post variables
     $name = $_POST['name'];
     $contact = $_POST['contact'];
     $email = $_POST['email'];
     $tt = $_POST['tt'];
     $number = $_POST['number'];
     $placement = $_POST['placement'];
     $date = $_POST['date'];
     $note = $_POST['note'];
     $sql =  "INSERT INTO `myfoodhub` . `seats` (`name`, `contact`, `email`, `tt`, `number`, `placement`, `date`, `note`, `dt`) VALUES ('$name', '$contact', '$email', '$tt', '$number','$placement', '$date', '$note', current_timestamp());";
     // echo $sql;
 
     // Execute the query
     if($con->query($sql) == true){
         // echo "Successfully inserted";
 
         // Flag for successful insertion
         $insert = true;
     }
     else{
         echo "ERROR: $sql <br> $con->error";
     }
 
     // Close the database connection
     $con->close();
     header('location:index.php');


    