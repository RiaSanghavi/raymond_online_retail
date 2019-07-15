

<?php
$conn=mysqli_connect("localhost","root","","raymond");

if(isset($_POST['update']))
{
  $id =$_GET['id'];
    $quantity=$_POST['quantity'];
  $sql="update cart set quantity='$quantity' where id='$id'";
  
   $result=mysqli_query($conn,$sql);
    if($result)
    {
        
        header("Location: shopping-cart.php");
    }
    else{

        echo "fail";
    }
}
?>