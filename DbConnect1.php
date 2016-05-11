<?php
class DbConnect {    
    private $conn;
    function __construct() {
        
        // connecting to database
        $this->connect();
    }    
    function __destruct() {
        
        $this->close();
    }
    function connect() {        
        include_once dirname(__FILE__) . './Config1.php';
        $this->conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USERNAME,  DB_PASSWORD)) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
       // get host name, username and password from Config1.php file
     
        ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_NAME'))) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); // get database name from Config.php
        
        return $this->conn; // return connection resource
    }   
     // Close function   
    function close() {
        // close db connection
        ((is_null($___mysqli_res = mysqli_close($this->conn))) ? false : $___mysqli_res);
    }
}
?>