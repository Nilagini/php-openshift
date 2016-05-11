<?php
include_once './DbConnect1.php';
function createNewPrediction() {
         $response = array();
        $org_name = $_POST["org_name"];
        $location= $_POST["location"];
        
                $db = new DbConnect();
       // mysql query
        $query = "INSERT INTO authorized_org(org_name,location) VALUES('$org_name','$location')";
        $result = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        if ($result) {
            $response["error"] = false;
            $response["message"] = "Prediction added successfully!";
        } else {
            $response["error"] = true;
            $response["message"] = "Failed to add donor_details!";
        }
       // echo json response
    echo json_encode($response);
}
createNewPrediction();
?>