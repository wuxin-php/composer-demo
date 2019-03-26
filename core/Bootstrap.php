<?php
namespace core;

class Bootstrap
{
	public static function run(){
		session_start();
		self::parseUrl();
	}
	/**
	 * 分析URL 生成控制器方法常量
	 * @return [type] [description]
	 */
	public static function parseUrl(){
		// dd($_SERVER);
		if (isset($_GET['s'])) {
			$info = explode("/", $_GET['s']);
			$class = "\web\controller\\".ucfirst($info[0]);
			$action = ucfirst($info[1]);
		}else{
			$class = "\web\controller\Index";
			$action = "show";
		}
		echo (new $class)->$action();//输出控制器方法执行结果

	}
}