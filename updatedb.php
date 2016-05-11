<?php
include_once './DbConnect1.php';
function createNewPrediction() {
         $response = array();
        $bloodgroup = $_POST["Blood_group"];
        $location = $_POST["Location"];
        $available = $_POST["Available"];
		$username = $_POST["name"];
		$contact = $_POST["Contact_number"];
		
                $db = new DbConnect();
       // mysql query
        $query ="UPDATE Donor_details
SET Blood_group='$bloodgroup',Location='$location',Available='$available',name='$username' WHERE Contact_number='$contact'";
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