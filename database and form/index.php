<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    if(isset($_POST['submit']))
        {
            $FirstName = $_POST['first_name'];
            $LastName = $_POST['last_name'];
            $email = $_POST['email'];
            $Password = $_POST['pass_word'];
            $confirm_password = $_POST['confirm_password'];
        };
    
    // server connection
    $servername = "localhost";
    $firstname = "root";
    $password = "";
    $database ="myDB";

    // create connection
    $connection = mysqli_connect($servername, $firstname, $password, $database);

    // check connection
    if(!$connection){
        die("connection failed:" . mysqli_connect_error());
    };

    // create database
    // $myquery ="CREATE DATABASE myDB";
    // if(mysqli_query($connection, $myquery)){
    //     echo "Database created succesfully";
    // };
    
    // Inserting values into input fields
    $sql = "INSERT INTO user_data (first_name, last_name, email, pass_word, confirm_password) 
    VALUES ('$FirstName','$LastName','$email','$Password','$confirm_password')";

    if (mysqli_query($connection, $sql)) {
        $last_id = mysqli_insert_id($connection);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    mysqli_close($connection);
    ?>
</body>
</html>