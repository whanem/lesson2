<?php
require __DIR__ . '/../function/DB.php';


function article_sql_add($title, $article){
    $DB = new DB();

    $query = 'INSERT INTO News
            (title, article)
            VALUES
            ("' . $title . '", "' . $article . '")';
    $sql_query = $DB->sql_insert($query);
    return $sql_query;
}

function articles_sql_query(){
    $DB = new DB();

    $query = 'SELECT * FROM News';

    $query = $DB->sql_query($query);
    if( false !== $query )
        return $query;
    else return false;
}

function article_get($id_article){
    $DB = new DB();

    $query = 'SELECT * FROM News
              WHERE
              id_article = "'. $id_article .'"';

    $query = $DB->sql_query($query);
    if( false !== $query )
        return $query;
    else return false;
}
function article_update($id, $title, $article){
    $DB = new DB();

    $query = 'UPDATE News SET
              title = "'. $title .'", article = "'. $article .'"
              WHERE id_article = "'. $id .'"';

    $query = $DB->sql_update($query);
    if( false !== $query )
        return true;
    else return false;
}
function article_delete($id_article){
    $DB = new DB();

    $query = 'DELETE FROM News WHERE id_article = "'. $id_article .'"';

    $query = $DB->sql_delete($query);
    if( false !== $query )
        return true;
    else return false;

}