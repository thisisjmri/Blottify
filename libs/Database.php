<?php

class Database extends PDO{
	
	public function __construct(){
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
	}

	// public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
 //        $sth = $this->prepare($sql);
 //        foreach ($array as $key => $value) {
 //            $sth->bindValue("$key", $value);
 //        }
        
 //        $sth->execute();
 //        return $sth->fetchAll($fetchMode);
 //    }

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
            
        $sth->execute();
        
        // Sanitize the fetched data using htmlspecialchars()
        $result_set = array_map(function($row) {
            return array_map('htmlspecialchars', $row);
        }, $sth->fetchAll($fetchMode));
        
        return $result_set;
    }
}

?>