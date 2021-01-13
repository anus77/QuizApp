<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz App</title>
<style>
@import: url(https://fonts.googleapis.com/css?family=Roboto+Condensed);
body {
  font-family: 'Roboto Condensed', sans-serif;
  height: 100%;
  background: url(img/done2.jpg);
  background-size: cover;
  background-position:center;
  color: #fff;
  text-transform: uppercase;
}
.container {
  text-align: center;
  
}
h1 {
  margin-left: 30px;
  margin-bottom: 50px;
}
.button {
  width: 170px;
  padding-top: 30px;
  padding-bottom: 30px;
  text-align: center;
  color: #000;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 30px;
  margin-bottom: 30px;
  cursor: pointer;
  display: inline-block;
}



.button-2 {
  color: #fff;
  border: 3px solid #778899;
  background-image: -webkit-linear-gradient(30deg,#778899 50%, transparent 50%);
  background-image: linear-gradient(30deg, #778899 50%, transparent 50%);
  background-size: 500px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
}
.button-2:hover {
  background-position: 100%;
  color: #778899;
}
.button-3 {
  color: #fff;
  border: 3px solid #778899;
  background-image: -webkit-linear-gradient(30deg, #778899 50%, transparent 50%);
  background-image: linear-gradient(30deg, #778899 50%, transparent 50%);
  background-size: 500px;
  background-repeat: no-repeat;
  background-position: 0%;
  -webkit-transition: background 300ms ease-in-out;
  transition: background 300ms ease-in-out;
  margin-top: 250px;
}
.button-3:hover {
  background-position: 100%;
  color: #778899;
}

*{
  padding:0;
  margin:0;
  font-family: sans-serif;

}
.text1{
  color:#2F3234;
  font-size: 50px;
  font-weight: 700;
  letter-spacing:8px;
  margin-bottom: 20px;
  margin-top:15px;
  position: relative;
  animation: text 3s 1;
  margin-top: px;

}

@keyframes text {
  0%{
    color:green;
    margin-bottom: -40px;

  }
  85%{
    letter-spacing: 8px;
    margin-bottom: -40px;
  }
}

</style>
</head>
<body>
  

<div class="container" id="con">
  <h1 class="text1" >Welcome to Quiz App</h1>  
  
  

  <button onclick="window.location.href='admin/adminlogin.php'" class="button button-2">Login as admin</button>
  <button onclick="window.location.href='userlogin.php'" class="button button-3">Login as user</button>

</div>


</body>
</html>