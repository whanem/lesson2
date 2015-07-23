<!doctype html>
<html lang="ru">
<head>
    <meta charset="WINDOWS-1251">
    <title>Редактирование статьи</title>
</head>
<body>
    <p><a href="index.php">...на главную</a> | <a href="article.php?id=<?php echo $_GET['id']?>">назад в статью</a></p>
    <p>Редактирование статьи</p>
    <p class="msg-error"><?php echo $msg_error;?></p>
    <form action="edit.php" method="POST">
        <p>Название статьи:</p>
        <textarea name="title" id="text" cols="90" rows="2"><?php echo $article[0]['title'];?></textarea>
        <p>Содержимое статьи:</p>
        <textarea name="article" id="" cols="90" rows="20" ><?php echo $article[0]['article'];?></textarea>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <p><input type="submit" value="Сохранить изменения"/></p>
    </form>
</body>
</html>