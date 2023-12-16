<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "embrace";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql57.unoeuro.com";
    $DB_NAME = "amaliealiceandersen_dk_db";
    $DB_USER = "amaliealiceandersen_dk";
    $DB_PASS = "h3zyrH9w6mBbeFER5kDn";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);