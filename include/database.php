<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'students';

$db = mysqli_connect($servername,$username,$password,$dbname);

if(!$db)
{
    echo "not connected";
}