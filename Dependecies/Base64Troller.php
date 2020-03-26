<?php
class Base64Troller{
	private $cryptedString ;
  	private function base64EncoderMethod(string $string):void{
		$this->cryptedString = crypt(strrev(
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
		),'abcdef');
  }
  public function getCryptedData(string $string):string{
  	$this->base64EncoderMethod($string);
  	return $this->cryptedString;
  }

  public function base64DecoderMethod(string $string):string{
  	return strrev(
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
