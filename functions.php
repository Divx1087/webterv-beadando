<?php
	function kiiras($newuser, $filename, $access){
		$file = fopen($filename, $access);
		
		if($file === false){
			die("A fájl nem érhető el!");
		}
		
		fwrite($file, serialize($newuser) . "\n");
		
		fclose($file);
	}
	
	function betoltes($filename){
		$data = [];
		$line = "";
		
		$file = fopen($filename, "r");
		
		if($file === false){
			die("A fájl nem érhető el!");
		}
		
		while(($line = fgets($file)) !== false){
			$data[] = unserialize($line);
		}
		
		fclose($file);
		return $data;
	}

	function uploadProfilePicture($username) {
		global $error;
	
		if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
		  $allowed_extensions = ["png", "jpg", "jpeg"];
		  $extension = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));
	
		  if (in_array($extension, $allowed_extensions)) {
			if ($_FILES["profile-pic"]["error"] === 0) {
			  if ($_FILES["profile-pic"]["size"] <= 31457280) {
				$path = "profilkep/" . $username . "." . $extension;
	
				if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $path)) {
				  $error = "A fájl átmozgatása nem sikerült!";
				}
			  } else {
				$error = "A fájl mérete túl nagy!";
			  }
			} else {
			  $error = "A fájlfeltöltés nem sikerült!";
			}
		  } else {
			$error = "A fájl kiterjesztése nem megfelelő!";
		  }
		}
	  }
	
?>