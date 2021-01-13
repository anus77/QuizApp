<?php
include("class/users.php");
$register=new users;
extract($_POST);

$query="insert into sign values ('','$n','$e','$p')";
if($register->signup($query))
{
    $register->url("userlogin.php?run=sucsess");
}
?>
