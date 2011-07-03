<?php
/* Book Test cases generated on: 2011-06-29 21:52:00 : 1309359120*/
App::import('Model', 'Book');

class BookTestCase extends CakeTestCase {
	var $fixtures = array('app.book');

	function startTest() {
		$this->Book =& ClassRegistry::init('Book');
	}

	function endTest() {
		unset($this->Book);
		ClassRegistry::flush();
	}

}
