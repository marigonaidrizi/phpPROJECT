<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		body{
			background-color: #212121;

		}
		.form-box {
			position:fixed;
       top:50%;
       left:50%;
       transform:translate(-50%,-50%);
  max-width: 300px;
  min-width: 450px;
  background: #593C8F;
  overflow: hidden;
  border-radius: 16px;
  color: #010101;
}

.form {
  position: relative;
 
  display: flex;
  flex-direction: column;
  padding: 32px 24px 24px;
  gap: 16px;
  text-align: center;
}

/*Form text*/
.title {
  font-weight: bold;
  font-size: 1.6rem;
}

.subtitle {
  font-size: 1rem;
 
  color: #DBF1FD;
}

/*Inputs box*/
.form-container {
  overflow: hidden;
  border-radius: 8px;
  background-color: #E2F4FD;
  margin: 1rem 0 .5rem;
  width: 100%;
}

.input {
  background: none;
  border: 0;
  outline: 0;
  height: 40px;
  width: 100%;
  border-bottom: 1px solid black;
  font-size: .9rem;
  padding: 8px 15px;
  margin: 10px;
}


.form-section {
  padding: 16px;
  font-size: .85rem;
  background-color: #e0ecfb;
  box-shadow: rgb(0 0 0 / 8%) 0 -1px;
}

.form-section a {
  font-weight: bold;
  color: #0066ff;
  transition: color .3s ease;
}

.form-section a:hover {
  color: #005ce6;
  text-decoration: underline;
}

/*Button*/
.form button {
  background-color: #171738;
  color: #fff;
  border: 0;
  border-radius: 24px;
  padding: 10px 16px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color .3s ease;
}

.form button:hover {
  background-color: #005ce6;
}



	</style>
</head>
<body>

	<div class="form-box">
<form class="form" method="POST" action="register.php">
    <span class="title">Sign up</span>
    <span class="subtitle">Create a free account with your email.</span>
    <div class="form-container">
    	
      <input type="text" class="input" placeholder="Name" name="name">

      <input type="text" class="input" placeholder="Surname" name="surname">


      <input type="text" class="input" placeholder="Username" name="username">


			<input type="email" class="input" placeholder="Email" name="email">

			<input type="password" class="input" placeholder="Password" name="password">
			</label>
    </div>
    <button type="submit" name="submit">Sign up</button>
</form>
<div class="form-section">
  <p>Have an account? <a href="login.php">Log in</a> </p>
</div>
</div>

</body>
</html>