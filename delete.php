<?php
ini_set('display_errors', 1);
require_once 'dbc.php';
$dbc = new Db();
$arr =[$_POST['delete']];
$sql = 'delete from content where id=?';
$stmt = $dbc->dbc()->prepare($sql);
$stmt->execute($arr);
header('Location:index.php');