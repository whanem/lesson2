<?php
class DB{
    function __construct(){
        $login = 'root';
        $password = '';
        $server = 'localhost';
        $db_name = 'Site_News';

        mysql_connect($server, $login, $password);
        mysql_select_db($db_name);
    }
    function sql_insert($query){
        mysql_query($query);
        $sql_error = mysql_error();

        if( strlen($sql_error) == 0  )
            return true;
        else return false;
    }
    function sql_query($query){
        $data_DB = [];
        $sql_query = mysql_query($query);

        while( false !== $q = mysql_fetch_assoc($sql_query) ){
            $data_DB[] = $q;
        }
        $sql_error = mysql_error();
        if( strlen($sql_error) == 0  )
            return $data_DB;
        else return false;
    }
    function sql_update($query){
        $sql_query = mysql_query($query);

        $sql_error = mysql_error();
        if( strlen($sql_error) == 0  )
            return $sql_query;
        else return false;
    }
    function sql_delete($query){
        mysql_query($query);

        $sql_error = mysql_error();
        if( strlen($sql_error) == 0  )
            return true;
        else return false;
    }

}
