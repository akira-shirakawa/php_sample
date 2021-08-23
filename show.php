<?php
ini_set('display_errors', 1);
require_once('dbc.php');
$id = $_GET['id'];
$content = show($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
    <title>Document</title>
</head>
<body>
   <div class="columns">
       <div class="column"></div>
       <div class="column">
        <div class="box">

                <?php echo h($content['content']) ?>
                <?php echo h($content['created_at']) ?>
                <form action="delete.php" method="post">

                <input type="hidden" value="<?php echo $content['id'] ?> "name="delete">
                <input type="submit" value="消去" class="button is-danger">
                </form>
                <a href="index.php">戻る</a>
        </div>
       </div>
       <div class="column"></div>
   </div>
       
       
   
</body>
</html>