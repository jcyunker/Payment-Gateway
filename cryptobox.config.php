<?
/**
 *  YOUR MYSQL DATABASE DETAILS
 */

 define("DB_HOST", 	"cryptbroker.com");				// hostname
 define("DB_USER", 	"-cryp2406220237-");		// database username
 define("DB_PASSWORD", 	"-hvwM4#Twz_Q-");		// database password
 define("DB_NAME", 	"-cryp2406220237-");	// database name




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page 
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional), etc...");
 */

 $cryptobox_private_keys = array(241AAiS5vhBitcoin77BTCPRVsrAwZWLYqq2IqLei3SkLEvfFA);	
 


 
 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys);
 
?>
