<?php
ini_set('display_errors', 1);
require_once('dbc.php');
$dbc = new Db();
$content = $dbc->get_message();
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
    <nav class="navbar is-primary " role="navigation" aria-label="main navigation">
        <div class="navbar-item has-text-white">
            一覧画面
        </div>
        <a class="navbar-item has-text-white">
           <span class="js-target"> 新規追加</span>
        </a>
       
    </nav>
    <div class="columns">
        <div class="column"></div>
        <div class="column is-half">
            <div class="notification is-danger js-del-target">
                本当に消去しますか？　<button class="button yes">はい</button><button class="button no">いいえ</button>
            </div>
            <is-danger></is-danger>
            <div class="right">
                <button class=" button is-success js-target is-medium" >新規追加</button>
            </div>
          
            <div class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <!-- Any other Bulma elements you want -->
                    <div class="box " id="mt-target">
                        <form action ="create.php" method="post">
                            <p>タイトル</p>
                            <input type="text" name="title" class="input is-link" required>
                            <p>内容</p>
                            <textarea type="text" name="content" rows="10" class="textarea" required></textarea>
                            <input type="submit" value="送信" class="button is-fullwidth is-dark">
                        </form>
                    </div>
                </div>
                <button class="modal-close is-large" aria-label="close"></button>
            </div> 
                  
  
            <div class="panel">
                <p class="panel-heading">タイトル</p>
                <?php foreach($content as $data) : ?>
                <div class="panel-block">
                    <div class="wrapper">
                        <div class="item item-first">
                             <?php echo Db::h($data['title']) ?>
                        </div>
                        <div class="item item-second">
                            <a href="show.php?id=<?php echo $data['id']?>" class="button is-primary">詳細</a>
                            <a href="edit_form.php?id=<?php echo $data['id']?>" class="button is-link">編集</a> 
                            <button id="<?php echo $data['id'] ?>" class="button is-danger del"><i class="fas fa-trash-alt"></i></button>
                            <form action="delete.php" method="post" class="form<?php echo $data['id'] ?>">
                            <input type="hidden" value="<?php echo $data['id'] ?> "name="delete">
                            <input type="submit" value="消去" class="button is-danger">
                            </form> 
                        </div>
                    </div>                              
                </div>
                <?php endforeach ;?>
            </div>         
        </div>
        <div class="column">
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>