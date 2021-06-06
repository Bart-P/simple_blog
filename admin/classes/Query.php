<?php

class Query {

##### READ QUERIES #####    

    public static function query_where_string( string $dbname, string $page_name, int $limit=0 )
    {
        $sql = 'SELECT * FROM ' . $dbname . ' WHERE name=:name';
        if ( $limit ) $sql . ' LIMIT=' . $limit; 
        $stmt = Core::getInstance()->db->prepare($sql);
        $stmt->bindParam(':name', $page_name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function query_all( string $dbname )
    {
        $sql = 'SELECT * FROM ' . $dbname;
        $stmt = Core::getInstance()->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}


