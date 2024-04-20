<?php
require('config.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    
    $password=$_POST['password'];

    if(empty($username) || empty($password)){
        echo "You need to fill all fields";
    }
    else{
        
        $sql = "SELECT id, name,surname, username, email, password FROM users WHERE username=:username";
        $selectUser = $conn->prepare($sql);
        $selectUser->bindParam(':username',$username);
        $selectUser->execute();
        $data = $selectUser->fetch();

        if ($data == false){
            echo "This user doesn't exist!";
        }
        else{
           
            if(password_verify($password, $data['password'])){
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['surname']=$data['surname'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['email'] = $data['email'];
                

                header('Location: home.php');
            }
            else{
                echo "The password is incorrect";
            }
        }
    }
}

?>