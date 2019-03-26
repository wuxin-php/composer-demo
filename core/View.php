<?php
namespace core;
class View
{
	protected $file;
	protected $vars = [];

	public function make($file){
		$this->file = 'view/'.$file.".html";
		return $this;
	}
	public function with($name,$value)
	{
		$this->vars[$name] = $value;
		return $this;
	}
	/**
	 * 当系统输出一个不存在的对象是系统自动调用该魔术方法
	 * @return string [description]
	 */
	public function __toString(){
		extract($this->vars);
		include $this->file;
		return '';
	}
}