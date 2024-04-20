

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>add member</title>
	<link rel="stylesheet" href="">
	<style>
		body{
			background-color:#343438;
		}
    .button1 {
  margin: 12px;
  height: 50px;
  width: 120px;
  border-radius: 10px;
  background: #333;
  justify-content: center;
  align-items: center;
  box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #444, inset -5px -5px 10px #222;
  text-decoration: none;
  font-family: 'Damion', cursive;
  border: none;
  font-size: 16px;
  transition: 500ms;
}
.button1 a{
  color: rgb(161, 161, 161);
  text-decoration: none;
}

.button1:hover {
  box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #222, inset -5px -5px 10px #444;
  color: #d6d6d6;
  transition: 500ms;
}
	.container {
  position:fixed;
  max-width: 500px;
  width: 50%;
   background-color: #5F6069;
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
  <button class="button1"><a href="home.php">
    Back
  </a>
</button>
	<section class="container">
  <header>Registration Form</header>
  <form class="form" action="memberLogic.php" method="POST">
 
      <div class="input-box">
          <label>Full Name</label>
          <input required="" placeholder="Enter full name" type="text" name="fullname">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input required="" placeholder="Enter phone number" type="telephone" name="phone_number">
          </div>
          <div class="input-box" >
            <label>Birth Date</label>
            <input required="" placeholder="Enter birth date" type="date" name="birth">
          </div>
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio">
            <label for="check-female">Female</label>
          </div>
          
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input required="" placeholder="Enter street address" type="text" name="adress">
        <div class="column">
          <div class="select-box" >
            <select name="pay">
              <option hidden="">Pay</option>
              <option>Cash</option>
              <option>Bank accound</option>
            </select>
          </div>
           <div class="select-box">
            <select name="membership">
              <option hidden="">Membership</option>
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
