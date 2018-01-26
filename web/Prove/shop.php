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

    <script>
    function remove(node) {
        node.parentNode.removeChild(node);
    }
    </script>

    <style>
    #UlistStyle{
        list-style-type: none
    }

    #ListStyle:nth-child(even){
         background-color: #f2f2f2
    }
    </style>

</head>
<html>
<body>
  <nav class="navbar navbar-inverse navbar-static-top ">
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
          <li><a href="#">CS-313</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
/*need to make this into a multi dimensional array to add a total to the shopping cart
$itemDesctiption = array( "10" => "Gundam nadleeh $12.50", "2"=>"Gundam Exia $15.66",
"3" =>"Transient Gundam $23.99", "4"=>"Transient Gundam Glacier $23.99", "7"=>" Gundam Vidar 18.50",
 "5"=>"Kimaris vidar $23.99");*/

$itemDesctiption = array(
        array("10","Gundam nadleeh $12.50",12.50),
        array("2","Gundam Exia $15.66",15.66),
        array("3","Transient Gundam $23.99",23.99),
        array("4","Transient Gundam Glacier $23.99",23.99),
        array("7"," Gundam Vidar 18.50",18.50),
        array("5","Kimaris vidar $23.99",23.99));


if (is_array($_POST['Item'])) {
    $_SESSION["totalPrice"] = 0;
    $gundamIdNumberLocation = 0;
    $gundamDescriptionLocation = 1;
    $gundamPriceLocation = 2;
    $totalPriceVar = 0;

    echo "<ul id=\"UlistStyle\">";
    foreach($_POST['Item'] as $value){
        for($row = 0; $row < 6; $row++){
            if($value == $itemDesctiption[$row][$gundamIdNumberLocation])
            {
                echo "<li id=\"ListStyle\">".$itemDesctiption[$row][$gundamDescriptionLocation].
                    "<button onclick=\"remove(this.parentNode)\">Remove this Item</button></li>";

                $totalPriceVar += $itemDesctiption[$row][$gundamPriceLocation];
            }
        }

      }
        echo "</ul>";
  }

echo "<button>".$totalPriceVar."</button>"

?>

</body>
</html>
