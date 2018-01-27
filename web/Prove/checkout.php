
<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="shop.css">

</head>
<html>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CEB Atelier</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="Shop.html">Shop</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="shop.php" class="btn btn-inverse btn-lg">
                        <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
// Echo session variables that were set on previous page

    $var = $_SESSION["list"];
    $wantedItems = array();
    $itemWanted = true;
    if(!empty($_POST["Remove"]) and !empty($var)){
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

    }
    elseif(empty($_POST["Remove"]) and !empty($var)){
        foreach ($var as $item){
            echo "<h1>".$item[1]."</h1><br>";
        }
    }
    else{
        echo "<h1>You have no items to checkout</h1><br>";
    }


?>
<a href="shop.php">cart</a>
</body>
</html>
