<?PHP
session_start();
require 'dbcon.php';
// require 'code.php';
if(isset($_POST['login'])){
    $file=fopen("logs/baseLogs.php","a");
    fwrite($file, "LogInAttempted => ");
    fwrite($file, $fetchTime." [");
    fwrite($file, $ipAddress."] [");
    fwrite($file, $_POST['name_login']."]\n");
    fclose($file);
    $name_login = mysqli_real_escape_string($con, $_POST['name_login']);
    $query="SELECT * FROM staffs WHERE sfstatus='active' AND sfdatastatus='1' AND sfadmin='101' AND sfregid='$name_login'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $admin)
            {
                if($admin['sfregid']==$_POST['name_login'] && $admin['sfpswrd']==$_POST['pass_login']){
                    echo $suitversion;
                    $_SESSION['loginAuth'] = "1212";
                    $_SESSION['main_user'] = $_POST['name_login'];
                    header("Location: check.php");
                    exit(0);
                }
                else{ 
                    $_SESSION['message'] = "Check your Username & Password!!!";
                    $_SESSION['messagetype'] = "alert-danger";
                    header("Location: ../index.php");
                    exit(0);
                }
            }
    }
    else{ 
        $_SESSION['message'] = "Check your Username & Password!";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: ../index.php");
        exit(0);
    }

}
else{ echo "nope"; }



?>