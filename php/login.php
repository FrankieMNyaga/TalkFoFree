<?php 
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    if(!empty($email) && !empty($pass)) {
        //check email and password match DB
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
        if(mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "Success";
        }
        else {
            echo "Email or Password is incorrect!";
        }
    }
    else {
        echo "All input fields required!";
    }
?>