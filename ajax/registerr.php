<?php
require 'init.php';
$done = false;
if(isset($_POST['username'], $_POST['userjob']))
{
  $data = [
    'name' => $_POST['username'],
    'job' => $_POST['userjob']
  ];
  $done = true;
}
echo json_encode(['success' => $done]);
