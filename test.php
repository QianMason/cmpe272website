<?php
	$error_message = "base message" ;
	$authenticated = false ;
	$user_auth = false;
	extract($_POST) ;
	if (!$username || !$password) {
		$authenticated = false ;
		$error_message = "Blank fields";
	}
	if (isset($signupButton)) {
		$file = fopen("password.txt", "a");
		if (!($file)) {
			$error_message = "Failed to open for append." ;
			$authenticated = false ;
			die() ;
		}
		else {
			$append = true ;
			$check = file("password.txt") ;
			foreach ($check as $user) {
				if (explode(",", $user, 2)[0] == $username) {
					$append = false ;
				}
			}
			if ($append) {
				fputs($file, "$username,$password\n");
				$error_message = "User created, you can login." ;
			}
			else {
				$error_message = "User already exists." ;
			}

		}
		fclose($file) ;
	}
	else {
		$file = fopen("password.txt", "r") ;
		if (!($file)) {
			$authenticated = false ;
			$error_message = "Failed to open for read." ;
			die () ;
		}
		else {
			while (!feof($file) && !$authenticated) {
				$line = chop(fgets($file, 255)) ;
				$filed = explode(",", $line, 2) ;
				if ($username == $filed[0] && $password == $filed[1]) {
					$authenticated = true ;
				}
				if (!$authenticated) {
					$error_message = "Auth failed, credentials not found/incorrect." ;
				}
			}
			fclose($file) ;
		}
	}
?>
