<?php
if(isset($_FILES['photo']['name'])){//photo is the variable name, name is the key
    if ($_FILES['photo']["size"] > 40000) {
      exit("File must be below 40kb");
    }
    if(strtolower(pathinfo("foto/".$_FILES['photo']['name'],PATHINFO_EXTENSION)) != "png") {//set the path to save the file
    //returns only the last extension, if the path has more than one extension. and it must be PNG
      exit("File must be png type");
    }
    
	$filename = $_FILES['photo']['name'];//get variable of file image
	$location = 'foto/'.$filename;//set the path to save the file
	if(move_uploaded_file($_FILES['photo']['tmp_name'],$location)){// move the file that we send to the path we declared
	    echo "Upload file succeed";
	}
}
?>