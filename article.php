<?php
require __DIR__ . '/model/sqlQuery.php';

if( isset($_GET['id']) ){
    $article = article_get((int)$_GET['id']);

    if( false === $article ){
        $msg_error = 'Ошибка! Статья не может быть получена';
    }
}
else $msg_error = 'Статья не выбрана';

require __DIR__ . '/view/v_article.php';