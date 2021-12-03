<?php 
     include 'showLogout.php';
?>
<?php require_once './controller/viewController.php';?>
<?php require_once './controller/editController.php';?>
 <!DOCTYPE html>  
 <html>  
<head>  
     <title>Edit Profile</title>   
</head>  
<body>  
     <center>
          <fieldset>
               <legend align="center">
                    <span> <h1>Edit Profile</h1></span>
               </legend>                
                    <form method="post">  
                         <?php   
                         if(isset($error))  
                         {  
                              echo $error;  
                         }  
                         ?>  
                         <br />  
                         <label>Name:</label>  
                         <input type="text" name="name" class="form-control" value="<?php echo $name?>"/><br><hr>  
                         <label>Email:</label>  
                         <input type="text" name="email" class="form-control" value="<?php echo $email?>"/><br><hr>
                         <label>User Name:</label>  
                         <input type="text" name="username" class="form-control" value="<?php echo $username?>"/><br><hr>
                         <label>Password:</label>  
                         <input type="password" name="password" class="form-control" value="<?php echo $password?>"/><br><hr>  
                         <label>Confirm Password:</label>  
                         <input type="password" name="cpassword" class="form-control" value="<?php echo $password?>"/><br><hr> 
                         <label>Gender:</label>     
                         <input class="form-control" name = "gender" type="text" value="<?php echo $gender?>">
                         <br><hr>
                         <label>Date of birth: </label>  
                         <input type="date" name="dob" value="<?php echo $dob?>">
                         <br><hr>
                         <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                         <?php  
                         if(isset($message))  
                         {  
                              echo $message;  
                         }  
                         ?>  
                    </form> 
          </fieldset>
    </center>
           
      </body>  
 </html>