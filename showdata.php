<?php
$conn =mysqli_connect("localhost","id18025047_ssipmbs1234","Satria123&&&&","id18025047_ssipmbs123");

$sql="select * from mbs_quiz1";
    $all = mysqli_query($conn, $sql);//to execute the query
    $max = 0;
    $min = 0;
    $each = array();
    echo "<table style='text-align:center; margin:auto;' border='1'>";//showing the table
    echo "<th>VALUES</th><th>DELETE</th>";//value in row table
    
    while ($row = mysqli_fetch_assoc($all)) {//fetches a result row as an associative array.
    $el = explode(" ", $row["nilai"]);//make an array between string, and separated by "space"
    foreach ($el as $value) {//take all array by $value from $el
      array_push($each, $value);//insert all the $value to the array in $each
    }
    echo "<tr><td>".$row["nilai"]."</td><td><button onclick='deletedata(".$row['id'].");showdata()'>DELETE</button></td></tr>";// to show the nilai matrix and delete button
    }
    
    foreach ($each as $value) {
    if($max == 0 || $value>=$max) $max = $value;// to take max value in array $each
    if($min == 0 || $value<$min) $min = $value;// to take min value in array $each
    
    }
    echo "</table>";
    echo "<span style='font-size:22px; color:lightblue;'>Max = ".$max." </span>";//showing to the page of max value
    echo "<span style='font-size:22px; color:lightblue;'>Min = ".$min."</span>";//showing to the page of min value
?>