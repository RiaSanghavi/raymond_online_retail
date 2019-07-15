
<?php
session_start();
$conn=mysqli_connect("localhost","root","","raymond");
$id=$_POST['id'];
// echo $id;

$user_id=$_SESSION['id'];

$sql1=mysqli_query($conn,"SELECT * from cart where user_id='$user_id' and pid='$id'");
$row1=mysqli_num_rows($sql1);
if($row1==1)
{
  echo"<script>alert('product already added'),window.location.href='shopping-cart.php'</script>";

}
else
{
	$sql=mysqli_query($conn,"select* from product where  pid='$id'");
$size=$_POST['size'];
$row=mysqli_fetch_array($sql);
$name=$row['pname'];
$price=$row['price'];
$discount=$row['discount'];
$image=$row['image'];

$sql_insert=mysqli_query($conn,"insert into cart (id,user_id,pid,pname,price,discount,size,quantity,image) values('','$user_id','$id','$name','$price','$discount','$size',1,'$image')");
if($sql_insert)
{
	echo "<script>alert('product added to cart'),
	window.location.href='shopping-cart.php'</script>";

}
else
{
	echo 'fail';
}
}
?>
