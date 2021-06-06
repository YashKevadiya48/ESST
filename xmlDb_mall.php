<?php
require("admin/connection.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


// Select all the rows in the markers table
$mall_id = $_GET['m_id'];
$query = "SELECT * FROM mall_details";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalid query: ');
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['mall_id'] . '" ';
  echo 'name="' . parseToXML($row['mall_name']) . '" ';
  echo 'address="' . parseToXML($row['mall_address']) . '" ';
  echo 'lat="' . $row['mall_latitude'] . '" ';
  echo 'lng="' . $row['mall_longitude'] . '" ';
  echo 'type="' . $row['type_id'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';

?>
