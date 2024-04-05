<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAIT CYCLE ASSESSMENT DEVICE.</title>
    <style>
        .fa-times {
            display: none; /* Hide the times icon by default */
        }
    </style>
</head>
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
        <div class="form">
            <h2>Login to your account</h2>
            <form>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button>Login</button>
            </form>
        </div>
        <div class="form">
            <h2>Create an account</h2>
            <form>
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <input type="email" placeholder="Email Address">
                <input type="tel" placeholder="Phone Number">
                <button>Register</button>
            </form>
        </div>
        <div class="cta">
            <a href="http://andytran.me">Forgot your password?</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery library -->
    <script>
        $(document).ready(function() { // Ensure script executes after DOM is loaded
            // Hide the intro text after 2 seconds
            setTimeout(function() {
                $('.intro-text').fadeOut();
            }, 2000);
            
            // Toggle Function
            $('.toggle').click(function(){
                $(this).find('.fa-pencil-alt').toggle(); // Toggle visibility of pencil icon
                $(this).find('.fa-times').toggle(); // Toggle visibility of times icon
                // Switches the forms  
                $('.form').animate({
                    height: "toggle",
                    'padding-top': 'toggle',
                    'padding-bottom': 'toggle',
                    opacity: "toggle"
                }, "slow");
            });
        });
    </script>
</body>
</html>
