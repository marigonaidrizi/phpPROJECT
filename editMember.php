<?php
require('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM member WHERE id=:id";
$selectMember = $conn->prepare($sql);
$selectMember->bindParam(':id',$id);
$selectMember->execute();

///fetch lejon te marrim ni rresht ///
$member_data = $selectMember->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
			body{
			background-color: white;
		}
	.container {
  position:fixed;
  max-width: 500px;
  width: 50%;
   background-color: #adb5bd;
       top:50%;
       left:50%;
       transform:translate(-50%,-50%);
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
   }

.container header {
  font-size: 1.2rem;
  color: #000;
  font-weight: 600;
  text-align: center;
}

.container .form {
  margin-top: 15px;
}

.form .input-box {
  width: 90%;
  margin-top: 10px;
}

.input-box label {
  color: #000;
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #808080;
  margin-top: 5px;
  border: 1px solid black;
  border-radius: 6px;
  padding: 0 15px;
  background: #FFFFFF;
}

.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
  display: flex;
  column-gap: 15px;
  width: 90%;
}

.form .gender-box {
  margin-top: 10px;
}

.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form .gender {
  column-gap: 5px;
}

.gender input {
  accent-color: #434969;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}

.gender label {
  color: #000;
}

.address :where(input, .select-box) {
  margin-top: 10px;
}

.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #808080;
  font-size: 1rem;
  background: #FFFFFF;
}

.form button {
  height: 40px;
  width: 100%;
  color: #000;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #7D7F8C;
}

.form button:hover {
  background: #424349;
}
	</style>
</head>
<body>

<section class="container">
  <header>Registration Form</header>
  <form class="form" action="memberLogic.php" method="POST">
 
      <div class="input-box">
          <label>Full Name</label>
          <input required="" placeholder="Enter full name" type="text" name="fullname" value="<?php echo $member_data['fullname']; ?>">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input required="" placeholder="Enter phone number" type="telephone" name="phone_number" value="<?php echo $member_data['phone_number']; ?>">
          </div>
          <div class="input-box" >
            <label>Birth Date</label>
            <input required="" placeholder="Enter birth date" type="date" name="birth" value="<?php echo $member_data['birth']; ?>">
          </div>
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio" value="<?php echo $member_data['gender']; ?>">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio" value="<?php echo $member_data['gender']; ?>">
            <label for="check-female">Female</label>
          </div>
          
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input required="" placeholder="Enter street address" type="text" name="adress" value="<?php echo $member_data['adress']; ?>">
        <div class="column">
          <div class="select-box">
            <select name="pay" value="<?php echo $member_data['pay']; ?>">
              <option hidden="">Pay</option>
              <option>Cash</option>
              <option>Bank accound</option>
            </select>
          </div>
           <div class="select-box">
            <select name="membership" value="<?php echo $member_data['membership']; ?>">
              <option hidden="" value="<?php echo $member_data['membership']; ?>">Membership</option>
              <option>Online Coaching</option>
              <option>Nutrition Plan</option>
              <option>Focal Point Package</option>
            </select>
          </div>
        
        </div>
      </div>
      <button type="submit" name="submit">Submit</button>
    
  </form>
</section>

	
</body>
</html>