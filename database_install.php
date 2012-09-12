<?php
// Using SSI?
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
	
elseif (!defined('SMF'))
	die('<strong>Error:</strong> Cannot install - please make sure that this file in the same directory as SMF\'s SSI.php file.');

if (SMF == 'SSI')
	db_extend('packages');

global $smcFunc;

$columns = array(
	array(
		'name' => 'comment_id',
		'type' => 'int',
		'size' => 11,
		'auto' => true,
		'unsigned' => true,
	),
	array(
		'name' => 'comment_profile',
		'type' => 'int',
		'size' => 11,
		'unsigned' => true,
	),
	array(
		'name' => 'comment_poster_id',
		'type' => 'int',
		'size' => 11,
		'unsigned' => true,
	),
	array(
		'name' => 'comment_poster',
		'type' => 'varchar',
		'size' => 50,
	),
	array (
		'name' => 'comment_title',
		'type' => 'varchar',
		'size' => 60,
	),
	array (
		'name' => 'comment_body',
		'type' => 'text',
	),
);

$indexes = array(
	array(
		'type' => 'primary',
		'columns' => array('comment_id')
	),
);

$smcFunc['db_create_table']('{db_prefix}profile_comments', $columns, $indexes, array(), 'update_remove');