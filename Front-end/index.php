<!DOCTYPE html>
<html>
<head>
<?php 
require_once "php/config.php";
?>
<title>Focal-Fortuna</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="bower_components/datamaps/dist/datamaps.world.min.js"></script>
<script src="script.js"></script>
</head>
<body> <!-- Move delay ensures bar moves-->

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  
  
<div class="headerBar flexer">
  <div class = "links">
  <a href="about.php">About</a>
  </div>
</div>

<div class="filter">
<button type="button" onclick='togglehide()'>ToggleView</button>
</div>

<div class="MapItems">
Yooo Im a map 8)
<script>
    var map = new Datamap({element: document.getElementByClass('MapItems')});
</script>
</div>

<div class = "ListItems">  
<?php 

$sql = "SELECT FundID, FundName, FundLevel, FundDesc FROM fundtable";
$result = $conn->query($sql); 

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = mysqli_fetch_array($result)){
    echo "
    <div class=\"Goal\">
    <a href=\"fund.php?fund=".$row["FundID"]."\">
      <h1>".$row["FundName"]."</h1>
      <div class=\"ProgressBar\">
        <div class=\"myBar\" id = \"myBar".$row["FundLevel"]."\"><script>moveSelf(".$row["FundLevel"].")</script></div>
      </div>

       <h2>".$row["FundDesc"]."</h2>    

    </a>
    </div>";
  } 
}else {
  echo "<h1>We can't see any current funds! Maybe you would like to start one?</h1>";
}

?>



</div>

<div class="PoweredBy">
    
</div>
</body>
</html>
