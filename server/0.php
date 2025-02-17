<?php
// Original field names list
$fieldNames = "(sfregid,sffullname,sfnameini,sfcletterno,sfnic,sfjdate,sfcname,sfpwrk,sfswrk,sfgen,sfadd,sfdob,sfmobno,sflang,sfimg,sfadddate,sfaddby,authaccess,authpswrd,sfadmin,sfpswrd,sfstatus,sfldate)";

// Explode the string to get individual field names
$fieldNamesArray = explode(",", $fieldNames);

// Loop through each field name and add single quotes around them
$modifiedFieldNames = array_map(function($fieldName) {
    return "'$fieldName'";
}, $fieldNamesArray);

// Convert the array back to a string
$modifiedFieldNamesString = implode(",", $modifiedFieldNames);

// Output the modified field names
echo $modifiedFieldNamesString;
?>
