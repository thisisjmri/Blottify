<?php

namespace fingerprint;

use mysqli;

date_default_timezone_set("Africa/Lagos");

class Database {
    // private const host = "localhost";
    // private const user = "friends";
    // private const password = "Blottify_era123!";
    // private const database = "blottify";
    private const host = "localhost";
    private const user = "root";
    private const password = "";
    private const database = "blottify";
    private $connection;

    function __construct(){
        $this->connection = new mysqli(self::host, self::user, self::password, self::database);
        if (mysqli_connect_errno()) {
            printf("Connection Failed: %s\n",  mysqli_connect_errno());
            exit();
        }
    }

    function getUserInfo($username): array {
        $sql_query = "SELECT * FROM users WHERE username=?";
        $param_type = "s";
        $param_array = [$username];
        $result = $this->select($sql_query, $param_type, $param_array);
        return $result;
    }

    // function select($sql_query, $sql_param_type="", $param_array=array()){
    //     if ($statement = $this->connection->prepare($sql_query)){
    //         if (!empty($sql_param_type) && !empty($param_array)){
    //             $this->bindQueryParams($statement, $sql_param_type, $param_array);
    //         }

    //         $statement->execute();
    //         $sql_query_result = $statement->get_result();

    //         if ($sql_query_result->num_rows > 0){
    //             while ($row = $sql_query_result->fetch_assoc()){
    //                 $result_set[] = $row;
    //             }
    //         }

    //         if (!empty($result_set)){
    //             return $result_set;
    //         }
    //     }
    // }
    
    function select($sql_query, $sql_param_type="", $param_array=array()){
    if ($statement = $this->connection->prepare($sql_query)){
        if (!empty($sql_param_type) && !empty($param_array)){
            $this->bindQueryParams($statement, $sql_param_type, $param_array);
        }

        $statement->execute();
        $meta_data = $statement->result_metadata();
        $fields = $meta_data->fetch_fields();
        $bind_params = array();
        foreach ($fields as $field) {
            $bind_params[] = &$row[$field->name];
        }
        call_user_func_array(array($statement, 'bind_result'), $bind_params);

        $result_set = array();
        while ($statement->fetch()) {
            $result_set[] = array_map('utf8_encode', $row);
        }

        if (!empty($result_set)){
            return $result_set;
        }
    }
}


    function insert($sql_query, $sql_param_type="", $param_array=array()){
        if ($statement = $this->connection->prepare($sql_query)){
            $this->bindQueryParams($statement, $sql_param_type, $param_array);
            $statement->execute();
            $insert_id = $statement->insert_id;
            return $insert_id;
        }
    }

    function delete($sql_query, $sql_param_type="", $param_array=array()){
        if ($statement = $this->connection->prepare($sql_query)){
            $this->bindQueryParams($statement, $sql_param_type, $param_array);
            $statement->execute();
            $affected_rows = $statement->affected_rows;
            return $affected_rows;
        }
    }


    function execute(){
        //pass
    }

    function update($sql_query, $sql_param_type="", $param_array=array()){
        if ($statement = $this->connection->prepare($sql_query)){
            if (!empty($sql_param_type) and !(empty($param_array))){
                $this->bindQueryParams($statement, $sql_param_type, $param_array);
                $statement->execute();
                $statement->store_result();
                return $statement->affected_rows;
            }
        }
        return 0;
    }

    function bindQueryParams($statement, $sql_param_type, $param_array=array()){
        $param_value_reference[] = & $sql_param_type;
        for ($i = 0; $i < count($param_array); $i++){
            $param_value_reference[] = & $param_array[$i];
        }

        call_user_func_array(array($statement, 'bind_param'), $param_value_reference);
    }
}
