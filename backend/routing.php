<?php

$user_link = parse_url($_SERVER['REQUEST_URI'])["path"];

switch($user_link){

    case "/":
        require("views/home.php");
        break;
    case "/register":
        require("views/register.php");
        break;
    case "/update":
        require("views/update.php");
        break;
    case "/information":
        require("views/information.php");
        break;
    case "/api/login":
        require("backend/API/login.php");
        break;
    default:
        http_response_code(404);
        break;
        
}
?>