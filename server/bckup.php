<?PHP
// include('dbcon.php');

// $tableName = "staffs";
// $backupFile = "bckup/" . $tableName . "_" . date("Ymd_His") . ".sql";
// $query = "SELECT * INTO OUTFILE '$backupFile' FROM $tableName";

// if ($con->query($query) === TRUE) {
//     echo "Table backup created successfully.";
// } else {
//     echo "Error creating table backup: " . $con->error;
// }
// $con->close();



// Replace these variables with your database details
$host = 'localhost';
$username = 'AFRIDEEN-DTBS13';
$password = 'w3SRhUWaMGeg)reo';
$database = 'mrindrs/dsys/oxf13/01';

// The path where you want to save the backup file
$backupFilePath = 'bckup';

// Use the mysqldump command through PHP
$command = "mysqldump --host=$host --user=$username --password=$password $database > $backupFilePath";
exec($command, $output, $returnVar);

if ($returnVar === 0) {
    echo 'Backup successful.';
} else {
    echo 'Backup failed.';
}

?>