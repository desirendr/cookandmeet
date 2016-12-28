<?php

	try
	{
		$dns = 'mysql:host=localhost;dbname=ndri';
		$user = 'ndri';
		$password = '877105';

		$options = array(
						PDO ::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
						PDO ::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION);

		$connection = new PDO( $dns, $user, $password, $options );
	}
	catch (Exception $e)
	{
		die("Connection à MySQL impossible :". $e->getMessage());
}