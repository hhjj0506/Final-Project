<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/head.php");
    if(authenticateUser(true)){
        require_once(__DIR__ . "/test.php");
        require_once(__DIR__ . "/chat.php");
    }else{
        echo "You have to login to view this page.";
    }
    require_once(__DIR__ . "/view/foot.php");