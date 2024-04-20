<?php 
session_start();

require('config.php');


$sql ="SELECT * FROM member";
$selectMember = $conn->prepare($sql);
$selectMember->execute();

$member_data = $selectMember->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
	<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#7952b3">
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
      
        <a class="nav-link" href="dashboard.php">Dashboard</a>
        <a class="nav-link active" href="dashboardmember.php">Dashboard Member</a>
        
       
      </div>
    </div>
  </div>
  </div>
</nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1>Dashboard</h1>
                </div>
                
               
                    <h2>Member</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">fullname</th>
                                    <th scope="col">phone_number</th>
                                    <th scope="col">birth</th>
                                    <th scope="col">gender</th>
                                    <th scope="col">adress</th>
                                    <th scope="col">pay</th>
                                    <th scope="col">membership</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($member_data as $membe_data)  {?>
                                    <tr>
                                        <td><?php echo $membe_data['id']; ?></td>
                                        <td><?php echo $membe_data['fullname']; ?></td>
                                        <td><?php echo $membe_data['phone_number']; ?></td>
                                        <td><?php echo $membe_data['birth']; ?></td>
                                        <td><?php echo $membe_data['gender']; ?></td>
                                        <td><?php echo $membe_data['adress']; ?></td>
                                        <td><?php echo $membe_data['pay']; ?></td>
                                        <td><?php echo $membe_data['membership']; ?></td>
                                        <td><a href="editMember.php?id=<?= $membe_data['id']; ?>">Update</a></td>
                                        <td><a href="deleteMember.php?id=<?= $membe_data['id']; ?>">Delete</a></td>
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

