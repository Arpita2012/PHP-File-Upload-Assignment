<?php 

	//this program saves file in directories identified by year/month/day/hour/minute/second 
	//getting directory structure

	$year=date("Y");
	$month = date("F");
	$day = date("d");
	$hr = date("h");
	$min = date("i");
	$sec = date("sa");
	

	$dir="$year/$month/$day/$hr/$min/$sec";
	

	//check if this dir already exist 
	if(!is_dir($dir))
	{
		mkdir($dir,755,true); //create dir if doesn't exist
	}
	

	$filearr= $_FILES["myfile"];
    
    //saving file to appropriate directory
	move_uploaded_file($filearr["tmp_name"], "$dir/".$filearr["name"]);

	echo "File Uploaded at $dir";
	?>