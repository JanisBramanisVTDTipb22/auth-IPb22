<?php
session_start();

echo "Dashboard ";  

echo "Hi, " . ($_SESSION["username"] ?? "guest");