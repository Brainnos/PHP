<?php
$mot_de_passe = "jujujul";
$encoded_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);
var_dump($encoded_password);

if(password_verify($mot_de_passe, $encoded_password)){
	echo 'mot de passe OK!';
}
else{
	echo 'mot de passe incorrect.';
}
?>