<?php
//if (isset($_POST["RegistrationId"]) && isset($_POST["VisitorName"]) && isset($_POST["MeetingTime"])) {
    $regId = $_GET["RegistrationId"];
    $visitorName = $_GET["VisitorName"];
    $meetingTime = $_GET["MeetingTime"];
    $companyName = $_GET["CompanyName"];
    $roomNumber = $_GET["RoomNumber"];

    include_once './GCM.php';
    $gcm = new GCM();
 
    $registration_ids = array($regId);
    $message = array(
    	"meetingTime" => $meetingTime,
    	"visitorName" => $visitorName,
        "companyName" => $companyName,
        "roomNumber" => $roomNumber
    );
 
    $result = $gcm->send_notification($registration_ids, $message);
 
    echo $result;
//}

// include_once 'GCM.php';

// $gcm = new GCM();

// AJ Cellphone: APA91bG3YF55I_-yEW_buaS1mdoczP5_hBCcYEb3eHzpGYtwR7eUUzYrY2o8Dux_nxaOUugJCivUIhAHUs01PmSrCEMvCI2eVh_oYm6JjjXpo17s9CtDHWtAkl89SvX4xMHtxtQRhdLD
    //Sona: APA91bHWkN-Y4vIgAu2-83rkXghwFIwGoW3Olp7WEaTwCHtrjr66oAITKcBhd5OY8uoO6PmP2_HEp0FVXYnuqY00S4wU6BNl6UJkpOPLFdmmDouUtOxNMu4EFte7mK_BNiPZpJxoJPVw
    //AJ Tablet: APA91bHP0XyLusfzlu1M7n0KMxuNQeWHa4vTF00L2qazNZXOMUWm_AO5YQmKzqFCA-pMLfulftVMm7ZZgzf9y4LJ4mltMEVKXx_f9gsM34q6qZ3ELcnN0Y5u9-SFyVjqm1PJO9MpJKuv
    //Davy Cellphone: APA91bFdfIvBui1aHlkdaMBfpS_Gu4HaGmOejjV8UpKXZoI7uF-uG190wuBzwKaMxgZ-BqEDcX2KYBIQ3_KkPJxBg1ktn63zyTpHjt7uMme3yLZ68-c2v-owOJKBz0vbozUVjyeSyz6m
// $message = "Watattops";
// $registration_ids = array($regId);
// $message = array("message" => $message);
// $result = $gcm->send_notification($registration_ids, $message);
// echo $result;
    //http://192.168.1.44:8888/Reception/Android/GoogleCloudMessaging/send_message.php?RegistrationId=APA91bG3YF55I_-yEW_buaS1mdoczP5_hBCcYEb3eHzpGYtwR7eUUzYrY2o8Dux_nxaOUugJCivUIhAHUs01PmSrCEMvCI2eVh_oYm6JjjXpo17s9CtDHWtAkl89SvX4xMHtxtQRhdLD&VisitorName=SonGoku&MeetingTime=12:00&CompanyName=DragonBall&RoomNumber=KaioTemple
    //APA91bG_8FQADbZd70rLYXlGkSNP43Zwz7psv8_oIiwQnhVP_QSb_I_zEb-JTLPp6hgkBC4h6cQ6DFAX3At45HaoK2ajtazKCkLip68y-KrklQwlwWNyVtbzFN3qb7H1LUfHSz7z_G_vs8GL_a9KwlulUj1FjFzqtw
?>