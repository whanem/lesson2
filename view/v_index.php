<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сайт новостей</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <p><a href="add.php">Добавить статью</a></p>
    <p class="msg-error"><?php echo $msg_error;?></p>

    <?php if( $news->articles ) foreach( $news->articles as $article):?>
    <div class="article">
        <p class="article_title"><a href="<?php echo 'article.php?id=' . $article['id_article'];?>"><?php echo $article['title']?></a></p>
        <p class="article_preview"><?php echo $article['article']?>... <a href="<?php echo 'article.php?id=' . $article['id_article'];?>"> читать далее</a></p>
    </div>
    <?php endforeach;?>
</body>
</html>