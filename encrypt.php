<?php

$string = "i'm encrypted'";
$secret_key = "fasgdftrtyhgbhnj";

$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);

$encrypted_string = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secret_key, $string, MCRYPT_MODE_CBC, $iv);
echo $encrypted_string."<br> \n";
?>
