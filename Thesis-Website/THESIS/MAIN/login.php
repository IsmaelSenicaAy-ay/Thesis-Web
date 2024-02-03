<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAIT CYCLE ASSESMENT DEVICE.</title>
</head>
<?php include 'session.php'; ?>



<body class="align">
    <div class="intro">
        <h1 class="logo-header">
            <span class="logo">Gait Cycle  </span><span> </span><span class="logo"> Assesment Device.</span>
        </h1>
    </div>
    <div class="login">

        <header class="login__header">
          <h2><svg class="icon">
              <use xlink:href="#icon-lock" />
            </svg>Sign In</h2>
        </header>
    
        <form action="" class="login__form" method="POST">
    
          <div>
            <label for="username">Username</label>
            <input type="email"  name="email"  placeholder="Enter Username Here">
          </div>
    
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password Here">
          </div>
    
          <div>
            <input class="button" type="submit" name="login" id="login" value="Sign In">
          </div>
    
        </form>
    
      </div>
    
      <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    
        <symbol id="icon-lock" viewBox="0 0 448 512">
          <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
        </symbol>
    
      </svg>


    
</body>
<script src="app.js"></script>
</html>