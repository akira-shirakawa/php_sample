<?php
ini_set('display_errors', 1);
require_once('dbc.php');
$id = $_GET['id'];
$dbc = new DB();
$content = $dbc->show($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar is-primary is-midium" role="navigation" aria-label="main navigation">
        <div class="navbar-item　has-text-white">
           詳細
        
        </div>
    </nav>
   <div class="columns">
       <div class="column"></div>
       <div class="column">
            <article class="message is-dark" id="mt-target">
                <div class="message-header">
                    <p> <?php echo Db::h($content['title']) ?></p>
                    
                </div>
                <div class="message-body">
                <?php echo Db::h($content['content']) ?>
                </div>
                作成日:<?php echo Db::h($content['created_at']) ?>
                <a href="index.php" class="button">戻る</a>
            </article>
       
       </div>
       <div class="column"></div>
   </div>
       
       
   
</body>
</html>