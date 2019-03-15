<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
    	//测试api接口
    	$data=json_decode(file_get_contents("http://api.avatardata.cn/GongJiao/BusLine?key=2b7b7e73d163461e8360b529f0c1662f&city=成都&bus=245"));
    	dump($data);

    	
    }

    function login(){

    	return view("index/login");
    }
}
