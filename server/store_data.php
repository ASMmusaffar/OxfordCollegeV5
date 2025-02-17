<?php
// Replace this URL with your online server's URL.
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

// Now, $dataArray contains the data fetched from the online server.
print_r($dataArray);


    $APIwbsts= $dataArray['wbsts'];
    $APImsgsts= $dataArray['msgsts'];
    $APImsgtp= $dataArray['msgtp'];
    $APImsghd= $dataArray['msghd'];
    $APImsgbdy= $dataArray['msgbdy'];
    $APImsglinsts= $dataArray['msglinsts'];
    $APImsglinnm= $dataArray['msglinnm'];
    $APImsglin= $dataArray['msglin'];

?>
