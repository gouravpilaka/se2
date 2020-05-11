<?php

function get_price($name)
{
	$products = [
		"clove"=>27,
		"rub"=>57,
		"chilli"=>43			
	];
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}

function get_avail($name)
{
	$products = [
		"clove"=>"In Stock",
		"rub"=>"Out of Stock",
		"chilli"=>"In Stock"			
	];
	
	foreach($products as $product=>$avail)
	{
		if($product==$name)
		{
			return $avail;
			break;
		}
	}
}

function get_delv($name)
{
	$products = [
		"clove"=>"05-14-2020",
		"rub"=>"NULL",
		"chilli"=>"05-17-2020"			
	];
	
	foreach($products as $product=>$delv)
	{
		if($product==$name)
		{
			return $delv;
			break;
		}
	}
}

function get_dema($name)
{
	$products = [
		"clove"=>"Moderate",
		"rub"=>"High",
		"chilli"=>"Low"			
	];
	
	foreach($products as $product=>$dema)
	{
		if($product==$name)
		{
			return $dema;
			break;
		}
	}
}



?>

