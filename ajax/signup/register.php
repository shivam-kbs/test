<?php
require 'connection.php';
$done = false;
if(isset($_POST['username'], $_POST['email']  $_POST['password']))
{
  $signup = [
    'username' => $_POST['username'],
    'email' => $_POST['email']
    'password' => $_POST['passwod']
  ];
  $done = true;
}
echo json_encode(['success' => $done]);