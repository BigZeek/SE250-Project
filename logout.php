<?php

session_start();

//Destroy session, unset form data
session_unset();

session_destroy();

//Force revalidation
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

//Redirect to login page
header("Location: index.html");

?>