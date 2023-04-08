<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<head>

</head>
<body>
    <div class="title">TalkFoFree.com</div>
    <div class="wrapper">
        <form class='signup' action="#" enctype="multipart/form-data">
            <header>Signup</header>
            <div class="name-details">
                <div class="field">
                    <label>First Name</label>
                    <input type="text" id='fnameIn' name='fname' placeholder="First Name" class="field-input" required>
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name='lname' placeholder="Last Name" class="field-input" required>
                </div>
            </div>
            <div class="field">
                <label>Email Address</label>
                <input type="text" name='email' placeholder="Email Address" class="field-input" required>
            </div>
            <div class="field">
                <label>Password</label>
                <input id="password" name='pass' type="password" placeholder="Password" class="field-input" required>
                <i id="toggle"class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label>Select Profile Picture</label>
                <input type="file" name='image' required>
            </div>
            <div class="field button">
                <input type="submit" value="Sign Up">
            </div>
        </form>
        <div class="link">Already Signed Up? <a href="login.php">Login Now</a></div>
    </div>
</body>

<script src="JS/password-toggle.js"></script>
<script src="JS/signup.js"></script>