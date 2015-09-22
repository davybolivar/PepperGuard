<?php
 
// response json
$json = array();
 
/**
 * Registering a user device
 * Store reg id in users table
 */
if (isset($_POST["UserId"]) && isset($_POST["OwnerName"]) && isset($_POST["MobileDeviceName"]) && isset($_POST["ComputerName"]) && isset($_POST["InternetProtocol"]) && isset($_POST["RegistrationId"])) {
    $uId = $_POST["UserId"];
    $oName = $_POST["OwnerName"];
    $mDeviceName = $_POST["MobileDeviceName"];
    $cName = $_POST["ComputerName"];
    $iProtocol = $_POST["InternetProtocol"];
    $rId = $_POST["RegistrationId"]; // GCM Registration ID
    // Store user details in db
    include_once './db_functions.php';
    include_once './GCM.php';
 
    $db = new DB_Functions();
    $gcm = new GCM();
 
    $res = $db->storeUser($uId, $oName, $mDeviceName, $cName, $iProtocol, $rId);
 
    $registration_ids = array($rId);
    $message = array("product" => "shirt");
 
    $result = $gcm->send_notification($registration_ids, $message);
 
    echo $result;
} else {
    // user details missing
}
?>