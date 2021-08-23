<?php
ini_set('display_errors', 1);

require_once 'dbc.php';
$arr =[$_POST['delete']];
$sql = 'delete from content where id=?';
$stmt = dbc()->prepare($sql);
$stmt->execute($arr);
header('Location:index.php');