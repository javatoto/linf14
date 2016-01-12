<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "My name is " . $_SESSION["name"] . ".<br>";
echo "My school is " . $_SESSION["school"] . ".";
?>

</body>
</html>