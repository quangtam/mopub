<?php
/**
 * LineItemFixture
 *
 */
class LineItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'line_items_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'order_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'stop_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'budget' => array('type' => 'integer', 'null' => true, 'default' => null),
		'rate' => array('type' => 'integer', 'null' => true, 'default' => null),
		'targeting_days' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'targeting_start_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'targeting_end_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'line_items_id', 'unique' => 1),
			'line_items_id_UNIQUE' => array('column' => 'line_items_id', 'unique' => 1),
			'order_id' => array('column' => 'order_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'line_items_id' => 1,
			'order_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'start_time' => '2013-04-30 09:12:01',
			'stop_time' => '2013-04-30 09:12:01',
			'budget' => 1,
			'rate' => 1,
			'targeting_days' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'targeting_start_time' => '09:12:01',
			'targeting_end_time' => '09:12:01'
		),
	);

}
