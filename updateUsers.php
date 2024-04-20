<?php
require ('config.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
     $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email WHERE id=:id";
    $updateUser = $conn->prepare($sql);
    $updateUser->bindParam(':id',$id);
    $updateUser->bindParam(':name',$name);
    $updateUser->bindParam(':surname',$surname);
    $updateUser->bindParam(':username',$username);
    $updateUser->bindParam(':email',$email);
    $updateUser->execute();
    header("Location: dashboard.php");
}


?>