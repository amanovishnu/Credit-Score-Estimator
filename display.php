<?php
	include "connect.php";
	$pannumber=$_POST['s_id'];
	echo "<br>";
	echo $pannumber;
	$sql="select pannumber,first_name,last_name,bank_name,loan_amount,sanctioned_date,remarks,score,current_status from score where pannumber='s_id'";
	$result = $conn->query($sql); 
	while($row = mysqli_fetch_array($result))
	{
		echo"</br> Student id:". $row['pannumber'];
		echo"</br> Student name:". $row['first_name'];
		echo"</br> Student Address:". $row['last_name'];
	}
?>

