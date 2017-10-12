<?php

return search();
function search(){

$service_url = 'http://api.github.com/search/repositories?q=login&language=php&sort=stars&order=desc';


//$map_url='https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($location);
	$maps_json=file_get_contents($service_url);
	$maps_array=json_decode($maps_json,true);
	return 1;
	echo "$maps_array";

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
