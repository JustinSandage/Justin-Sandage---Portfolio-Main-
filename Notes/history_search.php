<?php
	header('Content-Type: application/json');
if (isset($_GET['term'])){
    
    $conn = mysqli_connect ('localhost', 'root', '', 'notes_kb');

	$term = mysqli_real_escape_string($conn, $_GET['term']);
	$sql = ("SELECT * FROM notes WHERE note LIKE '%$term%' ");
	$products = mysqli_query($conn, $sql);

	$return_arr = array();

	while($row = mysqli_fetch_array($products)) {
		$return_arr[] = '<div class="results_task">' . $row['note'] . ':</div><div class="results_kb">' . $row['kb'] . '</div>';
	}
    echo json_encode(array_slice($return_arr, 0, 5));
}
    /*$conn = mysqli_connect ('localhost', 'root', '', 'bidassist');
	$sql = ("SELECT product FROM products");
	$products = mysqli_query($conn, $sql);

	$return_arr = array();

	while($row = mysqli_fetch_array($products)) {
		$return_arr[] = $row['product'];
	}
    echo json_encode($return_arr);*/
	

?>
