<?php

//Logout the user
require_once(__DIR__ . "/../model/config.php");

unset($_SESSION["authenticated"]);

session_destroy();
header("Location: " . $path . "home.php");
