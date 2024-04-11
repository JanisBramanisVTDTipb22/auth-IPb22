<?php

echo "hi";

session_start();

$_SESSION["username"] = "creep";
$_SESSION["age"] = "69";

echo "Hi, " . $_SESSION["username"];

session_destroy();