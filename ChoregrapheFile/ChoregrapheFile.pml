<?xml version="1.0" encoding="UTF-8" ?>
<Package name="ChoregrapheFile" format_version="4">
    <Manifest src="manifest.xml" />
    <BehaviorDescriptions>
        <BehaviorDescription name="behavior" src="." xar="behavior.xar" />
        <BehaviorDescription name="behavior" src="End Application" xar="behavior.xar" />
        <BehaviorDescription name="behavior" src="Emergency Mode" xar="behavior.xar" />
    </BehaviorDescriptions>
    <Dialogs />
    <Resources>
        <File name="Config" src="GoogleCloudMessaging/Config.php" />
        <File name="db_connect" src="GoogleCloudMessaging/db_connect.php" />
        <File name="db_functions" src="GoogleCloudMessaging/db_functions.php" />
        <File name="GCM" src="GoogleCloudMessaging/GCM.php" />
        <File name="register" src="GoogleCloudMessaging/register.php" />
        <File name="RegisterDevice" src="GoogleCloudMessaging/RegisterDevice.php" />
        <File name="send_message" src="GoogleCloudMessaging/send_message.php" />
    </Resources>
    <Topics />
    <IgnoredPaths>
        <Path src="html/libs/qi.js" />
        <Path src="html/css" />
        <Path src="ChoregrapheFile.pml" />
        <Path src="html" />
        <Path src="html/loading.html" />
        <Path src="manifest.xml" />
        <Path src=".metadata" />
        <Path src="html/css/.DS_Store" />
        <Path src="html/scripts/Function.js" />
        <Path src=".DS_Store" />
        <Path src="html/css/images/tile.png" />
        <Path src="html/scripts" />
        <Path src="html/libs" />
        <Path src="html/Index.html" />
        <Path src="html/scripts/.DS_Store" />
        <Path src="html/.DS_Store" />
        <Path src="html/css/loading.css" />
        <Path src="html/css/images" />
    </IgnoredPaths>
</Package>
