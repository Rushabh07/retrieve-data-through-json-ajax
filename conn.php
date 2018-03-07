<?php
	
	$connect = mysqli_connect('localhost','rishi','welcome123', 'internal1');
 	
 	$query = "SELECT * FROM `mytb`";
 	$res = mysqli_query($connect,$query);
 	$data_array = array(); 

 	while($rows =mysqli_fetch_assoc($res)) 
 		{ 
 			$data_array[] = $rows; 
 		} 

 	$fp = fopen('studRecords.json', 'w'); 
 	
 	if(!fwrite($fp, json_encode($data_array))) 
 	{
	 	 die('Error : File Not Opened. ' . mysql_error()); 
 	} 
 	else
 	{ 
 		echo "Data Retrieved Successully!!!"; 
 	} 
 	
 	fclose($fp); 
 	mysqli_close($connect); 
 ?>
