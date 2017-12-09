<?php
	include 'connect.php';
	$pannumber = $_POST['pannumber']; //name varaiable should be used
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$bank_name = $_POST['bank_name'];
	$loan_amount = $_POST['loan_amount'];
	$sanctioned_date = $_POST['sanctioned_date'];
	$remarks = $_POST['remarks'];
	$score = $_POST['score'];
	$current_status = $_POST['current_status'];	
	echo $pannumber ." ". $first_name ." ".$last_name."</br>"; //.(dot) is concatenation operator
	$sql="insert into score(pannumber,first_name,last_name,bank_name,loan_amount,sanctioned_date,remarks,score,current_status) values('$pannumber','$first_name','$last_name','$bank_name','$loan_amount','$sanctioned_date','$remarks','score','current_status')";
	if(mysqli_query($conn,$sql)){
	echo "Records Inserted Successfully";
	} else {
		echo "ERROR : Could not able to execute $sql.".mysqli_error($conn);
	}
	CloseCon($conn);
?>