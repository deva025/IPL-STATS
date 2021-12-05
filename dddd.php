<!DOCTYPE html>
<html>
<head>
 <title>table with database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQORibdtGEl6Ld5w5M3a_dTgcbJSTyl48zv9A&usqp=CAU");
 background-size: cover;
  opacity: 0.7;
}

table {
  border-collapse: collapse;
  width: 100%;
  opacity: 1;
}

th, td {
  text-align: left;
  padding: 8px;
}
table, th, td {
  border: 1px solid black;
}
tr:nth-child(even){background-color:#f2f2f2

}


th {
  background-color: #4CAF50;
  color: blue;
 text-align: center;
height: 40px;
}
table {
  border-collapse: collapse;
  width: 100%;
}
table.center {
  margin-left: auto; 
  margin-right: auto;

td {
  text-align: center;
}
</style>
</head>
<body >
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="srh") {
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
<br>
<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="srh") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,ov,wkts,bbi,avg,eco FROM `srhbo`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>

<th>inns</th>
<th>ov</th>

<th>wkts</th>
<th>bbi</th>

<th>avg</th>
<th>eco</th>


</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["ov"]."</td><td>".$row["wkts"]."</td><td>".$row["bbi"]."</td><td>".$row["avg"]."</td><td>".$row["eco"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="csk") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,ov,wkts,bbi,avg,eco FROM `cskbo`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>


<th>ov</th>

<th>wkts</th>
<th>bbi</th>

<th>avg</th>
<th>eco</th>


</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["ov"]."</td><td>".$row["wkts"]."</td><td>".$row["bbi"]."</td><td>".$row["avg"]."</td><td>".$row["eco"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<br>
<br>
<br>
<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="csk") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,runs,hs,avg,sr,hundred,fiftys,fours,sixes FROM `csk`";
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
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["runs"]."</td><td>".$row["hs"]."</td><td>".$row["avg"]."</td><td>".$row["sr"]."</td><td>".$row["hundred"]."</td><td>".$row["fiftys"]."</td><td>".$row["fours"]."</td><td>".$row["sixes"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="dc") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,runs,hs,avg,sr,100,50,4,6 FROM `dc`";
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
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["runs"]."</td><td>".$row["hs"]."</td><td>".$row["avg"]."</td><td>".$row["sr"]."</td><td>".$row["100"]."</td><td>".$row["50"]."</td><td>".$row["4"]."</td><td>".$row["6"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>

<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="dc") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,ov,wkts,bbi,avg,eco FROM `dcbo`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>


<th>ov</th>

<th>wkts</th>
<th>bbi</th>

<th>avg</th>
<th>eco</th>


</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["ov"]."</td><td>".$row["wkts"]."</td><td>".$row["bbi"]."</td><td>".$row["avg"]."</td><td>".$row["eco"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="kkr") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,ov,wkts,bbi,avg,eco FROM `kkrbo`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>


<th>ov</th>

<th>wkts</th>
<th>bbi</th>

<th>avg</th>
<th>eco</th>


</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["ov"]."</td><td>".$row["wkts"]."</td><td>".$row["bbi"]."</td><td>".$row["avg"]."</td><td>".$row["eco"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<br>
<br>
<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="kkr") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,runs,hs,avg,sr,100,50,4,6 FROM `kkr`";
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
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["runs"]."</td><td>".$row["hs"]."</td><td>".$row["avg"]."</td><td>".$row["sr"]."</td><td>".$row["100"]."</td><td>".$row["50"]."</td><td>".$row["4"]."</td><td>".$row["6"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="rr") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,inns,runs,hs,avg,sr,100,50,4,6 FROM `rr`";
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
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["inns"]."</td><td>".$row["runs"]."</td><td>".$row["hs"]."</td><td>".$row["avg"]."</td><td>".$row["sr"]."</td><td>".$row["100"]."</td><td>".$row["50"]."</td><td>".$row["4"]."</td><td>".$row["6"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<br>
<br>
<br>
<br>
<br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="rr") {
$conn = mysqli_connect('localhost','pgeverytime','','dbmsproject');
$query = "SELECT pos,player,mat,ov,wkts,bbi,avg,eco FROM `rrbo`";
$result = mysqli_query($conn,$query);
echo "<table border='1'>
<tr>
<th>pos</th>

<th>player</th>
<th>mat</th>


<th>ov</th>

<th>wkts</th>
<th>bbi</th>

<th>avg</th>
<th>eco</th>


</tr>";



if($result-> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
 echo "<tr><td>".$row["pos"]."</td><td>".$row["player"]."</td><td>".$row["mat"]."</td><td>".$row["ov"]."</td><td>".$row["wkts"]."</td><td>".$row["bbi"]."</td><td>".$row["avg"]."</td><td>".$row["eco"]."</td></tr>";
}
}
 echo "</table>";

}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);

    if ($name=="mi") {
     echo "<p align='center'> <font color=blue size='6pt'>MI  TEAM STATS ARE NOT AVALIBLE IN OUR DATABASE </font> </p>";
   



}
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="rcb") {
     echo "<p align='center'> <font color=blue size='6pt'>RCB  TEAM STATS ARE NOT AVALIBLE IN OUR DATABASE </font> </p>";
   



}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="kxip") {
     echo "<p align='center'> <font color=blue size='6pt'>KXIP  TEAM STATS ARE NOT AVALIBLE IN OUR DATABASE </font> </p>";
   



}
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['name']);
    if ($name=="") {
     echo "<p align='center'> <font color=blue size='6pt'>PLEASE ENTER A VALID TEAM </font> </p>";
   



}
}
?>
<br>
<br>
<br>
</body>
</html>