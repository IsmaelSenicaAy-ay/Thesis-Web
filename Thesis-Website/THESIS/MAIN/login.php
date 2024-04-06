<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAIT CYCLE ASSESSMENT DEVICE.</title>
    <style>
        .fa-times {
            display: none; /* Hide the times icon by default */
        }
    </style>
</head>
<?php include 'session.php'; ?>
<body>
    <div class="intro-text">
        <div class="fade-in word-spacing">Gait</div>
        <div class="fade-in word-spacing" style="animation-delay: 0.5s;">Assessment</div>
        <div class="fade-in word-spacing" style="animation-delay: 1s;">Device.</div>
    </div>
    <div class="module form-module">
        <div class="toggle">
            <i class="fas fa-pencil-alt"></i> <!-- Pencil icon -->
            <i class="fas fa-times"></i> <!-- X icon -->
            <span class="tooltip">Click Me</span>
        </div>
        <div class="form login-form">
            <h2>Login to your account</h2>
            <form action="" class="login__form" method="POST">
                <input type="text" name="email" placeholder="Username or Email">
                <div class="input-container">
                    <input type="password" name="password" id="loginPasswordInput" placeholder="Password">
                    <i class="fas fa-eye-slash toggle-password" data-target="loginPasswordInput"></i>
                </div>
                <button name="login" id="login">Login</button>
            </form>
        </div>
        <div class="form register-form">
            <h2>Create an account</h2>
            <form action="" class="reg_form" method="POST">
                <input type="text" name="rusername" placeholder="Username">
                <div class="input-container">
                    <input type="password" id="registerPasswordInput" name="rpassword" placeholder="Password">
                    <i class="fas fa-eye-slash toggle-password" data-target="registerPasswordInput"></i>
                </div>
                <input type="email" name="remail"placeholder="Email Address">        
                <button name="register" id="register">Register</button>
            </form>
        </div>
        <div class="cta">
            <a href="http://andytran.me">Forgot your password?</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->
    <script>
        $(document).ready(function() {
            // Hide the intro text after 2 seconds
            setTimeout(function() {
                $('.intro-text').fadeOut();
            }, 2000);

            // Toggle Function for switching between forms
            $('.toggle').click(function(){
                $(this).find('.fa-pencil-alt, .fa-times').toggle(); // Toggle visibility of icons
                $('.form').animate({
                    height: "toggle",
                    paddingTop: 'toggle',
                    paddingBottom: 'toggle',
                    opacity: "toggle"
                }, "slow");
            });

            // Toggle Password Visibility for Login Form
            $('.login-form .toggle-password').click(function() {
                const passwordInput = $('#loginPasswordInput');
                const icon = $(this);

                // Toggle password visibility
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });

            // Toggle Password Visibility for Registration Form
            $('.register-form .toggle-password').click(function() {
                const passwordInput = $('#registerPasswordInput');
                const icon = $(this);

                // Toggle password visibility
                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('fa-eye-slash').addClass('fa-eye');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('fa-eye').addClass('fa-eye-slash');
                }
            });
        });
    </script>
</body>
</html>
