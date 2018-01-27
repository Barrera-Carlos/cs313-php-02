
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
$var = $_SESSION["list"];
foreach ($var as $value){
    echo "<h1>".$value[1]."</h1><br>";
}
?>

</body>
</html>
