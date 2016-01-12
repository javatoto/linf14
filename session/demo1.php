<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Nhan";
$_SESSION["school"] = "PUF";
echo "Session variables are set.";
?>

</body>
</html>