<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
    
    <?php
        include 'showLogout.php';
        $dtls = file_get_contents('data.json');
        $dtlsok = json_decode($dtls);
        
            foreach($dtlsok as $ok)
            {
                $username=$ok->username;
                if ($_SESSION['uname']==$username) {
                    $email=$ok->email;
                    $name=$ok->name;
                    $gender=$ok->gender;
                    $dob=$ok->dob;
                }
            }
    ?>
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