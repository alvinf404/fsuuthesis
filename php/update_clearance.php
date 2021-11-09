<?php 
include('dbcon.php');
// $status = $_POST['status'];
$id = $_POST['id'];
$user_id = '1';

if($user_id == 1){
    echo json_encode($user_id);
    echo json_encode($id);
	$query = $conn->prepare("UPDATE tbl_student_clearance SET cashier = '1' WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:../index.php');	
}else{
    
}

?>