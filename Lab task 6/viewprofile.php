<?php 
     include 'showLogout.php';
?>
<?php require_once './controller/viewController.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
    
    
    <a href="dashboard.php">Dashboard</a>
    <a href="viewprofile.php">viewprofile</a>
    <a href="edit.php">Edit Profile</a>
    <a href="changephoto.php">Change Profile Picture</a>
    <a href="changepassword.php">Change Password</a>
    <a href="cart.php">view cart</a>
    <center>
        <fieldset>
            <legend align="center">
                <span> <h1>View Profile</h1></span>
            </legend>
            <label>Name: <?php echo $name?></label>
            <hr>
            <label>Email: <?php echo $email?></label>
            <hr>
            <label>Username: <?php echo $_SESSION['uname']?></label>
            <hr>
            <label>Gender: <?php echo $gender?></label>
            <hr>
            <label>Date of bath: <?php echo $dob?></label>
        </fieldset>
    </center>
</body>
</html>