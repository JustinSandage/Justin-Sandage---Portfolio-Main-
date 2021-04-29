<?php
if(isset($_POST['note'], $_POST['kb_note'])){
	$note = $_POST['note'];
	$kb_note = $_POST['kb_note'];
	$db = mysqli_connect('localhost', 'root', '', 'notes_kb');
	$sql = "UPDATE notes SET kb = '$kb_note', display = 'no' WHERE BINARY note = '$note'";
	mysqli_query($db, $sql);
}
?>