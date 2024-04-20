<?php

session_start();

require('config.php');

if(empty($_SESSION['username'])){
    
}

$sql ="SELECT * FROM users";
$selectUser = $conn->prepare($sql);
$selectUser->execute();

$users_data = $selectUser->fetchAll();


?>



<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	 <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  
  
  <div class="container-fluid" style="float: left">
    
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/gym.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      GYM
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="float: right">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        
        <a class="nav-link " aria-current="page" href="home.php">Home</a>
       
        <a class="nav-link active" href="dashboard.php">Dashboard</a>
        <a class="nav-link" href="dashboardmember.php">Dashboard Member</a>
        
   
      </div>
    </div>
  </div>
  </div>

</nav>

 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1>Dashboard</h1>
                </div>
                
                    <h2>Users</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm" >
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Username</th>
                                  <th scope="col">Email</th>
                                      <th scope="col">Password</th> 
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users_data as $user_data)  {?>
                                    <tr>
                                        <td><?php echo $user_data['id']; ?></td>
                                        <td><?php echo $user_data['name']; ?></td>
                                        <td><?php echo $user_data['surname']; ?></td>
                                        <td><?php echo $user_data['username']; ?></td>
                                        <td><?php echo $user_data['email']; ?></td>
                                        <td><?php echo $user_data['password']; ?></td>
                                        <td><a href="editUsers.php?id=<?= $user_data['id']; ?>">Edit</a></td>
                                        <td><a href="deleteUsers.php?id=<?= $user_data['id']; ?>">Delete</a></td>
                                    </tr>
                                <?php } ?>    
                            </tbody>
                        </table>
                    </div>
                    
            </main>
        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>