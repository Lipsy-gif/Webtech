<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<?php 
     include 'showLogout.php';
?>
<a href="dashboard.php">Dashboard</a>
<a href="viewprofile.php">viewprofile</a>
<a href="edit.php">Edit Profile</a>
<a href="changephoto.php">Change Profile Picture</a>
<a href="changepassword.php">Change Password</a>
<a href="cart.php">view cart</a>

<?php  
 if(isset($_POST["FreshPotato"]))  
 { 
	$message = '';  
	$error = '';  
           if(file_exists('addCart.json'))  
           {  
                $current_data = file_get_contents('addCart.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     'Fresh Potato',  
                     'price'          =>     '20'
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('addCart.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Add to cart</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        
 }
 else if(isset($_POST["FreshBrinjal"]))  
 { 
	$message = '';  
	$error = '';  
           if(file_exists('addCart.json'))  
           {  
                $current_data = file_get_contents('addCart.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     'Fresh Brinjal',  
                     'price'          =>     '40'
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('addCart.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Add to cart</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        
 }  
 else if(isset($_POST["FreshChicken"]))  
 { 
	$message = '';  
	$error = '';  
           if(file_exists('addCart.json'))  
           {  
                $current_data = file_get_contents('addCart.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     'Fresh Chicken',  
                     'price'          =>     '250'
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('addCart.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Add to cart</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        
 } 
 else if(isset($_POST["FreshMeat"]))  
 { 
	$message = '';  
	$error = '';  
           if(file_exists('addCart.json'))  
           {  
                $current_data = file_get_contents('addCart.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     'Fresh Meat',  
                     'price'          =>     '550'
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('addCart.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Add to cart</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        
 } 
 else if(isset($_POST["OrganicSpices"]))  
 { 
	$message = '';  
	$error = '';  
           if(file_exists('addCart.json'))  
           {  
                $current_data = file_get_contents('addCart.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     'Organic Spices',  
                     'price'          =>     '100'
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('addCart.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Add to cart</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
        
 } 
 
 ?>

<fieldset style="margin-top: 3rem;">

                <legend align="center">
                    <span> <h1>Product List</h1></span>
               </legend>
<h3><?php  
	if(isset($message))  
	{  
		echo $message;  
	} 
	
?> <hr> </h3>
				<form method="post">  
					<div class="product_box">
						<div class="list_page_box">
							<div class="product_main_box">
								
								<p class="p_name">Fresh Potato</p>
								<p class="p_price">
									
									<span title="Sale Price" class="s_price">20tk</span>
								</p>
								<input type="submit" name="FreshPotato" value="Add to cart"  />
							</div>
							<hr>
							<div class="product_main_box">
								
								<p class="p_name">Fresh Brinjal</p>
								<p class="p_price">
									
									<span title="Sale Price" class="s_price">30tk</span>
								</p>
								<input type="submit" name="FreshBrinjal" value="Add to cart"  />
							</div>
							<hr>
							<div class="product_main_box">
								
								<p class="p_name">Fresh Chicken</p>
								<p class="p_price">
									
									<span title="Sale Price" class="s_price">250tk</span>
								</p>
								<input type="submit" name="FreshChicken" value="Add to cart"  />
							</div>
							<hr>
							<div class="product_main_box">
								
								<p class="p_name">Fresh Meat</p>
								<p class="p_price">
									
									<span title="Sale Price" class="s_price">550tk</span>
								</p>
								<input type="submit" name="FreshMeat" value="Add to cart"  />
							</div>
							<hr>
							<div class="product_main_box">
								
								<p class="p_name">Organic Spices</p>
								<p class="p_price">
									
									<span title="Sale Price" class="s_price">100tk</span>
								</p>
								<input type="submit" name="OrganicSpices" value="Add to cart"  />
							</div>
							
						</div>
						
					</div>
				</form>
            </fieldset>


</body>
</html>