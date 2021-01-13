<?php
session_destroy();
unset($_SESSION['access_token']);
header("Location:userlogin.php");