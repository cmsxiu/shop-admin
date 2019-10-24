<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods:POST,GET");
	header("Access-Control-Allow-Headers:x-requested-with,content-type");
	header("Content-type:text/json;charset=utf-8");
	$arr = [];
	$arr[0] = [
		"id" => 1,
		"title" => "习近平接见联勤保障部队第一次党代会代表",
		"add_time" => "2019/10/20 07:12",
		"zhaiyao" => "中共中央总书记、国家主席、中央军委主席习近平18日在武汉分别接见了联勤保障部队第一次党代表大会全体代表、驻湖北部队副师职以上领导干部和团级单位主官。",
		"click" => 58,
		"src" => "https://ss0.bdstatic.com/70cFvHSh_Q1YnxGkpoWK1HF6hhy/it/u=1874481526,2699785182&fm=26&gp=0.jpg"
	];
	$arr[1] = [
		"id" => 2,
		"title" => "轮播习近平向首届跨国公司领导人青岛峰会致贺信图2",
		"add_time" => "2019/10/20 07:32",
		"zhaiyao" => "首届跨国公司领导人青岛峰会19日在山东青岛召开，国家主席习近平致贺信。",
		"click" => 58,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=4112883040,3627682052&fm=26&gp=0.jpg"
	];
	$arr[2] = [
		"id" => 3,
		"title" => "国际锐评  妥善解决双方核心关切  军运会",
		"add_time" => "2019/10/20 07:42",
		"zhaiyao" => "10月19日早上，2019世界VR产业大会在南昌开幕。中共中央政治局委员、国务院副总理刘鹤出席并发表讲话。",
		"click" => 58,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=2542206797,3472110949&fm=26&gp=0.jpg"
	];
	$arr[3] = [
		"id" => 4,
		"title" => "\"六稳\"到底稳不稳? 世界更懂中国经济定力",
		"add_time" => "2019/10/20 07:52",
		"zhaiyao" => "国家统计局今天公布三季度主要经济数据，从GDP增速来看，前三季度同比增长6.2%，其中三季度增长6.0%，尽管和上半年相比有所放缓，但仍处于宏观调控的目标区间之内。",
		"click" => 58,
		"src" => "https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=3303768024,118799975&fm=26&gp=0.jpg"
	];
	$arr[4] = [
		"id" => 5,
		"title" => "中美推敲“第一阶段”协议细节 中方促美取消全部加税",
		"add_time" => "2019/10/20 07:58",
		"zhaiyao" => "据美国《新闻周刊》网站10月17日报道称，自特朗普总统日前宣布两国将很快签署初步协议以来，美中达成的“第一阶段”贸易协议所带来的希望一直起伏不定。",
		"click" => 58,
		"src" => "https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=1096962694,264512497&fm=26&gp=0.jpg"
	];
	$arr[5] = [
		"id" => 6,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[6] = [
		"id" => 7,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[7] = [
		"id" => 8,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[8] = [
		"id" => 9,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[9] = [
		"id" => 10,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[10] = [
		"id" => 11,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[11] = [
		"id" => 12,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[12] = [
		"id" => 13,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[13] = [
		"id" => 14,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[14] = [
		"id" => 15,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	$arr[15] = [
		"id" => 16,
		"title" => "2019海归就业报告：理工科薪酬突出 新一线城市吸引力巨大",
		"add_time" => "2019/10/20 7:49",
		"zhaiyao" => "据最新数据显示，在大量归国就业的留学人员中，理工科专业海归薪资普遍高于商科等专业，技术研发类人才最受雇主青睐，而新一线城市对海归就业人员的吸引力“直逼”北上广深。",
		"click" => 99,
		"src" => "https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3159789704,306243264&fm=11&gp=0.jpg"
	];
	/*if ($carId && $carName) {	
		array_push($arr, ["id" => $carId, "name" => $carName, "ctime" => date("Y/m/d")]);
	}
	$carList = json_encode($arr);
    echo $carList;*/
    $newslist = json_encode($arr);
	echo $newslist;

?>