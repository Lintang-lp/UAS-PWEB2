<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/login.css');?>" /> 
  <title>Document</title>
  <style>
    .fourth{
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- <h2 class="active"> Masuk </h2> -->
    <!-- <h2 class="inactive underlineHover">Sign Up </h2> -->

    <!-- Icon -->
    <br>
    <div class="fadeIn first">
      <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="50" height="50" alt="User free icon" title="User free icon">
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>

    <!-- Login Form -->
    <form method="post" action="C_login/aksi_login" role="form">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" require>
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" require>
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>