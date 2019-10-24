<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods:POST,GET");
	header("Access-Control-Allow-Headers:x-requested-with,content-type");
	header("Content-type:text/json;charset=utf-8");
	$arr = [];
	$arr[0] = ["id" => 1, "name" => "轮播图1", "src" => "http://it.cmsxiu.com/img/1.jpg"];
	$arr[1] = ["id" => 2, "name" => "轮播图2", "src" => "http://it.cmsxiu.com/img/2.jpg"];
	$arr[2] = ["id" => 3, "name" => "轮播图3", "src" => "http://it.cmsxiu.com/img/3.jpg"];
	$arr[3] = ["id" => 4, "name" => "轮播图4", "src" => "http://it.cmsxiu.com/img/4.jpg"];
	$arr[4] = ["id" => 5, "name" => "轮播图5", "src" => "http://it.cmsxiu.com/img/5.jpg"];
	/*if ($carId && $carName) {	
		array_push($arr, ["id" => $carId, "name" => $carName, "ctime" => date("Y/m/d")]);
	}
	$carList = json_encode($arr);
    echo $carList;*/
    $lunbo = json_encode($arr);
	echo $lunbo;

?>