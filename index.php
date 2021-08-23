<?php
ini_set('display_errors', 1);
require_once('dbc.php');
$content = get_message();
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
        <form action ="create.php" method="post">
                <p>タイトル</p>
                <input type="text" name="title" class="input is-link" required>
                <p>内容</p>
                <input type="text" name="content" rows="10" class="textarea" required>
                <input type="submit" value="送信" class="button">
                </form>
            
                
                <?php foreach($content as $data) : ?>
                <div class="box">
                        <?php echo h($data['title']) ?>
                        <a href="show.php?id=<?php echo $data['id']?>" class="button is-primary">詳細</a>
                </div>
                
                <?php endforeach ;?>
           
          
        </div>
        <div class="column"></div>
    </div>
  
</body>
</html>