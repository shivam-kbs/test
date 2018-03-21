<?php

$name = $_POST['name'];

$arr = ['content' => 'lorasdasdem text', 'name' => $name];

echo json_encode($arr);