<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View cart</title>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    }
    table{
        margin: 50px;
    }
    </style>
</head>
<body>
    <?php
       if(isset($_POST["order"]))
       {
        header("location:payment.php");
       } 
    ?>
    <a href="dashboard.php">Dashboard</a>
    <a href="viewprofile.php">viewprofile</a>
    <a href="edit.php">Edit Profile</a>
    <a href="changephoto.php">Change Profile Picture</a>
    <a href="changepassword.php">Change Password</a>
    <a href="cart.php">view cart</a>
    <a href="logout.php">Log out</a>
    <center>
        <h2>Add cart</h2>
        <form method="post"> 
            <table>
                <tr>
                <th>Name</th>
                <th>Price</th>
                </tr>
                <?php
                $dtls = file_get_contents('addCart.json');
                $dtlsok = json_decode($dtls);
                    $total_price=0;
                    foreach($dtlsok as $ok)
                    {
                    
                        $name=$ok->name;
                        $price=$ok->price;
                        $total_price+=(int)$price;
                        echo "<tr>";
                        echo "<td>$name</td>";
                        echo "<td>$price</td>";
                        echo "</tr>";
                        
                        
                        
                    }
                    echo "<tr>";
                    echo "<td>Total Price</td>";
                    echo "<td>$total_price</td>";
                    echo "</tr>";
                
                ?>
            </table>
            <input type="submit" name="order" value="Buy Now"  />
        </form>
    </center>
</body>
</html>

