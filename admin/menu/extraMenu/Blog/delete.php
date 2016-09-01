<?php
	session_start();
		if($_SESSION['block'] != true){
			header('Location: ../../../../index.php');
		}

	
include '../../../../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM blogMenu WHERE id=".$id;
$query = mysqli_query($connect, $sql);

if($query){
	header("Location: ../changeMenuInExtra.php");
}else{
	echo 'Data not delete';
}