<?php
search();
function search(){

$service_url = "http://api.github.com/search/repositories?q=login&language=php&sort=stars&order=desc";
$curl = curl_init();
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_URL,$service_url );
curl_setopt($curl, CURLOPT_HEADER, 0);
	$curl_response = curl_exec($curl);

//$json = file_get_contents($service_url);
//$obj = json_decode($json,true);
//echo $obj->access_token;



$json = file_get_contents('http://api.github.com/search/repositories?q=login&language=php&sort=stars&order=desc');

// Decode the JSON string into an object
$obj = json_decode($json);
var_dump($obj->results[0]->formatted_address);
//echo "$obj";
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);

echo "$decoded";


}


$service_url = 'https://api.github.com/search/repositories?q=login&language=php&sort=stars&order=desc';

$data=array(
	"q"=>"login",
	"language"=>"php",
	"sort"=>"stars",
	"order"=>"desc",
);














function isJson($string) {
 json_decode($string);
 return (json_last_error() == JSON_ERROR_NONE);
}





?>