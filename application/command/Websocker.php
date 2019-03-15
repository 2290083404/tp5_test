<?php
namespace app\command;

use think\console\command;
use think\console\Input;
use think\console\Output;
use think\Db;
use Swoole;
/**
 * 
 */
class Websocker extends command{
	protected function configure(){
		$this->setName("Websocker")->setDescription("启动websocker服务器");
	}

	protected function execute(Input $input,Output $output){
		//启动websocker服务器
		$server = new \swoole_websocket_server("127.0.0.1", 9502);

		$server->on("start", function ($server) {
		    echo "Swoole Websocker server is started at http://127.0.0.1:9502\n";
		});

		$server->on('open', function($server, $req) {
		    echo "connection open: {$req->fd}\n";
		});

		$server->on('message', function($server, $frame) {
		    echo "received message: {$frame->data}\n";
		    $server->push($frame->fd, json_encode(["hello", "world"]));
		});

		$server->on('close', function($server, $fd) {
		    echo "connection close: {$fd}\n";
		});

		$server->start();

	}
	
}