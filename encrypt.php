<?php

$string = "i'm encrypted'"; //the string to be encryptedd

$secret_key = "fasgdftrtyhgbhnj"; //the secret key 

//dont change  this function 
$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);

$encrypted_string = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key, $string, MCRYPT_MODE_CBC, $iv);

$decrypted_string = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secret_key, $encrypted_string, MCRYPT_MODE_CBC, $iv);

echo $encrypted_string."<br> \n";
echo $decrypted_string ;
?>
