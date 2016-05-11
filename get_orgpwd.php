<?php
include_once './DbConnect1.php';
function get_data(){
    $db = new DbConnect();
    // array for json response of full fixture
    $response = array();
    $response["jresponse"] = array();
    $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM organization_details"); // Select all rows from donor table
    while($row = mysqli_fetch_array($result)){
        $tmp = array();        // temporary array to create single match information
        $tmp["username"] = $row["username"];
        $tmp["password"] = $row["password"];
        array_push($response["jresponse"], $tmp);
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}
get_data();
?>