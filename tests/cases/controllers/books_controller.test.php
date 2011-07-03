<?php
/* Books Test cases generated on: 2011-06-29 21:52:19 : 1309359139*/
App::import('Controller', 'Books');

class TestBooksController extends BooksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BooksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.book');

	function startTest() {
		$this->Books =& new TestBooksController();
		$this->Books->constructClasses();
	}

	function endTest() {
		unset($this->Books);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
