<?php

require ('config.php');

if (isset($_POST['submit'])) {

	$fullname=$_POST['fullname'];
	$phone_number=$_POST['phone_number'];
	$birth=$_POST['birth'];
	$gender=$_POST['gender'];
	$adress=$_POST['adress'];
	$pay=$_POST['pay'];
	$membership=$_POST['membership'];

	if (empty($fullname) || empty($phone_number) || empty($birth)|| empty($gender) || empty($adress)|| empty($pay) || empty($membership)) {
		echo "You need to fill all fields";
	}else{

		$sql="INSERT INTO member(fullname,phone_number,birth,gender,adress,pay,membership)VALUES (:fullname,:phone_number,:birth,:gender,:adress,:pay,:membership)";
$insertSql = $conn->prepare($sql);

		$insertSql->bindParam(':fullname',$fullname);
		$insertSql->bindParam(':phone_number',$phone_number);
		$insertSql->bindParam(':birth',$birth);
		$insertSql->bindParam(':gender',$gender);
		$insertSql->bindParam(':adress',$adress);
		$insertSql->bindParam(':pay',$pay);
		$insertSql->bindParam(':membership',$membership);
		
		$insertSql->execute();

		header("Location: dashboardmember.php");
	}
}



?>