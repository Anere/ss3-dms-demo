<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'SS_yatu',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');

Security::setDefaultAdmin('admin','password');
