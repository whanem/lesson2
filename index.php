<?php
require __DIR__ . '/model/ViewNews.php';

$news = new News();
$news->viewNews();

require __DIR__ . '/view/v_index.php';