
<?php
    require_once './controller/loginController.php';
?>

<h1>Welcome Tinker</h1>
    <a href="login.php">Login</a>
    <a href="registration.php">Registration</a><br><hr>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table align="center">
		
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
		</tr>
	</table>
	
</form>