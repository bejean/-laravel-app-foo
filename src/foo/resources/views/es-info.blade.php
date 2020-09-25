<?php
/*
use Elasticsearch;
$params = [];
$response = Elasticsearch::ping($params);
echo print_r($response, TRUE);
*/

use Elasticsearch\ClientBuilder;
//require 'vendor/autoload.php';
$hosts = array();
$hosts[] = env('ELASTICSEARCH_HOST', 'localhost');
$client = ClientBuilder::create()->setHosts($hosts)->build();
//$client = ClientBuilder::create()->build();
$params = [];
$response = $client->ping($params);
echo print_r($response, TRUE);
