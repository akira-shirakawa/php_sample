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
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
         <span class="css-big">Navbar</span><span class="css-big">編集</span>
    </div>
   <div class="columns">
       <div class="column"></div>
       <div class="column">
        <div class="box">
        <form action ="edit.php" method="post">
            <p>タイトル</p>
            <input type="text" name="title" class="input is-link" value="<?php echo $content['title'] ?>"required>
            <p>内容</p>
            <textarea type="text" name="content" rows="10" class="textarea" required><?php echo $content['content'] ?></textarea>
            <input type="hidden" value="<?php echo $content['id'] ?>" name="id">
            <input type="submit" value="送信" class="button is-fullwidth is-dark">
        </form>
           
                <a href="index.php">戻る</a>
        </div>
       </div>
       <div class="column"></div>
   </div>
       
       
   
</body>
</html>