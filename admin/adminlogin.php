
<html>
<head>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(aback.jpg);
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

.btn{
    border: none;
    outline: none;
    height: 40px;
    width:150px;
    background: #0000FF;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    margin-left: 90px;
    margin-top:20px;
}
.btn:hover{
    cursor: pointer;
    background: #ffffff;
    color: #000;
}





</style>
<title>User Login</title>
<body>
   
     
    <div class="loginbox">
    
    <img src="admin.png" class="user">
    <h1>Admin Login</h1>
  
    
    <form role="form" action="dashboard.php" method="post">
    <p>Username</p>
    <input type="text" name="e" id="email_feild" placeholder="Enter email" >

    <p>Password</p>
    <input type="password" name="p" id="password_feild" placeholder="Enter password" >

    <button onclick="login() " class="btn btn-primary">Login</button>
    
    

    </form>
     
    </div>

    <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyB-LYOj6xH9TTnJP6VvOz7XTdIM5-c-BcY",
    authDomain: "adminlogin-37abe.firebaseapp.com",
    projectId: "adminlogin-37abe",
    storageBucket: "adminlogin-37abe.appspot.com",
    messagingSenderId: "254325009184",
    appId: "1:254325009184:web:fe1de1dfb31a355ff84545",
    measurementId: "G-X9WVNQVD48"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="index.js"></script>
</body>
</head>
</html>