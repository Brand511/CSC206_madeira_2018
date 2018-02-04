<?php

	/* 	Start-up activities prior to loading the page content.  This will make a connection
	 *	to the database and start a session.
	 */
	require_once($_SERVER['DOCUMENT_ROOT'] . '/../includes/application_includes.php');

echo '<h2>Test Page</h2>';

$sql = 'select * from stories';

$s = $db->query($sql);

$stories = $s->fetchAll();

foreach ($stories as $story){

	print_r($story);
}

