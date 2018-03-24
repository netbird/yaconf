--TEST--
test for test mode 
--SKIPIF--
<?php if (!extension_loaded("yaconf")) print "skip"; ?>
--INI--
yaconf.directory={PWD}/inis/testmode/conf/
yaconf.testmode=1
yaconf.directory_test={PWD}/inis/testmode/conf_test/
--FILE--
<?php 
print_r(yaconf::get("a.a"));
print_r(Yaconf::get("a.b"));
?>
--EXPECTF--
string(1) "c"
string(1) "d"
