<?php
// Replace 'path_to_image' with the actual path to your image file
$imagePath = 'upload/staff-img/unknown.jpeg';

// Read the image file
$imageData = file_get_contents($imagePath);

// Encode the image data as Base64
$base64Encoded = base64_encode($imageData);

// Create a JSON structure
$jsonData = array(
    'image' => $base64Encoded,
);

// Replace 'path_to_json_file.json' with the desired path and filename for the JSON file
$jsonFilePath = 'upload/staff-img/unknown.json';

// Write the JSON data to a file
file_put_contents($jsonFilePath, json_encode($jsonData));

echo 'Image converted and saved as a JSON file.';
?>
