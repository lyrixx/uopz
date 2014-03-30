--TEST--
Test compose interface
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
if (uopz_compose("IFace", [], [
	"method" => function($test){}
], [], ZEND_ACC_INTERFACE)) {
	var_dump
		(interface_exists("IFace"));	
}
?>
--EXPECT--
bool(true)

