<!DOCTYPE html>
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="shop.css">

    <style>
    #ListStyle{
        list-style-type: none
    }

    li:nth-child(even){
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
          <li class="active"><a href="../mainPage.html">Home</a></li>
          <li><a href="../CS313ProjectPage.html">CS-313</a></li>
        </ul>
      </div>
    </div>
  </nav>

<?php
/*need to make this into a multi dimensional array to add a total to the shopping cart*/
$itemDesctiption = array( "10" => "Gundam nadleeh $12.50", "2"=>"Gundam Exia $15.66",
"3" =>"Transient Gundam $23.99", "4"=>"Transient Gundam Glacier $23.99", "7"=>" Gundam Vidar 18.50",
 "5"=>"Kimaris vidar $23.99");


if (is_array($_POST['Item'])) {
    echo "<ul id=\"ListStyle\">";
    foreach($_POST['Item'] as $value){

        $p = $itemDesctiption[$value];
        echo "<li>$p</li>";

      }
        echo "</ul>";
  }


 /*if (is_array($_POST['Item'])) {
    echo "<ul style=\"list-style-type: none\">";
    foreach($_POST['Item'] as $value){

        $p = $itemDesctiption[$value];
        echo "<li>$p</li>";

      }
        echo "</ul>";
  }*/


  /*echo "<table id=\"cartTable\">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
</table>
"*/
?>

</body>
</html>
