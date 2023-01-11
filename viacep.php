<?php 

$cep = '01001000';
$url = "https://viacep.com.br/ws/$cep/json/";
$address = file_get_contents($url);
var_dump($address);
