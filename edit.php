<?php
require __DIR__ . '/model/sqlQuery.php';

if( isset($_GET['id']) ){
    $article = article_get((int)$_GET['id']);

    if( false === $article ){
        $msg_error = 'Ошибка! Статья не может быть получена для редактирования';
    }
}
elseif( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $_GET['id'] = $_POST['id'];
    if( $_POST['title'] and $_POST['article'] ){
        $sending_status = article_update($_POST['id'], $_POST['title'], $_POST['article']);
        if( $sending_status )
            $msg_error = 'Статья успешно изменена';
        else $msg_error = 'Статья не может быть сохранена';
    }
    else {
        $article[0]['title'] = $_POST['title'];
        $article[0]['article'] = $_POST['article'];
        $msg_error = 'Статья не добавлена! НАЗВАНИЕ и СОДЕРЖИМОЕ должно быть заполнено';
    }
}
else $msg_error = 'Статья для редактирования не выбрана';

require __DIR__ . '/view/v_edit.php';