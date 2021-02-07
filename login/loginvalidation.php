<?php
$email = $_POST["email"];
$pass = $_POST ["password"];

$connection = mysql_connect(?,"dh_rpwwdr","R3t3n@dm1n");

mysql_select_db("retentionapp",$con);

$result = mysql_query("Select ?, ?, ?");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>