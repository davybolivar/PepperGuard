<?php 
$con = mysqli_connect('153.121.39.201','temp','g67r0tw3qb','pepperdb');

$employeeId = $_GET["EmployeeId"];
$registrationId = $_GET["RegistrationId"];
$deviceType = $_GET["DeviceType"];
$deviceName = $_GET["DeviceName"];

// $employeeId = "GEC-15-002";
// $registrationId = "APA91bHWkN-Y4vIgAu2-83rkXghwFIwGoW3Olp7WEaTwCHtrjr66oAITKcBhd5OY8uoO6PmP2_HEp0FVXYnuqY00S4wU6BNl6UJkpOPLFdmmDouUtOxNMu4EFte7mK_BNiPZpJxoJPVw";
// $deviceType = "Mobile";

$response = array();

// $response["Message"]:
// 0 = Error
// 1 = Employee has already registered a device
// 2 = Device successfully registered to database
// 3 = Error registering device

if(!empty($employeeId) && !empty($registrationId) && !empty($deviceType)){
	$getExisting = mysqli_query($con, "SELECT * FROM MeetingNotifierUser WHERE RegistrationId = '$registrationId'");
	$getDeviceName = mysqli_query($con, "SELECT * FROM MeetingNotifierUser WHERE DeviceName = '$deviceName'");

	if(mysqli_num_rows($getExisting)){
		$response["Message"] = 1; // Employee has already registered a device
	}
	elseif(mysqli_num_rows($getDeviceName)){
		$updateDevice = mysqli_query($con, "UPDATE MeetingNotifierUser SET RegistrationId = '$registrationId' WHERE DeviceName = '$deviceName'");

		if($updateDevice){
			$response["Message"] = 2; // Device successfully registered to database
		}
		else{
			$response["Message"] = 3; // Error registering device
		}
	}
	else{
		$registerDevice = mysqli_query($con, "INSERT INTO MeetingNotifierUser(EmployeeId, DeviceType, DeviceName, RegistrationId) VALUES ('$employeeId', '$deviceType', '$deviceName','$registrationId')");

		if($registerDevice){
			$response["Message"] = 2; // Device successfully registered to database
		}
		else{
			$response["Message"] = 3; // Error registering device
		}
	}
}
else{
	$response["Message"] = 0; // Error
}

echo json_encode($response);
//http://localhost:8888/Reception/Android/GoogleCloudMessaging/RegisterDevice.php?EmployeeId=GEC-15-0005&RegistrationId=APA91bHP0XyLusfzlu1M7n0KMxuNQeWHa4vTF00L2qazNZXOMUWm_AO5YQmKzqFCA-pMLfulftVMm7ZZgzf9y4LJ4mltMEVKXx_f9gsM34q6qZ3ELcnN0Y5u9-SFyVjqm1PJO9MpJKuv&MobileDeviceName=Watattops
?>