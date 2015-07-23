<?php
require __DIR__ . '/model/sqlQuery.php';

if( isset($_GET['id']) ){
    $status_removal = article_delete($_GET['id']);

    if( $status_removal )
        $msg_error = 'Статья успешно удалена';
    else $msg_error = 'Ошибка удаления статьи';
}
else $msg_error = 'Статья для удаления не выбрана';

require __DIR__ . '/view/v_delete.php';