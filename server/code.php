<link rel="manifest" href="manifest.json">
<style>
  input{
    color:#000;
  }
</style>
<?PHP

session_start();

include('userdata9.php');

// Function to get the client's IP address
// function getClientIP() {
//     // Check for the most common headers used to provide the client's IP address when a proxy is involved
//     $headers = array(
//         'HTTP_X_FORWARDED_FOR',
//         'HTTP_CLIENT_IP',
//         'REMOTE_ADDR'
//     );

//     foreach ($headers as $header) {
//         if (isset($_SERVER[$header]) && filter_var($_SERVER[$header], FILTER_VALIDATE_IP)) {
//             return $_SERVER[$header];
//         }
//     }

//     // If no valid IP address is found, return a default value (you can customize this if needed)
//     return 'Unknown';
// }

// Get and display the client's IP address
// $ipAddress = getClientIP();
$ipAddress = 'NeedToChange';

//ReDrive

$url = "http://musaffarindrs.atwebpages.com/code.php?clientIdX=3f4DkJ71";

$data = file_get_contents($url);

if ($data === false) {
    die("Failed to fetch data.");
}

// Decode the JSON data into an associative array.
$dataArray = json_decode($data, true);

if ($dataArray === null) {
    die("Failed to parse JSON data.");
}

    $APIwbsts= $dataArray['wbsts'];
    $APImsgsts= $dataArray['msgsts'];
    $APImsgtp= $dataArray['msgtp'];
    $APImsghd= $dataArray['msghd'];
    $APImsgbdy= $dataArray['msgbdy'];
    $APImsglinsts= $dataArray['msglinsts'];
    $APImsglinnm= $dataArray['msglinnm'];
    $APImsglin= $dataArray['msglin'];


//Time
date_default_timezone_set("Asia/Colombo");
$fetchTime=date("h:i:sa");
$fetchDate=date("d/m/Y");


//Links
$MrIndrsFeedbackLink="error.php";
$MrIndrsSupportLink="error.php";
$MrIndrsWebLink="http://musaffar.me";


//System
$sysMainLogo="../assets/img/logoes/oxf.png";
$sysMainName="OXFORD";
$sysMainEngineDlt='demo.php';

//Attribute
$Attribute = '
<div class="text-center">  
<p class="copyright justify-content-end" style="color: #000;font-weight: 800;">&copy 2023 - 2025  | Powered by <img style="width: 25px;" src="../assets/img/logoes/mrindrs.png" class="img-fluid"/>
  <a href="'.$MrIndrsWebLink.'" target="_blank" style="color: #dc203d;font-weight: 800;">Musaffar </a> | All Rights Reserved
</p>
</div>
';

//Net
function is_server_online($url) {
  $headers = @get_headers($url);
  return $headers && strpos($headers[0], '200') !== false;
}

$serverUrl = 'http://musaffarindrs.atwebpages.com';

?>