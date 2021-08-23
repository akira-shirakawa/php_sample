<?php
require_once 'dbc.php';
$arr =[$_POST['title'],$_POST['content']];
$sql = 'insert into content(title,content)values(?,?)';
$stmt = dbc()->prepare($sql);
$stmt->execute($arr);
header('Location:index.php');

