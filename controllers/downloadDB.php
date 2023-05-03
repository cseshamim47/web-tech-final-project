<?php 
session_start();
include ('dumper.php');

try {
	$spec_dumper = Shuttle_Dumper::create(array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db_name' => 'spec',
	));

	$spec_dumper->dump('world.sql');

	$spec_dumper = Shuttle_Dumper::create(array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db_name' => 'blockchain',
	));

	$spec_dumper->dump('wholeDatabase.sql');
	$_SESSION['backup'] = true;
	header('location: ../views/admin/admin.php?backup=true');
	exit;

} catch(Shuttle_Exception $e) {
	echo "Couldn't dump database: " . $e->getMessage();
}