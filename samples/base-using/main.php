<?php
require_once __DIR__.'/../../vendor/autoload.php';

use GuzzleHttp\ClientInterface;
use Aurigma\Storefront\HeaderSelector;
use Aurigma\Storefront\Configuration;
use Aurigma\Storefront\Api\StorefrontsApi;

$client = new GuzzleHttp\Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://localhost:21021/api/',
    // You can set any number of default request options.
    'timeout'  => 30.0,
    'proxy' => 'http://localhost:21021/api/',
]);
$selector = new HeaderSelector();
$config = new Configuration();

$config->setApiKey('X-API-Key', 'string');


$storefrontsApi = new StorefrontsApi($client, $config, $selector);
$response1 = $storefrontsApi->storefrontsGetAll(null, null, null, null, $search = null, 1, 2);
print_r($response1);

echo 'Done! ';
?>