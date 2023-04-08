<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
<head>

</head>
<body>
    <div class="title">TalkFoFree.com</div>
    <div class="wrapper">
        <form class='login' action="#">
            <header>Login</header>
            <div class="field">
                <label>Email Address</label>
                <input type="text" name='email' placeholder="Email Address" class="field-input">
            </div>
            <div class="field">
                <label>Password</label>
                <input id="password" name='pass' type="password" placeholder="Password" class="field-input">
                <i id="toggle" class="fas fa-eye"></i>
            </div>
            <div class="field button">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="link">Not Signed Up Yet? <a href="index.php">Signup Now</a></div>
    </div>
</body>

<script src="JS/password-toggle.js"></script>
<script src="JS/login.js"></script>