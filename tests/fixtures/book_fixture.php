<?php
/* Book Fixture generated on: 2011-06-29 21:52:00 : 1309359120 */
class BookFixture extends CakeTestFixture {
	var $name = 'Book';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'tittle' => array('type' => 'string', 'null' => true, 'length' => 50),
		'year' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'tittle' => 'Lorem ipsum dolor sit amet',
			'year' => '2011-06-29'
		),
	);
}
