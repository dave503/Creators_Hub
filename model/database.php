<?php 

require_once 'composer/vendor/autoload.php' ;
class database {
	public static function conectar(){
		$uri = "mongodb://hub503:creatorshub503@ds233500.mlab.com:33500/hub";

		//$uri = "mongodb://chico:chico@localhost/hub";
		$client=new MongoDB\Client($uri);
		return $client;
	}
}
 ?>