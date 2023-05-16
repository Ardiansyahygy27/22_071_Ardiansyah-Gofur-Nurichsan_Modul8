<?php

session_start();
unset($_SESSION['status']);
unset($_SESSION['username']);

//atau

session_destroy();

header("location: login.php");