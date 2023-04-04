<?php

namespace fingerprint;
require_once("../core/Database.php");

// Get user id from AJAX request
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    deleteUserDetails($user_id);
} else {
    echo "missing user id parameter";
}

function deleteUserDetails($user_id){
    $myDatabase = new Database();

    // Delete row from users table where id matches $user_id
    $sql_query = "update users set indexfinger = null, middlefinger = null, ringfinger = null, pinkyfinger = null, thumbfinger = null, rthumbfinger = null, rindexfinger = null, rmiddlefinger = null, rringfinger = null, rpinkyfinger = null where id=?";
    $param_type = "i";
    $param_array = [$user_id];
    $affected_rows = $myDatabase->update($sql_query, $param_type, $param_array);

    // Check if row was successfully deleted
    if ($affected_rows > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}

?>
