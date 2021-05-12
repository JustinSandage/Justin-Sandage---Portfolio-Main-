<?php
	$db = new mysqli("localhost", "justinsandage", "Temp!e2021!", "notes_app");
	$notes = $db->prepare("SELECT note from notes");
	$notes->execute();
	$notes->store_result();
	$notes->bind_result($note);
	while($notes->fetch()) {
	   echo '<li class="li_note"><span class="note">' . $note. '</span></li><hr>';
	}
?>