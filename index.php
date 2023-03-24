<?php
// creation de lAPI 
$endpoints = [
	"/scuffed"=>function(){
		echo "ok";
	},
	"/post" => function(){
		echo "ok";
	},
];

$baseur1 ="/twitter/";
$_REQUEST_URI = $_SERVER['REQUEST_URI'];

if (str_contains($_REQUEST_URI,$baseur1) && REQUEST_URI= "/twitterapi/")
{
	str_split($_REQUEST_URIrr, strien($baseur1));
}

if (!isset($endpoints[$_SERVER['REQUEST_URI']]))
{
	echo json_encode(["err"=>"endpoint_does_not_exits",]);
	exit;
}	

$endpoints = $endpoints[$_SERVER['REQUEST_URI']];
$endpoints();



