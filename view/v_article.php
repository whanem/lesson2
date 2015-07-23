<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $article[0]['title']?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <p><a href="index.php">...назад на главную</a></p>
    <p><a href="edit.php?id=<?php echo $article[0]['id_article']?>">Редактировать статью</a> |
        <a href="delete.php?id=<?php echo $article[0]['id_article']?>">Удалить статью</a></p>
    <p class="msg-error"><?php echo $msg_error?></p>
    <p class="article_title"><?php echo $article[0]['title']?></p>
    <p><?php echo $article[0]['article']?></p>
</body>
</html>
