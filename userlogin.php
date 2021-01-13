
<html>
<head>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(img/pic.jpg);
    background-size: cover;
    background-position:center;
    font-family: sans-serif;
}
.loginbox{
    width: 400px;
    height: 500px;
    background: #000;
    color: #fff;
    top: 15%;
    left: 36%;
    position: absolute;
    transform translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.user{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;

}
.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #008000;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffffff;
    color: #000;
}
.loginbox a{
     text-decoration:none;
     font-size: 12px;
     line-height: 20px;
     color: darkgrey;
}
.loginbox a:hover
{
   color: #0000FF;
}


</style>
<title>User Login</title>
<body>
   
     
    <div class="loginbox">
    
    <img src="img/user.png" class="user">
    <h1>User Login</h1>
  
    
    <form role="form" action="signin_sub.php" method="post">
    <p>Username</p>
    <input type="text" name="e" id="email" placeholder="Enter email">

    <p>Password</p>
    <input type="password" name="p" id="pwd" placeholder="Enter password">

    <input type="submit" name="" value="Login">
    
    <?php require './fb_init.php' ?>
    <?php if(isset($_SESSION['access_token'])):?>
    <a href="logout.php">Logout</a>
    <?php else: ?>
    <center><a href="<?php echo $login_url;  ?>">Login With Facebook</a> <br> <br>
   </center>
    <?php endif; ?>
    
    

    <a href="create.php">Don't have an account?</a>
    
    

    </form>
     
    </div>
</body>
</head>
</html>