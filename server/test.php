<?php
// Assuming you have a table named 'target_data' with fields 'id', 'name', and 'description'

require('dbcon.php');

$sql = "SELECT * FROM staffs WHERE sfregid=12130";
$result = $con->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Fetch the data and store it in an array
    // $data = $result->fetch_all(MYSQLI_ASSOC);
    $data = mysqli_fetch_array($result);
    echo $data['sfnic'];
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Target Data</title>
</head>
<body>
    <h1>Target Data</h1>



    <!-- <?php if (!empty($data)) : ?>
        <ul>
            <?php foreach ($data as $item) : ?>
                <li>
                    <strong><?php echo $item['sfregid']; ?></strong>: <?php echo $item['sfnic']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No data available.</p>
    <?php endif; ?> -->

    <?php $con->close(); ?>
</body>
</html>
