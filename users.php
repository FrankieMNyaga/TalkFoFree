session_start();
<?php 
    if(isset($_SESSION['unique_id'])) {
        header("location: ../public_html/login.php");
    }
?>
<?php include_once "header.php";?>
<body>
    <div class="title">TalkFoFree.com</div>
    <div class="wrapper">
        <div class="users">
            <header>
                <?php 
                    include_once "../public_html/backend/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                ?>
                <div class="content">
                    <img src="../public_html/backend/na.jpeg" alt="">
                    <div class="details">
                       <span><?php echo $row['fname']. " " .$row['lname']?></span> 
                       <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select a user to chat with</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </div>
    </div>
</body>

<script src="JS/users.js"></script>