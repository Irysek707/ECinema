<?php # CONNECT TO MySQL DATABASE.

# Connect on 'localhoast' for user to database.
$link = mysqli_connect('localhost', 'User', 'password', 'host');
if (!$link) {
	# Otherwise fail gracefully and explain the error.
	die('Could not connect to MySQL: ' . mysqli_error());
}
?>