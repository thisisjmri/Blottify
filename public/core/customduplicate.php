<?php
/**
 * this file uses the enrollment class to
 * enroll users
 * @authors Dahir Muhammad Dahir (dahirmuhammad3@gmail.com)
 * @date    2020-04-18 14:28:39
 */


namespace fingerprint;

require("../core/querydb.php");
require_once("../core/helpers/helpers.php");


if(!empty($_POST["data"])){
    $user_data = json_decode($_POST["data"]);
    $user_id = $user_data->id;
    $index_finger_string_array = $user_data->index_finger;
    $middle_finger_string_array = $user_data->middle_finger;
    $ring_finger_string_array = $user_data->ring_finger;
    $pinky_finger_string_array = $user_data->pinky_finger;
    $thumb_finger_string_array = $user_data->thumb_finger;
    $rthumb_finger_string_array = $user_data->rthumb_finger;
    $rindex_finger_string_array = $user_data->rindex_finger;
    $rmiddle_finger_string_array = $user_data->rmiddle_finger;
    $rring_finger_string_array = $user_data->rring_finger;
    $rpinky_finger_string_array = $user_data->rpinky_finger;

    // this check for duplicate is not necessary, only required if you want to
    // avoid duplicate enrollment of the same finger, also you might have to improve it
    // a bit to make it more robust, considering this is just a proof of concept and we
    // are only checking a single finger
    if (isDuplicate($index_finger_string_array[0]) || isDuplicate($middle_finger_string_array[0]) || isDuplicate($ring_finger_string_array[0]) || isDuplicate($pinky_finger_string_array[0]) || isDuplicate($thumb_finger_string_array[0]) || isDuplicate($rthumb_finger_string_array[0]) || isDuplicate($rindex_finger_string_array[0]) || isDuplicate($rmiddle_finger_string_array[0]) || isDuplicate($rring_finger_string_array[0]) || isDuplicate($rpinky_finger_string_array[0])) {
        echo "Duplicate not allowed!";
    }
    else{
        echo "success";
    }
}
else{
    echo "post request with 'data'2 field required";
}

function isDuplicate($fmd_to_check_string){
    // var_dump($fmd_to_check_string);
    for ($i=0; $i < 5; $i++) { 
        
        $allFmds = json_decode(getAllFmds($i));

        if (!$allFmds){ // there is nothing here, so nothing to do
            return false;
        }

        $enrolled_hand_array = $allFmds;

        $json_response = is_duplicate_fingerprint($fmd_to_check_string, $enrolled_hand_array);
        $response = json_decode($json_response);
        // var_dump($i);
        // var_dump($response);
        if($response){
            // var_dump("true");
            return true;
        }
    }
    // var_dump("false");
    return false;
}
