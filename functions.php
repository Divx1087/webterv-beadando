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
	
?>