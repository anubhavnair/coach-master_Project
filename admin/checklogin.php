<?php @session_start();
include("./commonfiles/dbconnect.php");



$a = test_input($_REQUEST["usid"]);
$b = test_input($_REQUEST["password"]);
function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return ($data);
}

$admin_info = mysqli_query($con, "select * from admin_data where admin_user_id='$a'") or die("Query Error");
$row = mysqli_fetch_array($admin_info);
if (mysqli_num_rows($admin_info) == 0) {
    header("location:index.php?1");
} else {
    if ($row['admin_pass'] == $b) {

        $_SESSION["adminid"] = $a;
        $_SESSION["adminpass"] = $row["admin_pass"];
        header("location:adminloggedin.php");


    } else {
        header("location:index.php?resmsg=2");
    }
}


?>