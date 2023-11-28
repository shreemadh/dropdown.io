<?php 
$country=$_GET["country"];

//simulate fetching cities based on the selected country
if ($country==="usa") {
    $cities=array("New York","Los Angeles", "Chicago");
} elseif($country ==="canada") {
    $cities=array("Torronto", "Vancouver", "Montreal");
}
elseif($country ==="india") {
    $cities=array("ullhasnagar", "bedhra", "karkala");
}else {
    $cities = array();
}

echo json_encode($cities);
?>