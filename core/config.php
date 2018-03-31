<?php
	$domain = 'http://nubaya.com/dateone';

    // Database Configuration
	$_db['host'] = 'localhost';
	$_db['user'] = 'kpakaya';
	$_db['pass'] = 'user1234';
	$_db['name'] = 'kpakaya';

	$site_name = 'Nubaya';
	$meta['keywords'] = '';
	$meta['description'] = '';

    // Facebook Login Configuration
	$fb_app_id = ''; 
	$fb_secret_key = ''; 

    // Misc Configuration
	$minimum_age = '16'; 
	$email_sender = ''; 
	
	// Units of Measurement
	$unit['height'] = 'cm';
	$unit['weight'] = 'kg';
	
	$db = new mysqli($_db['host'], $_db['user'], $_db['pass'], $_db['name']) or die('MySQL Error');

	error_reporting(0);
	