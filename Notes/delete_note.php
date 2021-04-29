<?php
if(isset($_POST['note'])){
	$note = $_POST['note'];
	$db = mysqli_connect('localhost', 'justinsandage', 'Temp!e2021!', 'notes_app');
	$sql = "UPDATE notes SET display = 'no' WHERE BINARY note = '$note'";
	mysqli_query($db, $sql);
	echo $note;
}
?>