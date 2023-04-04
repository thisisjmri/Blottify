<?php

namespace fingerprint;
require_once("../core/Database.php");
session_start();
// Get user id from AJAX request
if (isset($_SESSION['enrollee_id'])) {
    var_dump("here");
    $user_id = $_SESSION['enrollee_id'];
    deleteUserDetails($user_id);
} else {
    echo "missing user id parameter";
}

function deleteUserDetails($user_id){
    $myDatabase = new Database();

    // Delete row from users table where id matches $user_id
    $sql_query = "delete from users where id=?";
    $param_type = "i";
    $param_array = [$user_id];
    $affected_rows = $myDatabase->delete($sql_query, $param_type, $param_array);

    // Check if row was successfully deleted
    if ($affected_rows > 0) {
        echo "success";
    } else {
        echo "failed";
    }
}

?>
