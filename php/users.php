<?php 
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 0) {
        $output .= "No users are available to chat"
    }
    else if(mysqli_num_rows($sql) > 0) {
        while($row = mysqli_fetch_assoc($sql)) {
            $output .= '<a href="#">
                            <div class="content">
                                <img src="/public.html/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <span>'.$row['fname'] . " " . $row['lname'].'</span> 
                                    <p>Test Message</p>
                                </div>
                            </div>
                            <div class="status-dot"><i class="fas fa-circle"></i></div>
                        </a>';
        }
    }
    echo $output;
?>