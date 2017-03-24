<?php


if(isset($_POST['search'])) {
    $keywords = $_POST['search'];
    }
else{
    $keywords = "";
}

// Your AWS Access Key ID, as taken from the AWS Your Account page
$aws_access_key_id = "AKIAIOWFZ4KTTJAKNLFQ";

// Your AWS Secret Key corresponding to the above ID, as taken from the AWS Your Account page
$aws_secret_key = "DL6rUpqfXpMuQEVmiGGYgudKa0ePlbaR8OX4OjHB";

// The region you are interested in
$endpoint = "webservices.amazon.com";

$uri = "/onca/xml";

$params = array(
    "Service" => "AWSECommerceService",
    "Operation" => "ItemSearch",
    "AWSAccessKeyId" => "AKIAIOWFZ4KTTJAKNLFQ",
    "AssociateTag" => "q0d9b-20 ",
    "SearchIndex" => "All",
    "ResponseGroup" => "ItemIds, ItemAttributes",
    "Keywords" => "\"".$keywords."\""
);

// Set current timestamp if not set
if (!isset($params["Timestamp"])) {
    $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
}

// Sort the parameters by key
ksort($params);

$pairs = array();

foreach ($params as $key => $value) {
    array_push($pairs, rawurlencode($key)."=".rawurlencode($value));
}

// Generate the canonical query
$canonical_query_string = join("&", $pairs);

// Generate the string to be signed
$string_to_sign = "GET\n".$endpoint."\n".$uri."\n".$canonical_query_string;

// Generate the signature required by the Product Advertising API
$signature = base64_encode(hash_hmac("sha256", $string_to_sign, $aws_secret_key, true));

// Generate the signed URL
$request_url = 'http://'.$endpoint.$uri.'?'.$canonical_query_string.'&Signature='.rawurlencode($signature);

$xml = simplexml_load_file($request_url);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

header('Content-Type: application/json');
echo $json;
?>
