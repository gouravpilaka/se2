<?php
header("Content-Type:application");
require "data.php";
echo "<br>";


if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$price = get_price($name);
	$avail = get_avail($name);
	$delv  = get_delv($name);
	$dema  = get_dema($name);

	if(empty($price))
	{
		response(200,"Product Not Found",NULL,NULL,NULL,NULL);
	}
	else
	{
		response(200,"Product Found", $price, $avail,$delv,$dema);
		
	}	
}
else
{
	response(400,"Invalid Request",NULL,NULL,NULL);
}

function response($status,$status_message,$data1,$data2,$data3,$data4)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['price']=$data1;
	$response['Availability']=$data2;
	$response['Expected Delivery']=$data3;
	$response['Demand']=$data4;

	
	$json_response = json_encode($response);
	echo $json_response;
}

?>



