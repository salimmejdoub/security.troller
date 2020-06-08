<?php

class Base64Troller
{

	public static function doTheCrypt(string $string): string
	{

		return strrev(
			'767' . base64_encode(
				$string
			) . '344'
		);
	}

	public static function doTheDeCrypt(string $string): string
	{
		return base64_decode(substr(substr(strrev($string),3),0,-3));
	}
}
