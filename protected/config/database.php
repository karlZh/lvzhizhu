<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	//'connectionString' => 'mysql:host=hdm-058.hichina.com;dbname=hdm0580594_db',
    'connectionString' => 'mysql:host=localhost;dbname=shop',
	'emulatePrepare' => true,
	//'username' => 'hdm0580594',
    'username' => 'root',
    //'password' => 'xianguoego2013',
    'password' => 'root123',
	'charset' => 'utf8',
    'tablePrefix'=>'lzz_',
);
