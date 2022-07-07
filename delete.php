<?php
if(isset($_POST['data'])) $data = $_POST['data'];//isset to check if the isset is null or filled, if filled then variable $data will be stored to the value of $post['data']
$conn =mysqli_connect("localhost","id18025047_ssipmbs1234","Satria123&&&&","id18025047_ssipmbs123");//connect sql
$sql = "delete from mbs_quiz1 where id='$data' ";
mysqli_query($conn,$sql);//function to execute query on the database

echo "data has been deleted";
?>