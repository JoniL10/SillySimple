<?php
header('Content-Type: text/html; charset=utf-8');
$q = intval($_GET['q']);

$con = mysqli_connect('db4free.net','joni10','botnia','joni10');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
  echo 'Virhe';
}
else{
echo 'onnistui!';
}

mysqli_select_db($con,"testitaulu");
$result = mysqli_query($con,"SELECT * FROM testitaulu WHERE id=$q");

while($row = mysqli_fetch_array($result)) {
  echo $row['nimi'];
  echo ', ';
 echo $row['ika'];
}
echo '  -lopussa!';


mysqli_close($con);
?> 