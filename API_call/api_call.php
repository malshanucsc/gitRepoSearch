
<?php
check();
function search(){



$service_url = 'https://api.github.com/search/repositories?q=login+language:php&sort=stars&order=desc';
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,$service_url);
curl_setopt($curl, CURLOPT_HEADER, 0);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,1);
$curl_response = curl_exec($curl);
//$response = json_decode($curl_response);
//die($response);
//curl_close($curl);
echo"$curl_response";
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
var_export($decoded->response);
}


$service_url = 'https://api.github.com/search/repositories?q=login+language:php&sort=stars&order=desc';

$data=array(
	"q"=>"login",
	"language"=>"php",
	"sort"=>"stars",
	"order"=>"desc",
);
//CallAPI("PUT",$service_url,$data);
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    if ($result === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}


echo "$result";
    curl_close($curl);

    return $result;
}
?>

<?php
function check(){
// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
$curl_response =curl_exec($ch);
echo "$curl_response";
// close cURL resource, and free up system resources
curl_close($ch);
}
?>