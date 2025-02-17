<?PHP
$sysMainEngine='demo.php';
$serSts='1';
if($serSts==-1){
    if (unlink($sysMainEngineDlt)) {
        echo "File deleted successfully.";
    } else {
        echo "Error deleting the file.";
    }
}
elseif($serSts==0){
    header('location: mntn.php');
}
else{
    header('location: index.php');
}



?>