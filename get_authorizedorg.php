<?php
include_once './DbConnect1.php';
function get_data(){
    $db = new DbConnect();
    // array for json response of full fixture
    $response = array();
    $response["jresponse"] = array();
    $result = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM authorized_org"); // Select all rows from authorized_org table
    while($row = mysqli_fetch_array($result)){
        $tmp = array();        // temporary array to create single match information
        $tmp["org_name"] = $row["org_name"];
        $tmp["location"] = $row["location"];
        array_push($response["jresponse"], $tmp);
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}
get_data();
?>