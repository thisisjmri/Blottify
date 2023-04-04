<?php
namespace fingerprint;
require_once("../core/Database.php");

function setUserFmds($user_id, $index_finger_fmd_string, $middle_finger_fmd_string){
    $myDatabase = new Database();
    $sql_query = "select * from users where id=?";
    $param_type = "i";
    $param_array = [$user_id];
    $fmds = $myDatabase->select($sql_query, $param_type, $param_array);
    $counter =0;
    $sql_query1;
    // iterate over the result set
    foreach ($fmds as $fmd) {
        if (is_null($fmd['indexfinger'])) {
            $counter=1;
        } 
        else if (is_null($fmd['ringfinger'])) {
            $counter=2;
        } 
        else if (is_null($fmd['thumbfinger'])) {
            $counter=3;
        }
        else if (is_null($fmd['rindexfinger'])) {
            $counter=4;
        }
        else if (is_null($fmd['rringfinger'])){
            $counter=5;
        }
    }

    if($counter==1){
        $sql_query1 = "update users set indexfinger=?, middlefinger=? where id=?";
    }
    else if($counter==2){
        $sql_query1 = "update users set ringfinger=?, pinkyfinger=? where id=?";
    }
    else if($counter==3){
        $sql_query1 = "update users set thumbfinger=?, rthumbfinger=? where id=?";
    }
    else if($counter==4){
        $sql_query1 = "update users set rindexfinger=?, rmiddlefinger=? where id=?";
    }
    else if($counter==5){
        $sql_query1 = "update users set rringfinger=?, rpinkyfinger=? where id=?";
    }

    $param_type1 = "sss";
    $param_array1 = [$index_finger_fmd_string, $middle_finger_fmd_string, $user_id];
    $affected_rows = $myDatabase->update($sql_query1, $param_type1, $param_array1);

    if($affected_rows > 0){
        return "success";
    }
    else{
        return "failed in querydb";
    }
}

function getUserFmds($user_id, $counter){
    $myDatabase = new Database();
    $sql_query;
    if($counter==1){
        $sql_query = "select indexfinger, middlefinger from users where id=?";
    }
    else if($counter==2){
        $sql_query = "select ringfinger as indexfinger, pinkyfinger as middlefinger from users where id=?";
    }
    else if($counter==3){
        $sql_query = "select thumbfinger as indexfinger, rthumbfinger as middlefinger from users where id=?";
    }
    else if($counter==4){
        $sql_query = "select rindexfinger as indexfinger, rmiddlefinger as middlefinger from users where id=?";
    }
    else{
        $sql_query = "select rringfinger as indexfinger, rpinkyfinger as middlefinger from users where id=?";
    }
    
    $param_type = "i";
    $param_array = [$user_id];
    $fmds = $myDatabase->select($sql_query, $param_type, $param_array);
    return json_encode($fmds);
}

function getUserDetails($user_id){
    $myDatabase = new Database();
    $sql_query = "select username, fullname from users where id=?";
    $param_type = "i";
    $param_array = [$user_id];
    $user_info = $myDatabase->select($sql_query, $param_type, $param_array);
    return json_encode($user_info);
}

function getAllFmds($i){
    $myDatabase = new Database();
    $sql_query;
    if($i==0){
        $sql_query = "select indexfinger, middlefinger from users where indexfinger != ''";
    }
    else if($i==1){
        $sql_query = "select ringfinger as indexfinger, pinkyfinger as middlefinger from users where indexfinger != ''";
    }
    else if($i==2){
        $sql_query = "select thumbfinger as indexfinger, rthumbfinger as middlefinger from users where indexfinger != ''";
    }
    else if($i==3){
        $sql_query = "select rindexfinger as indexfinger, rmiddlefinger as middlefinger from users where indexfinger != ''";
    }
    else if($i==4){
        $sql_query = "select rringfinger as indexfinger, rpinkyfinger as middlefinger from users where indexfinger != ''";
    }
    
    $allFmds = $myDatabase->select($sql_query);
    return json_encode($allFmds);
}