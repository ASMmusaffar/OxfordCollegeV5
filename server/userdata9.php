<?PHP
include('dbcon.php');
$mainUserRegID=$_SESSION['main_user'];
$query="SELECT * FROM staffs WHERE sfstatus='active' AND sfadmin='101' AND sfregid='$mainUserRegID' AND sfdatastatus='1'";
$query_run = mysqli_query($con, $query);
if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $admin)
        {
            //UserDetails
            $userAvatar="upload/staff-img/".$admin['sfimg'];
            $userRegId=$admin['sfregid'];
            $userNIC=$admin['sfnic'];
            $userFullName=$admin['sffullname'];
            $userName=$admin['sfnameini'];
            $userTitle=$admin['sfedutit'];
            $userPosition=$admin['sfpwrk'];
            $userOtherPosition=$admin['sfswrk'];
            $userCodeName=$admin['sfcname'];
            $userJoinDate=$admin['sfjdate'];
        }
}
?>