<?php
require('config.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $phone_number = $_POST['phone_number'];
    $birth = $_POST['birth'];
    $gender = $_POST['gender'];
    $adress = $_POST['adress'];
    $pay=$_POST['pay'];
    $membership=['membership'];


    $sql = "UPDATE movies SET movie_name=:movie_name, phone_number=:phone_number, birth=:birth, gender=:gender, adress=:adress, pay=:pay, membership=:membership WHERE id=:id";
    $updateMovie = $conn->prepare($sql);
    $updateMovie->bindParam(':id',$id);
    $updateMovie->bindParam(':movie_name',$movie_name);
    $updateMovie->bindParam(':phone_number',$phone_number);
    $updateMovie->bindParam(':birth',$birth);
    $updateMovie->bindParam(':gender',$gender);
    $updateMovie->bindParam(':adress',$adress);
    $updateMovie->bindParam(':pay',$pay);
    $updateMovie->bindParam(':membership',$membership);

    $updateMovie->execute();
    header("Location: dashboardmember.php");
}



?>