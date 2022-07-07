<?php
    $conn =mysqli_connect("localhost","id18025047_ssipmbs1234","Satria123&&&&","id18025047_ssipmbs123");//connection to database
    if(!$conn)
    {
        exit("not connected");//if not connect then exit the program
    }
    $a1=$_POST["a1"];// take value from post 
    $a2=$_POST["a2"];
    $a3=$_POST["a3"];
    $a4=$_POST["a4"];
    $a5=$_POST["a5"];
    $a6=$_POST["a6"];
    $a7=$_POST["a7"];
    $a8=$_POST["a8"];
    $a9=$_POST["a9"];
    $a10=$_POST["a10"];
    $a11=$_POST["a11"];
    $a12=$_POST["a12"];
    
    $m1 = array(2,2,3);//static matrix1 value 
    $m2 = array(array($a1,$a2,$a3,$a4),
                array($a5,$a6,$a7,$a8),
                array($a9,$a10,$a11,$a12));//matrix2 value
    $res = array();//result for the matrix 
    for($i = 0; $i<4; $i++)
    {
        $n = array($m2[0][$i],$m2[1][$i],$m2[2][$i]);
        $mult = 0;
        for($j=0; $j<3; $j++)
        {
            $mult += $n[$j]*$m1[$j];
            if($j == 2)
            {
                array_push($res,$mult);// masukin value ke array res
            }
        }
    }
    $data = implode(" ", $res);//break the string into array
    $sql="INSERT INTO mbs_quiz1(nilai) VALUES('$data')";
    mysqli_query($conn, $sql) or die(mysqli_error());//mysqli_error is a function returns the last error description for the most recent function call
    echo $data."<br>";
?>