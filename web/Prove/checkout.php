
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
$var = $_SESSION["list"];
$wantedItems = array();
$itemWanted = true;

foreach ($var as $value){
    $itemWanted = true;
    foreach ($_POST['Remove'] as $item){
        if($value[0] == $item){
            $itemWanted = false;
        }
    }
    if($itemWanted){
        array_push($wantedItems,$value);
        echo "<h1>".$value[1]."</h1><br>";
    }
}
$_SESSION["list"] = $wantedItems;

?>

</body>
</html>
