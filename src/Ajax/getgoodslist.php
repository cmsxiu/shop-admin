<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods:POST,GET");
	header("Access-Control-Allow-Headers:x-requested-with,content-type");
	header("Content-type:text/json;charset=utf-8");
	
	$pageindex = $_GET['pageindex'];
	
	$arr = [];
	$arr[0] = [
		"id" => 1,
		"title" => "赵美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "曾梦想仗剑走天涯，看一看世界的繁华，年少的心总有些轻狂，如今你四海为家",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl01.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[1] = [
		"id" => 2,
		"title" => "钱美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "曾让你心疼的姑娘，如今已悄然无踪影，爱情总让你渴望又感到烦恼，曾让你遍体鳞伤",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl02.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[2] = [
		"id" => 3,
		"title" => "孙美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，走在勇往直前的路上",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl03.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[3] = [
		"id" => 4,
		"title" => "李美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，有难过也有精彩",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl04.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[4] = [
		"id" => 5,
		"title" => "周美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "每一次难过的时候，就独自看一看大海，总想起身边走在路上的朋友，有多少正在疗伤",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl05.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[5] = [
		"id" => 6,
		"title" => "吴美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，不知多少孤独的夜晚",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl06.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[6] = [
		"id" => 7,
		"title" => "郑美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，从昨夜酒醉醒来",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl07.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[7] = [
		"id" => 8,
		"title" => "王美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "每一次难过的时候，就独自看一看大海，总想起身边走在路上的朋友，有多少正在醒来",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl08.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr[8] = [
		"id" => 9,
		"title" => "冯美眉",
		"add_time" => date("Y/m/d"),
		"zhaiyao" => "让我们干了这杯酒，好男儿胸怀像大海，经历了人生百态世间的冷暖，这笑容温暖纯真",
		"click" => 99,
		"img_url" => "http://it.cmsxiu.com/img/girl09.jpg",
		"sell_price" => 99999,
		"new_price" => 888,
		"stock_quantity" => 200
	];
	$arr = array_slice($arr, 0, (5 * $pageindex));
    $newslist = json_encode($arr);
	echo $newslist;

?>