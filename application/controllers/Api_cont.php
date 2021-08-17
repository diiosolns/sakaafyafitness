<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Api_cont extends MX_Controller
{

function __construct() {
parent::__construct();
}

function index(){
	echo "your here now.....";
}

function getNum(){
	$num=2;

	return $num;
}

function writeNum(){
	$num=$this->getNum();

	echo $num;
}

}