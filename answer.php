<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
    <center>
    
    <?php 
    $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
    $attempt_qus=$answer['right']+$answer['wrong'];
    ?>
    
    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
  <h2>Quiz Result</h2>                      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Qusetion</th>
        <th><?php echo $total_qus  ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus?></td>
      </tr>
      <tr>
        <td>Right answer</td>
        <td><?php echo $answer['right']; ?> </td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
      <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
      <tr>
        <td>Your Result</td>
        <td>
        <?php

        $per=($answer['right']*100)/($total_qus);
        echo $per."%";

        ?>
        </td>
      </tr>
    </tbody></div>
    <div class="col-sm-2"></div>
  </table>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </center>
</body>
</html>