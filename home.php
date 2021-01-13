<?php
include ("class/users.php");

$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(img/home1.jpg);
    background-size: cover;
    background-position:center;
    font-family: sans-serif;
}


</style>



</head>
<body>

<div class="container">
  <h2>Quiz</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
   
    <li style="float:right" ><a href="userlogin.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active"> 
    <br>
    
    <center> <button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Click to Start</button>
</center>

<div class="col-sm-4"></div>
<div class="col-sm-4"><br>
<div id="select" class="tab-pane fade">




<form  action="que_show.php" method="post"> 
<select class="form-control" id="" name="cat">
<option>Select Title</option>
<?php
 $profile->cat_shows();
 foreach($profile->cat as $catagory)
 {
     
 ?>
    <option value="<?php echo $catagory['id']; ?>"> <?php echo $catagory['cat_name']; ?></option>
    
    <?php
     }

     ?>
  </select><br>
  <center><input type="submit" value="submit" class="btn btn-primary"> </center>


  </form>
</div>
</div>
</div>
<div class="col-sm-4"></div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      
      <table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
				<th>ID</th>
				<th>Name</th>
				<th>email</th>
				


           

                

			</tr>
			<?php
          foreach($profile->data as $prof)
          { ?>
			<tr class="text-center">

				<td class="text-white"><?php echo $prof['id']; ?></td>
				<td class="text-white"><?php echo $prof['name']; ?></td>
				<td class="text-white"><?php echo $prof['email']; ?></td>
				
			</tr>

			<?php
		}
		?>
		
		</table>

       








      
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
