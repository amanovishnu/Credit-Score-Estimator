<!DOCTYPE html>
<html>
<head>
    <title>CIBIL | Login</title>
     <link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>

</body>
</html>
<?php
	//include "index.php";
	$connect=mysqli_connect('localhost','root','','cibil');
	if(mysqli_connect_errno($connect))
		echo 'failed to connect to database'. mysqli_connect_error();
	else
		//echo 'connected successfully';
	mysqli_query($connect,"insert into score(pannumber,first_name,last_name,bank_name,loan_amount,remarks,score,current_status) values ('BYVPA9555O','Manoj','Krishna','Canara Bank','500000','none','845','cleared')");
	$span=$_POST['span'];
	echo "<br>";
	//echo $span;
	
	$result=mysqli_query($connect,"select * from score where pannumber='$span'");
	$row=mysqli_fetch_array($result);
	?>
	<html>
	<div class="container">
		<p><b>PAN Number: <?php echo $row['pannumber'].'<br>';?></p>
		<p><b> Name: <?php echo $row['first_name'].' '.$row['last_name'].'<br>';?></p>
		<p><b>Bank Name: <?php echo $row['bank_name'].'<br>';?></p>
		<p><b> Loan Amount: <?php echo $row ['loan_amount'].'<br>';?></p>
		<p><b>Remarks: <?php echo $row['remarks'].'<br>';?></p>
		<p><b>Credit Score: <?php echo $row['score'].'<br>';?></p>
		<p><b>Current Status: <?php echo $row['current_status'].'<br>';?></p>
	</div>
	</html>
	


