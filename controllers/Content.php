<?php
class GrcPool_Controller_Content extends GrcPool_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function indexAction() {
		Server::go('/content/devlog');
	}
	
	public function devlogAction() {

	}
	

}