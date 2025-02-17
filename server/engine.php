<?PHP

require 'code.php';
require 'dbcon.php';

//InsertStudents
if(isset($_POST['student_submit'])){
   
    date_default_timezone_set("Asia/Colombo");
    $addimgtime=date("his");
    $file = $_FILES["stimg"]["name"];

    if(empty($file)){
        $newnameimg="unknown.jpeg";

    }
    else{
        $info = pathinfo($_FILES['stimg']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newnameimg = $addimgtime.'.'.$ext; 
        $tmp_img_name=$_FILES['stimg']['tmp_name'];
        $folder='upload/stnd-img/';
        move_uploaded_file($tmp_img_name,$folder.$newnameimg);
    }


    $stnamef = mysqli_real_escape_string($con, $_POST['stnamef']);
    $batfcname = mysqli_real_escape_string($con, $_POST['batfcname']);
    $stnameini = mysqli_real_escape_string($con, $_POST['stnameini']);
    $stattr = mysqli_real_escape_string($con, $_POST['stattr']);
    $stdob = mysqli_real_escape_string($con, $_POST['stdob']);
    $stgen = mysqli_real_escape_string($con, $_POST['stgen']);
    $stnic = mysqli_real_escape_string($con, $_POST['stnic']);
    $stmail = mysqli_real_escape_string($con, $_POST['stmail']);
    $steducen = mysqli_real_escape_string($con, $_POST['steducen']);
    $steduyear = mysqli_real_escape_string($con, $_POST['steduyear']);
    $stedugrade = mysqli_real_escape_string($con, $_POST['stedugrade']);
    $pstnameini = mysqli_real_escape_string($con, $_POST['pstnameini']);
    $pstoccu = mysqli_real_escape_string($con, $_POST['pstoccu']);
    $pstmob = mysqli_real_escape_string($con, $_POST['pstmob']);
    $pstwa = mysqli_real_escape_string($con, $_POST['pstwa']);
    $stjdate = mysqli_real_escape_string($con, $_POST['stjdate']);
    $stadmfee = mysqli_real_escape_string($con, $_POST['stadmfee']);
    $staddby = mysqli_real_escape_string($con, $_POST['staddby']);
    $strole = mysqli_real_escape_string($con, $_POST['strole']);
    $ststatus = 'active';
    $stdstatus = 1;
    $stimg = $newnameimg;
    $stadddate = date("d/m/Y");


     // SQL query to get the row count
     $sql = "SELECT COUNT(*) as total FROM students WHERE stdatastatus='1' AND batfcname='$batfcname'";
     $result = $con->query($sql);
 
     // Check if the query was successful
     if ($result) {
         // Fetch the result as an associative array
         $row = $result->fetch_assoc();
 
         // Get the row count from the "total" column
         $rowCount = $row['total'];
         $idIndex=$rowCount+1;
         $idIndexMain=sprintf("%02d", $idIndex);
         $stregno=$batfcname.'/'.$idIndexMain;
         
     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }
 


    $query = "INSERT INTO students(stregno,batfcname,stnamef,stnameini,strole,stattr,stdob,stgen,stnic,stimg,steducen,steduyear,stedugrade,stjdate,stadmfee,ststatus,staddby,stadddate,pstnameini,pstoccu,pstmob,pstwa) VALUES ('$stregno','$batfcname','$stnamef','$stnameini','$strole','$stattr','$stdob','$stgen','$stnic','$stimg','$steducen','$steduyear','$stedugrade','$stjdate','$stadmfee','$ststatus','$staddby','$stadddate','$pstnameini','$pstoccu','$pstmob','$pstwa')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "[$stregno] New Student Data Created Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: add-student.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }
    else
    {
        // $_SESSION['message'] = "[$stregno] Student Data Not Created";
        // $_SESSION['messagetype'] = "alert-danger";
        // header("Location: add-student.php");
        // exit(0);
        echo "Error: " . $query . "<br>" . $con->error;
    }


}


//UpdatetStudent
if(isset($_POST['student_update'])){
   
    date_default_timezone_set("Asia/Colombo");
    $addimgtime=date("his");
    $file = $_FILES["stimg"]["name"];


    if(empty($file)){
        // $newnameimg="unknown.jpeg";
        $newnameimg=$_POST['stimgdata'];

    }
    else{
        $info = pathinfo($_FILES['stimg']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newnameimg = $addimgtime.'.'.$ext; 
        $tmp_img_name=$_FILES['stimg']['tmp_name'];
        $folder='upload/stnd-img/';
        move_uploaded_file($tmp_img_name,$folder.$newnameimg);
    }

    
    $stregno = mysqli_real_escape_string($con, $_POST['stregno']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $stnamef = mysqli_real_escape_string($con, $_POST['stnamef']);
    $batfcname = mysqli_real_escape_string($con, $_POST['batfcname']);
    $stnameini = mysqli_real_escape_string($con, $_POST['stnameini']);
    $stattr = mysqli_real_escape_string($con, $_POST['stattr']);
    $stdob = mysqli_real_escape_string($con, $_POST['stdob']);
    $stgen = mysqli_real_escape_string($con, $_POST['stgen']);
    $stnic = mysqli_real_escape_string($con, $_POST['stnic']);
    $stmail = mysqli_real_escape_string($con, $_POST['stmail']);
    $steducen = mysqli_real_escape_string($con, $_POST['steducen']);
    $steduyear = mysqli_real_escape_string($con, $_POST['steduyear']);
    $stedugrade = mysqli_real_escape_string($con, $_POST['stedugrade']);
    $pstnameini = mysqli_real_escape_string($con, $_POST['pstnameini']);
    $pstoccu = mysqli_real_escape_string($con, $_POST['pstoccu']);
    $pstmob = mysqli_real_escape_string($con, $_POST['pstmob']);
    $pstwa = mysqli_real_escape_string($con, $_POST['pstwa']);
    $stjdate = mysqli_real_escape_string($con, $_POST['stjdate']);
    $stadmfee = mysqli_real_escape_string($con, $_POST['stadmfee']);
    $strole = mysqli_real_escape_string($con, $_POST['strole']);
    $stimg = $newnameimg;
    $steditdate = date("d/m/Y");
    $steditby = mysqli_real_escape_string($con, $_POST['staddby']);

    $query = "UPDATE students SET 
    stnamef='$stnamef', 
    batfcname='$batfcname',
    stnameini='$stnameini',
    stattr='$stattr',
    stdob='$stdob',
    stgen='$stgen',
    stnic='$stnic',
    stmail='$stmail',
    steducen='$steducen',
    steduyear='$steduyear',
    stedugrade='$stedugrade',
    pstnameini='$pstnameini',
    pstoccu='$pstoccu',
    pstmob='$pstmob',
    pstwa='$pstwa',
    stjdate='$stjdate',
    stadmfee='$stadmfee',
    strole='$strole',
    stimg='$stimg',
    steditdate='$steditdate',
    steditby='$steditby'
    WHERE no=$no"; 
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "[$stregno] Student Data Updated Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: edit-student-target.php?steditid=$no");
        exit(0);
        // echo $sfregid."Error: " . $query . "<br>" . $con->error;
    }
    else
    {
        $_SESSION['message'] = "[$stregno] Student Data Not Updated";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: edit-student-target.php?steditid=$no");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }


}

//TransferStudent
if(isset($_POST['sttransdata'])){
   
    date_default_timezone_set("Asia/Colombo");
    $time=date("h:i:s");
    $date = date("d/m/Y");
    $stregno = mysqli_real_escape_string($con, $_POST['stregno']);
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $sttransby = mysqli_real_escape_string($con, $_POST['sttransby']);
    $sttransdate = mysqli_real_escape_string($con, $_POST['sttransdate']);
    $sttransfrom = mysqli_real_escape_string($con, $_POST['sttransfrom']);
    $sttransreason = mysqli_real_escape_string($con, $_POST['sttransreason']);
    $sttransto = mysqli_real_escape_string($con, $_POST['sttransto']);
    $stnameini = mysqli_real_escape_string($con, $_POST['stnameini']);
    $batfcname = mysqli_real_escape_string($con, $_POST['batfcname']);

    // SQL query to get the row count
    $sql = "SELECT COUNT(*) as total FROM students WHERE stdatastatus='1' AND batfcname='$sttransto'";
    $result = $con->query($sql);

    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // Get the row count from the "total" column
        $rowCount = $row['total'];
        $idIndex=$rowCount+1;
        $idIndexMain=sprintf("%02d", $idIndex);
        $stregnonew=$sttransto.'/'.$idIndexMain;
        
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $query = "UPDATE students SET 
    strole='student',
    stregno='$stregnonew',
    batfcname='$sttransto',
    sttransfrom='$sttransfrom',
    sttransto='$sttransto',
    sttransdate='$sttransdate',
    sttransreason='$sttransreason'
    WHERE no=$no"; 
    $query_run = mysqli_query($con, $query);

    $query2 = "INSERT INTO transfers(stregno,stnameini,sttransfrom,sttransto,sttransreason,sttransdate,sttransby,time,date,stno,stregnonew) VALUES ('$stregno','$stnameini','$sttransfrom','$sttransto','$sttransreason','$sttransdate','$sttransby','$time','$date','$no','$stregnonew')";
    $query_run2 = mysqli_query($con, $query2);

    if($query_run2 && $query_run)
    {
        $_SESSION['message'] = "[$stnameini] Student Successfully Transfferd To $sttransto";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: transfer-student.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
        // echo "Error: " . $query2 . "<br>" . $con->error;
    }
    else
    {
        $_SESSION['message'] = "[$stnameini] Student NOT Transfferd";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: transfer-student.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
        // echo "Error: " . $query2 . "<br>" . $con->error;
    }


}


//drpStudent
if(isset($_POST['stdrpdata']))
{
    $no = mysqli_real_escape_string($con, $_POST['no']);
    $stdrpdate = mysqli_real_escape_string($con, $_POST['stdrpdate']);
    $stdrpreason = mysqli_real_escape_string($con, $_POST['stdrpreason']);
    $query = "UPDATE students SET ststatus='dropout', stdrpdate='$stdrpdate', stdrpreason='$stdrpreason' WHERE no='$no' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Student Successfully DroppedOut";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: dropouts.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Student Not DroppedOut";
        $_SESSION['messagetype'] = "alert-warning";
        header("Location: dropouts.php");
        exit(0);
    }
}


//dltStaff
if(isset($_POST['sfdltdata']))
{
    $sfregid = mysqli_real_escape_string($con, $_POST['sfregid']);
    $query = "UPDATE staffs SET sfdatastatus='0' WHERE sfregid='$sfregid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Data Deleted Successfully";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: view-staff.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Data Not Deleted";
        $_SESSION['messagetype'] = "alert-warning";
        header("Location: view-staff.php");
        exit(0);
    }
}

//InsertStaff
if(isset($_POST['staff_submit'])){
   
    date_default_timezone_set("Asia/Colombo");
    $addimgtime=date("his");
    $file = $_FILES["sfimg"]["name"];

    if(empty($file)){
        $newnameimg="unknown.jpeg";

    }
    else{
        $info = pathinfo($_FILES['sfimg']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newnameimg = $addimgtime.'.'.$ext; 
        $tmp_img_name=$_FILES['sfimg']['tmp_name'];
        $folder='upload/staff-img/';
        move_uploaded_file($tmp_img_name,$folder.$newnameimg);
    }

    $sfregid = mysqli_real_escape_string($con, $_POST['sfregid']);
    $sffullname = mysqli_real_escape_string($con, $_POST['sffullname']);
    $sfnameini = mysqli_real_escape_string($con, $_POST['sfnameini']);
    $sfcletterno = mysqli_real_escape_string($con, $_POST['sfcletterno']);
    $sfnic = mysqli_real_escape_string($con, $_POST['sfnic']);
    $sfjdate = mysqli_real_escape_string($con, $_POST['sfjdate']);
    $sfldate = 0;
    $sfcname = mysqli_real_escape_string($con, $_POST['sfcname']);
    $sfcid = $sfcname.'@OXFORD.COM';
    $sfpwrk = mysqli_real_escape_string($con, $_POST['sfpwrk']);
    $sfswrk = mysqli_real_escape_string($con, $_POST['sfswrk']);
    $sfgen = mysqli_real_escape_string($con, $_POST['sfgen']);
    $sfadd = mysqli_real_escape_string($con, $_POST['sfadd']);
    $sfdob = mysqli_real_escape_string($con, $_POST['sfdob']);
    $sfmobno = mysqli_real_escape_string($con, $_POST['sfmobno']);
    $sflang = mysqli_real_escape_string($con, $_POST['sflang']);
    $sfimg = $newnameimg;
    $sfadddate = date("d/m/Y");
    $sfaddby = mysqli_real_escape_string($con, $_POST['sfregid']);
    // $sfaddby = 'MrIndrs';
    $authaccess = 0;
    $authpswrd = 0;
    $sfadmin = 101;
    $sfpswrd = '0987';
    $sfstatus = 'active';
    $sfemail = mysqli_real_escape_string($con, $_POST['sfemail']);
    $sfedutit = mysqli_real_escape_string($con, $_POST['sfedutit']);




    $query = "INSERT INTO staffs(sfregid,sffullname,sfnameini,sfcletterno,sfnic,sfjdate,sfcname,sfpwrk,sfswrk,sfgen,sfadd,sfdob,sfmobno,sflang,sfimg,sfadddate,sfaddby,authaccess,authpswrd,sfadmin,sfpswrd,sfstatus,sfldate,sfemail,sfedutit,sfcid) VALUES ('$sfregid','$sffullname','$sfnameini','$sfcletterno','$sfnic','$sfjdate','$sfcname','$sfpwrk','$sfswrk','$sfgen','$sfadd','$sfdob','$sfmobno','$sflang','$sfimg','$sfadddate','$sfaddby','$authaccess','$authpswrd','$sfadmin','$sfpswrd','$sfstatus','$sfldate','$sfemail','$sfedutit','$sfcid')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "[$sfregid] Staff Data Created Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: add-staff.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "[$sfregid] Staff Data Not Created";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: add-staff.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }


}

//UpdatetStaff
if(isset($_POST['staff_update'])){
   
    date_default_timezone_set("Asia/Colombo");
    $addimgtime=date("his");
    $file = $_FILES["sfimg"]["name"];


    if(empty($file)){
        // $newnameimg="unknown.jpeg";
        $newnameimg=$_POST['sfimgdata'];

    }
    else{
        $info = pathinfo($_FILES['sfimg']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newnameimg = $addimgtime.'.'.$ext; 
        $tmp_img_name=$_FILES['sfimg']['tmp_name'];
        $folder='upload/staff-img/';
        move_uploaded_file($tmp_img_name,$folder.$newnameimg);
    }

    

    $sfregid = mysqli_real_escape_string($con, $_POST['sfregid']);
    $sffullname = mysqli_real_escape_string($con, $_POST['sffullname']);
    $sfnameini = mysqli_real_escape_string($con, $_POST['sfnameini']);
    $sfcletterno = mysqli_real_escape_string($con, $_POST['sfcletterno']);
    $sfnic = mysqli_real_escape_string($con, $_POST['sfnic']);
    $sfjdate = mysqli_real_escape_string($con, $_POST['sfjdate']);
    $sfldate = 0;
    $sfcname = mysqli_real_escape_string($con, $_POST['sfcname']);
    $sfcid = $sfcname.'@OXFORD.COM';
    $sfpwrk = mysqli_real_escape_string($con, $_POST['sfpwrk']);
    $sfswrk = mysqli_real_escape_string($con, $_POST['sfswrk']);
    $sfgen = mysqli_real_escape_string($con, $_POST['sfgen']);
    $sfadd = mysqli_real_escape_string($con, $_POST['sfadd']);
    $sfdob = mysqli_real_escape_string($con, $_POST['sfdob']);
    $sfmobno = mysqli_real_escape_string($con, $_POST['sfmobno']);
    $sflang = mysqli_real_escape_string($con, $_POST['sflang']);
    $sfimg = $newnameimg;
    $sfeditdate = date("d/m/Y");
    $sfeditby = mysqli_real_escape_string($con, $_POST['sfregid']);;
    $sfstatus = 'active';
    $sfemail = mysqli_real_escape_string($con, $_POST['sfemail']);
    $sfedutit = mysqli_real_escape_string($con, $_POST['sfedutit']);


    $query = "UPDATE staffs SET 
    sffullname='$sffullname', 
    sfnameini='$sfnameini', 
    sfcletterno='$sfcletterno', 
    sfnic='$sfnic', 
    sfjdate='$sfjdate', 
    sfldate='$sfldate', 
    sfcname='$sfcname', 
    sfcid='$sfcid', 
    sfpwrk='$sfpwrk', 
    sfswrk='$sfswrk', 
    sfgen='$sfgen', 
    sfadd='$sfadd', 
    sfdob='$sfdob', 
    sfmobno='$sfmobno', 
    sflang='$sflang', 
    sfimg='$sfimg', 
    sfeditdate='$sfeditdate', 
    sfeditby='$sfeditby', 
    sfstatus='$sfstatus', 
    sfemail='$sfemail', 
    sfedutit='$sfedutit'
    WHERE sfregid='$sfregid'"; 
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "[$sfregid] Staff Data Updated Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: view-staff-dtls.php?regid=$sfregid");
        exit(0);
        // echo $sfregid."Error: " . $query . "<br>" . $con->error;
    }
    else
    {
        $_SESSION['message'] = "[$sfregid] Staff Data Not Updated";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: view-staff-dtls.php?regid='$sfregid'");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }


}


//InsertCCR
if(isset($_POST['ccr_submit'])){

$ccrdate = mysqli_real_escape_string($con, $_POST['ccrdate']);
$ccrstaff = mysqli_real_escape_string($con, $_POST['ccrstaff']);
$ccrbatch = mysqli_real_escape_string($con, $_POST['ccrbatch']);
$ccrstartt = mysqli_real_escape_string($con, $_POST['ccrstartt']);
$ccrfinishedt = mysqli_real_escape_string($con, $_POST['ccrfinishedt']);
$ccrdesc = mysqli_real_escape_string($con, $_POST['ccrdesc']);
$ccraddby = mysqli_real_escape_string($con, $_POST['ccraddby']);
$ccraddt = $fetchTime;

$query = "INSERT INTO ccr(ccrdate,ccrstaff,ccrbatch,ccrstartt,ccrfinishedt,ccrdesc,ccraddt,ccraddby) VALUES ('$ccrdate', '$ccrstaff', '$ccrbatch', '$ccrstartt', '$ccrfinishedt', '$ccrdesc', '$ccraddt', '$ccraddby')";
$query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "New Report Added Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: ccr.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Report Not Created";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: ccr.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }
}


//InsertTask
if(isset($_POST['task_submit'])){

$tscode = mysqli_real_escape_string($con, $_POST['tscode']);
$tstitle = mysqli_real_escape_string($con, $_POST['tstitle']);
$tsfrom = mysqli_real_escape_string($con, $_POST['tsfrom']);
$tsto = mysqli_real_escape_string($con, $_POST['tsto']);
$tsdesc = mysqli_real_escape_string($con, $_POST['tsdesc']);
$tssdate = mysqli_real_escape_string($con, $_POST['tssdate']);
$tsfdate = mysqli_real_escape_string($con, $_POST['tsfdate']);
date_default_timezone_set("Asia/Colombo");
$time=date("h:i:s");
$date = date("d/m/Y");

$query = "INSERT INTO tasks(tscode,tstitle,tsfrom,tsto,tsdesc,tssdate,tsfdate,date,time,tsstatus) VALUES ('$tscode','$tstitle','$tsfrom','$tsto','$tsdesc','$tssdate','$tsfdate','$date','$time','Un-Completed')";
$query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "New Task Added Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: tasks.php");
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "Task Not Created";
        // $_SESSION['messagetype'] = "alert-danger";
        // header("Location: tasks.php");
        // exit(0);
        echo "Error: " . $query . "<br>" . $con->error;
    }
}


//FinishedTask
if(isset($_POST['tsk_finished'])){

$no = mysqli_real_escape_string($con, $_POST['no']);
$tsrmrk = mysqli_real_escape_string($con, $_POST['tsrmrk']);
$tscode = mysqli_real_escape_string($con, $_POST['tscode']);
$time=date("h:i:s");
$date = date("d/m/Y");

$query = "UPDATE tasks SET 
    tsrmrk='$tsrmrk',
    tsstatus='Completed'
    WHERE no='$no'"; 
$query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "$tscode Completed Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: tasks.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "$tscode Not Completed";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: tasks.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }
}


//ccrDlt
if(isset($_GET['ccrdltid']))
{
    $ccrno = mysqli_real_escape_string($con, $_GET['ccrdltid']);

    
    $query = "UPDATE ccr SET ccrdatastatus=0 WHERE no='$ccrno' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Report Deleted Successfully";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: ccr.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Report Not Deleted";
        $_SESSION['messagetype'] = "alert-warning";
        header("Location: ccr.php");
        exit(0);
    }
}




//InsertCrs
if(isset($_POST['crs_submit'])){

$crsstart = mysqli_real_escape_string($con, $_POST['crsstart']);
$crsname = mysqli_real_escape_string($con, $_POST['crsname']);
$crscname = mysqli_real_escape_string($con, $_POST['crscname']);
$crsdesc = mysqli_real_escape_string($con, $_POST['crsdesc']);
$crsaddtime = mysqli_real_escape_string($con, $_POST['crsaddtime']);
$crssetby = mysqli_real_escape_string($con, $_POST['crssetby']);

$query = "INSERT INTO courses (crsname,crscname,crsdesc,crsstart,crsaddtime,crssetby) VALUES ('$crsname','$crscname','$crsdesc','$crsstart','$crsaddtime','$crssetby')";
$query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "New Course Added Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: new-course.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Created";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: new-course.php");
        exit(0);
        // echo "Error: " . $query . "<br>" . $con->error;
    }
}

//EditCrs
if(isset($_POST['crs_update']))
{
    $crsno = mysqli_real_escape_string($con, $_POST['crsno']);
    $crsstart = mysqli_real_escape_string($con, $_POST['crsstart']);
    $crsname = mysqli_real_escape_string($con, $_POST['crsname']);
    $crscname = mysqli_real_escape_string($con, $_POST['crscname']);
    $crsdesc = mysqli_real_escape_string($con, $_POST['crsdesc']);
    $crsedittime = $fetchTime;
    $crseditby = mysqli_real_escape_string($con, $_POST['crseditby']);

    
    $query = "UPDATE courses SET crsstart='$crsstart',crsname='$crsname',crscname='$crscname',crsdesc='$crsdesc',crsedittime='$crsedittime',crseditby='$crseditby' WHERE no='$crsno' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = " Course Updated Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: new-course.php");
        exit(0);
    }
    else
    {
        // die('Error executing the query: ' . $con->error);
        $_SESSION['message'] = " Course Not Updated";
        $_SESSION['messagetype'] = "alert-danger";
        header("Location: new-course.php");
        exit(0);
    }
}

//InsertBat
if(isset($_POST['bat_submit'])){

    $crscname = mysqli_real_escape_string($con, $_POST['crscname']);
    $batcname = mysqli_real_escape_string($con, $_POST['batcname']);
    $batno = mysqli_real_escape_string($con, $_POST['batno']);
    $batstart = mysqli_real_escape_string($con, $_POST['batstart']);
    $bataddby = mysqli_real_escape_string($con, $_POST['bataddby']);
    $bataddtime = mysqli_real_escape_string($con, $_POST['bataddtime']);
    $batfcname = $crscname."/".$batcname.$batno ;
    
    $query = "INSERT INTO batches (crscname,batcname,batno,batstart,bataddby,bataddtime,batfcname) VALUES ('$crscname','$batcname','$batno','$batstart','$bataddby','$bataddtime','$batfcname')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "New Batch Added Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: new-batch.php");
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "Batch Not Created";
        // $_SESSION['messagetype'] = "alert-danger";
        // header("Location: new-batch.php");
        // exit(0);
        echo "Error: " . $query . "<br>" . $con->error;
    }
}


//UpdateBat
if(isset($_POST['bat_update'])){

    $no = mysqli_real_escape_string($con, $_POST['no']);
    $crscname = mysqli_real_escape_string($con, $_POST['crscname']);
    $batcname = mysqli_real_escape_string($con, $_POST['batcname']);
    $batno = mysqli_real_escape_string($con, $_POST['batno']);
    $batstart = mysqli_real_escape_string($con, $_POST['batstart']);
    $bateditby = mysqli_real_escape_string($con, $_POST['bateditby']);
    $batedittime = mysqli_real_escape_string($con, $_POST['batedittime']);
    $bateffdate = mysqli_real_escape_string($con, $_POST['bateffdate']);
    $batstatus = mysqli_real_escape_string($con, $_POST['batstatus']);
    $batfcname = $crscname."/".$batcname.$batno ;

    
    // $sql5 = "SELECT courses.crsname
    //         FROM batches
    //         INNER JOIN courses ON batches.crscname = courses.crscname";
    // $result5 = $con->query($sql5);

    // if ($result5 === false) {
    //     die("Error executing the query: " . $con->error);
    // }
    // if(mysqli_num_rows($results5) > 0){
    //     foreach($query_run2 as $crs)
    //     {
    //         $crsname=$crs['crsname'];
    //     }
    // }
   

    
    $query = "UPDATE batches SET batfcname='$batfcname',crscname='$crscname',batcname='$batcname',batno='$batno',batstart='$batstart',bateditby='$bateditby',batedittime='$batedittime',bateffdate='$bateffdate',batstatus='$batstatus' WHERE no='$no' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Batch Updated Successfully";
        $_SESSION['messagetype'] = "alert-primary";
        header("Location: new-batch.php");
        exit(0);
    }
    else
    {
        // $_SESSION['message'] = "Batch Not Updated";
        // $_SESSION['messagetype'] = "alert-danger";
        // header("Location: new-batch.php");
        // exit(0);
        echo "Error: " . $query . "<br>" . $con->error;
    }
}


?>