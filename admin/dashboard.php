<?php
include "../class/admin.php";
$cat=new admin;
$catagory=$cat->cat_shows();
//print_r($catagory);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/dashboard/">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a  class="navbar-brand" href="#">Quiz App</a> 
        </div>
        
          <form class="navbar-form navbar-right">
            
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="que.php">View Questions</a></li>
            <li><a href="ans.php">View Student Result</a></li>
  
          </ul>
          
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <h3> Add Question </h3>


          
          <div class="table-responsive">
            <table class="table table-striped">
            
  <form method="post" action="add_quiz.php">
    <div class="form-group">
      <label for="text">Question</label>
      <input type="text" class="form-control" name="qus"  placeholder="Enter question">
    </div>

    <div class="form-group">
      <label for="text">Option:1</label>
      <input type="text" class="form-control" name="op1" placeholder="Enter option:1">
    </div>

    <div class="form-group">
      <label for="text">Option:2</label>
      <input type="text" class="form-control" name="op2" placeholder="Enter option-2">
    </div>

    <div class="form-group">
      <label for="text">Option:3</label>
      <input type="text" class="form-control" name="op3"  placeholder="Enter option-3">
    </div>

    <div class="form-group">
      <label for="text">Option:4</label>
      <input type="text" class="form-control" name="op4"  placeholder="Enter option-4">
    </div>
  
    <div class="form-group">
      <label for="text">Answer</label>
      <input type="text" class="form-control" name="ans"  placeholder="Enter answer">
    </div>
    <div class="form-group">
    
    
    <select class="form-control" id="sell" name="cat">
    <option value="">Choose Catagory</option>
    <?php
    foreach($catagory as $c)
    {
      echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
    }

    ?>


    
    </select>
    
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button><br>
  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
