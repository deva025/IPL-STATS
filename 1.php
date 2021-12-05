<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['country']);
    if ($name=="au") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,runs,HS,avg,SR,hundreds,fiftys,fours,sixes FROM `srh`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>

<th>inns</th>
<th>runs</th>

<th>HS</th>
<th>avg</th>

<th>SR</th>
<th>hundreds</th>

<th>fifty</th>
<th>fours</th>

<th>sixes</th>

</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["runs"]."</td><td>".$row["HS"]."</td><td>".$row["avg"]."</td><td>".$row["SR"]."</td><td>".$row["hundreds"]."</td><td>".$row["fiftys"]."</td><td>".$row["fours"]."</td><td>".$row["sixes"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['country']);
    if ($name=="usa") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,runs,HS,avg,SR,hundreds,fiftys,fours,sixes FROM `srh`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>

<th>inns</th>
<th>runs</th>

<th>HS</th>
<th>avg</th>

<th>SR</th>
<th>hundreds</th>

<th>fifty</th>
<th>fours</th>

<th>sixes</th>

</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["runs"]."</td><td>".$row["HS"]."</td><td>".$row["avg"]."</td><td>".$row["SR"]."</td><td>".$row["hundreds"]."</td><td>".$row["fiftys"]."</td><td>".$row["fours"]."</td><td>".$row["sixes"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>

