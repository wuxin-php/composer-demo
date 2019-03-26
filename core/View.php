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
		dd($this);
		$this->vars[$name] = $value;
		return $this;
	}
	public function __toString(){
		include $this->file;
		return '';
	}
}