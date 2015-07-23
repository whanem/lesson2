<?php
require __DIR__ . '/sqlQuery.php';
require __DIR__ . '/../function/article_preview.php';

abstract class Articles{
    public $articles;
    protected $msg_error;
    protected $lenght;
}

class News extends Articles{
    function viewNews(){
        $this->articles = articles_sql_query();

        if( false === $this->articles )
            $this->msg_error = 'Статьи не могут быть получены';
        else
        {
            $this->lenght = 600;
            $this->articles = article_preview( $this->articles, $this->lenght);
        }
    }
}