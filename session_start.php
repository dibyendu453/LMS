<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form action="session_2nd.php">
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";


?>
<input type="submit">
</form>

</body>
</html>