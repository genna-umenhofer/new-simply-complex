<?php
include('dbc.inc.php');

$email = $_POST['email'];

$sql = "INSERT INTO email_list (email) VALUES ('$email')";

mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: ../pages/joined.php");