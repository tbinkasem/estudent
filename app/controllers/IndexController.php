<?php
class IndexController extends \Phalcon\Mvc\Controller {
	public function indexAction() {
		$user = new Users ();
		$this->view->items = Users::find(); //ดึงข้อมูลจากตาราง users
	}
}