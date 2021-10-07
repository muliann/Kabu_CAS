<?php
$server='127.0.0.1:3307';
$username='root';
$password='';
$dbname='kabu_cas';
// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM y1s1 WHERE id=$id");
	$_SESSION['message'] = "Record deleted!"; 
	header('location: timetables.php');
}
?>