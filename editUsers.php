<?php
require('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=:id";
$selectUser = $conn->prepare($sql);
$selectUser->bindParam(':id',$id);
$selectUser->execute();

$user_data = $selectUser->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style type="text/css">
	body{
		background-color: #e8e8e8;
	}
	.section_form{
		position:fixed;
       top:50%;
       left:50%;
       transform:translate(-50%,-50%);
	}
	.feed-form {
  margin-top: 36px;
  display: flex;
  flex-direction: column;
  width: 300px;
}

.feed-form input {
  height: 54px;
  border-radius: 5px;
  background: white;
  margin-bottom: 15px;
  border-style:  1px solid black;
  border: none;
  padding: 0 20px;
  font-weight: 300;
  font-size: 14px;
  color: black;
}

.button_submit:hover, .feed-form input:hover {
  transform: scale(1.009);
  box-shadow: 0px 0px 3px 0px #212529;
}

.button_submit {
  width: 100%;
  height: 54px;
  font-size: 14px;
  color: white;
  background: black;
  border-radius: 5px;
  border: none;
  font-weight: 500;
  text-transform: uppercase;
}
</style>

</head>
<body>


<section class="section_form">
  <form id="consultation-form" class="feed-form" action="updateUsers.php" method="POST">
  	<input name="id" required="" placeholder="Id" value="<?php echo $user_data['id']; ?>" readonly>
    <input required="" name="name" placeholder="Name" type="text" value="<?php echo $user_data['name']; ?>">
    <input name="surname" required="" placeholder="Surname" value="<?php echo $user_data['surname'];?>">
    <input name="username" required="" placeholder="Username" value="<?php echo $user_data['username']; ?>">
    <input name="email" required="" placeholder="E-mail" type="email" value="<?php echo $user_data['email']; ?>">
    

    <button class="button_submit" type="submit" name="submit">Edit</button>
  </form>
</section>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>