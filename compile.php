<?php
// create with alias "test.phar"
$gPhar = new Phar('test.phar', 0, 'test.phar');
// add all files in the project
$gPhar->buildFromDirectory(dirname(__FILE__) . '/src');
$gPhar->setStub($gPhar->createDefaultStub('commandLine.php', 'index.php'));

/*
$gPhar = new Phar('test2.phar', 0, 'test2.phar');
// add all files in the project, only include php files
$gPhar->buildFromDirectory(dirname(__FILE) . '/project');
$gPhar->setStub($gPhar->createDefaultStub('commandLine.php' 'index.php'));
*/
