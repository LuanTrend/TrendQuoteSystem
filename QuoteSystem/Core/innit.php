<?php 
session_start();
require "connection/database.php";
require "classes/functions.php";


// error_reporting(0);

$orders = new orders($db);

$errors = array();

