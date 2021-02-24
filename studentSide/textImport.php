<?php 
mysqli_select_db("retentionapp_login");
$exportedrow = mysqli_query("Select quiztext from quiztext where id = '1'");
$exportedtext = mysqli_fetch_array($exportedrow);
exporttext($exportedtext);

?>