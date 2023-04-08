<?php 
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass)) {
        //check if email is valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            //check if email exists in DB
            if (mysqli_num_rows($sql) > 0) {
                echo "$email - This email already exits!";
            }
            else {
                //check if file is uploaded
                if(isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name']; //get image name
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name']; //temp name is used
                    $img_ex = explode('.', $img_name);
                    $img_ext = end($img_ex);
                    $extensions = ['png', 'jpeg', 'jpg'];
                    //if uploaded image has valid extension
                    if(in_array($img_ext, $extensions) === true) {
                        $time = time();
                        $new_img_name - $time.$img_name;
                        //if user uploads image move to images folder
                        if(move_uploaded_file($tmp_name, "../backend/images/".$new_img_name)) {
                            echo "good ";
                            $status = "Active now"; //set status to active now when they signup
                            $random_id = rand(time(), 10000000);
                            $sql2 = mysql_query($conn, "INSERT INTO users (unique_id, fname, lname, email, pass, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$pass}', '{$new_img_name}', '{$status}')");
                            //data inserted
                            echo "good ";
                            if($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                echo "good";
                                if(mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "Success";
                                }
                            }
                            else {
                                echo "Something went wrong!";
                            }
                        }
                    }
                    else {
                        echo "Please select an image that is jpeg, jpg, or png!";
                    }
                }
                else {
                    echo "Please select an image file!";
                }
            }
        }
        else {
            echo "$email - This is not a valid email!";
        }
    }
    else {
        echo "All input fields required";
    }
?>