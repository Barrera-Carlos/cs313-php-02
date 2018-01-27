
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

foreach ($_POST['remove'] as $item){
    echo "<h1>".$item."</h1><br>";
    /*foreach ($var as $value){
        if($item == $value[0]){
            array_push($wantedItems,$value);
            echo "<h1>".$value[1]."</h1><br>";
        }
    }*/
    #$_SESSION["list"] = $wantedItems;
}

?>

</body>
</html>
