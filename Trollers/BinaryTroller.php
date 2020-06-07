<?php
class BinaryTroller{

	public static function toBinary(string $string):string{
		$characters = str_split($string);
		$outputString = '';
		
		foreach ($characters as $character) {
			$data = unpack('H*', $character);
			$outputString .= '-'.base_convert($data[1], 16, 2);
		}
		
		return substr($outputString, 1);
	}
	  
	public static function toString(string $binary):string{
		
    	$binaries = explode('-', $binary);
    	$string = null;
		
		foreach ($binaries as $binary) {
        	$string .= pack('H*', dechex(bindec($binary)));
    	}
		
		return $string; 
  	}	
}
