<?php

//testing ( uncomment )
require_once("backend/start.php");
$_SESSION["CardID"] = 123456789;


require("backend/routing.php");
require("backend/database/create_data.php");

?>