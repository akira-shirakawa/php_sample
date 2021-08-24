<?php
require_once 'dbc.php';
$arr =[$_POST['title'],$_POST['content'],$_POST['id']];
$sql = 'update content set title=?,content=? where id=?';

$stmt = dbc()->prepare($sql);
$stmt->execute($arr);
header('Location:index.php');
