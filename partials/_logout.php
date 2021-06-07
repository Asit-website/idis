<?php
session_start();
echo "loging out you. please wait....";

session_destroy();
header("Location: /forum ")

?>