<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Distance Calculation</title>
  <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class='position'>
<h1>Distance Calculation</h1>
<?php
# Our Current Location
$location = ['51.301819','-0.337613'];

$link = mysqli_connect("localhost","root","","postboxes");

$Lat = $location[0];
$Lng = $location[1];
$result = $link->query("SELECT *, ( 6371 * acos( cos( radians('$Lat') ) * cos( radians( lat ) ) 
* cos( radians( lng ) - radians('$Lng') ) + sin( radians('$Lat') ) * sin(radians(lat)) ) ) AS distance 
FROM boxes
ORDER BY distance 
LIMIT 0 , 10");

$output = "<table border='1' cellpadding='10'>";
while($row = mysqli_fetch_array($result)) {
  $output .= "<tr>";
    $output .= "<td>".$row['category']."</td>";
    $output .= "<td>".$row['type']."</td>";
    $output .= "<td>".$row['location']."</td>";
    $output .= "<td>".$row['depot']."</td>";
    $output .= "<td>".$row['outcode']."</td>";
    $output .= "<td>Collected At: ".$row['collection']."</td>";
    $distance = number_format((float)($row['distance']*1000), 4, '.', '');
    $output .= "<td>distance: ".$distance." metre </td>";
  $output .= "</tr>";
}

echo $output;
?>
</div>
</body>
</html>
