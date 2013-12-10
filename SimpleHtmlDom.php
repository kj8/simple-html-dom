<?php

require_once 'simple_html_dom.php';

class SimpleHtmlDom {
	private $simple_html_dom;

	public function __construct() {
		$this->simple_html_dom = new simple_html_dom();
	}
	
	public function __call($name, array $arguments = array()) {
		return call_user_func_array(array($this->simple_html_dom, $name), $arguments);
	}
}
