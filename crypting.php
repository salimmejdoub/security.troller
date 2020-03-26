<?php
class SecurityTroller{
	private $_stringDeformed;
	public function __construct(Base64Troller $base64Troller, BinaryTroller $binaryTroller):void{
	}
	public function deformString($_string){

	}
	public function originalString(){

	}
}
class Base64Troller{
	public function base64EncoderMethod($string){
		strrev(
			base64_encode(
				base64_encode(
					strrev(
						base64_encode(
							'767'.base64_encode(
								$string
							).'344'
						)
					)
				)
			)
		);
	}
	public function base64DecoderMethod($string){
		strrev(
			base64_decode(
				base64_decode(
					strrev(
						base64_decode(
							'767'.base64_decode(
								$string
							).'344'
						)
					)
				)
			)
		);
	}
}

class BinaryTroller{
	public function strigToBinary($string){
	    $characters = str_split($string);
	 
	    $binary = [];
	    foreach ($characters as $character) {
	        $data = unpack('H*', $character);
	        $binary[] = base_convert($data[1], 16, 2);
	    }
	 
	    return implode(' ', $binary);    
	}	 
	public function binaryToString($binary){
	    $binaries = explode(' ', $binary);
	 
	    $string = null;
	    foreach ($binaries as $binary) {
	        $string .= pack('H*', dechex(bindec($binary)));
	    }
	    return $string;    
	}
}
