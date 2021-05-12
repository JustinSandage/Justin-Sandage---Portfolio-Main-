<?php
if(isset($_POST['note'])){
	$note = $_POST['note'];
	$db = new mysqli('localhost', 'justinsandage', 'Temp!e2021!', 'notes_app');
	$sql = $db->prepare("DELETE FROM notes WHERE BINARY note = ?");
	$sql->bind_param('s', $note);
	$sql->execute();
	echo $note;
}
?>