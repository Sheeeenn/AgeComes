<?php
require("backend/start.php");
session_unset();
session_destroy();

// Redirect the user to the login page or home page
header("Location: /"); // Or replace with your desired redirect page
exit();
?>
