<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
	if ( ! function_exists('fichier_url'))
	{
		function fichier_url($nom)
		{
			return 'C:\wamp\www\plateforme\uploads\\' . $nom;
		}
	}