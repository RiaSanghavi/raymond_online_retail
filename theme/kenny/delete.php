
<?php
$conn=mysqli_connect("localhost","root","","raymond");

	$id=$_GET['delete'];
	// print_r($id);
	$sql="delete from subcategory where id='$id'";
	$result=mysqli_query($conn,$sql);
	if($result)
{
	echo "<script>alert('success');
	 window.location.href='subcategory.php'
	</script>";
	;
}
else{
	echo "fail";
}

?>