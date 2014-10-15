<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "Tere {$username}! Teie parool on {$password}";
?>
</body>
</html> 