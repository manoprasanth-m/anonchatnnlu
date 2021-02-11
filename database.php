<!--database connection-->
<?php

$host='sql3.freemysqlhosting.net';
$username='sql3392146';
$user_pass='xsmSTYz3j7';
$database_in_use='sql3392146';

$con = mysqli_connect($host,$username,$user_pass,$database_in_use);
if (!$con)
{
    echo"not connected";
}
if (!mysqli_select_db($con,$database_in_use))
{
    echo"database not selected";
}
?>
