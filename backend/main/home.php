<?php

require("backend/start.php");

if(isset($_SESSION["CardID"])){
    header("location: /dashboard");
}
?>