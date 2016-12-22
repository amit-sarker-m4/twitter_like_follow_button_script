<?php

include("session.php");
include("db.php");


if($_POST['user_id'])
{
$user_id=$_POST['user_id'];
$user_id = mysql_escape_String($user_id);


$sql_in = "INSERT into follow_user(uid_fk,user_id) values ('$uid','$user_id')";
mysql_query( $sql_in);

}

?>