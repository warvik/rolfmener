<?php

function thomas_preprocess_page(&$variables, $hook) {
	global $user;
	
	$path = arg();
	
	if ($user->uid == 0 && $path[0] != 'user') {
		
		header('Location: ' . url('user'));
	}
	
	if ($user->uid == 0 && $path[0] == 'user' && count($path) == 1) {
		drupal_set_message('Du må være logget inn for å se innholdet på denne siden', 'error');
	}
}

