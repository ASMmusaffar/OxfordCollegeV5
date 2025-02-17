<?php

require('dbcon.php');

// SQL query to get the row count
$sql = "SELECT COUNT(*) as total FROM staffs WHERE sfdatastatus='1'";
$result = $con->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();

    // Get the row count from the "total" column
    $rowCount = $row['total'];
    $idIndex=$rowCount+1;
    $idIndexMain=sprintf("%02d", $idIndex);
    
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>
