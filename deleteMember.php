<?php

require ('config.php');

$id=$_GET['id'];
$sql="DELETE FROM member WHERE id=:id";
$deleteMember=$conn->prepare($sql);
$deleteMember->bindParam(':id',$id);
$deleteMember->execute();

header("Location: dashboardmember.php");
?>