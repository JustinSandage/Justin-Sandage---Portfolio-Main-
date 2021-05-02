<?php
	$db = mysqli_connect("localhost", "justinsandage", "Temp!e2021!", "notes_app");
	$notes = "SELECT note from notes";
	$result = mysqli_query($db, $notes);
	while($row = mysqli_fetch_array($result)) {
	   echo '<li class="li_note"><span class="note">' . $row['note'] . '</span></li><hr>';
	}
?>