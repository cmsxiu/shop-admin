<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods:POST,GET");
	header("Access-Control-Allow-Headers:x-requested-with,content-type");
	header("Content-type:text/json;charset=utf-8");
	$arr = [];
	$arr[0] = [
		"id" => 0,
		"title" => "赵美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl01.jpg",
		"zhaiyao" => "曾梦想仗剑走天涯，看一看世界的繁华，年少的心总有些轻狂，如今你四海为家"
	];
	$arr[1] = [
		"id" => 1,
		"title" => "钱美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl02.jpg",
		"zhaiyao" => "曾让你心疼的姑娘，如今已悄然无踪影，爱情总让你渴望又感到烦恼，曾让你遍体鳞伤"
	];
	$arr[2] = [
		"id" => 2,
		"title" => "孙美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl03.jpg",
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，走在勇往直前的路上"
	];
	$arr[3] = [
		"id" => 3,
		"title" => "李美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl04.jpg",
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，有难过也有精彩"
	];
	$arr[4] = [
		"id" => 4,
		"title" => "周美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl05.jpg",
		"zhaiyao" => "每一次难过的时候，就独自看一看大海，总想起身边走在路上的朋友，有多少正在疗伤"
	];
	$arr[5] = [
		"id" => 5,
		"title" => "吴美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl06.jpg",
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，不知多少孤独的夜晚",
	];
	$arr[6] = [
		"id" => 6,
		"title" => "郑美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl07.jpg",
		"zhaiyao" => "Dilililidilililidenda，Dilililidilililidada，Dilililidilililidada，从昨夜酒醉醒来",
	];
	$arr[7] = [
		"id" => 7,
		"title" => "王美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl08.jpg",
		"zhaiyao" => "每一次难过的时候，就独自看一看大海，总想起身边走在路上的朋友，有多少正在醒来",
	];
	$arr[8] = [
		"id" => 8,
		"title" => "冯美眉",
		"img_url" => "http://it.cmsxiu.com/img/girl09.jpg",
		"zhaiyao" => "让我们干了这杯酒，好男儿胸怀像大海，经历了人生百态世间的冷暖，这笑容温暖纯真",
	];
    $newslist = json_encode($arr);
	echo $newslist;

?>