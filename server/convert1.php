<?php
// Replace 'path_to_json_file.json' with the actual path to your JSON file
$jsonFilePath = 'upload/staff-img/unknown.json';

// Read the JSON data from the file
$jsonData = file_get_contents($jsonFilePath);

// Decode the JSON data
$imageData = json_decode($jsonData, true);

// Get the Base64 encoded image data from the JSON
$base64Encoded = $imageData['image'];

// Decode the Base64 data back to binary image data
$imageDataBinary = base64_decode($base64Encoded);

// Replace 'path_to_output_image.jpg' with the desired path and filename for the output image
$outputImagePath = 'upload/stnd-img/unknown.jpg';

// Save the binary image data to a file
file_put_contents($outputImagePath, $imageDataBinary);

echo 'Image file converted and saved.';
?>
