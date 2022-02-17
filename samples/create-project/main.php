<?php
require_once __DIR__.'/../../vendor/autoload.php';

use \GuzzleHttp\ClientInterface;
use \Jumbojett\OpenIDConnectClient;

use Aurigma\Storefront\HeaderSelector;
use Aurigma\Storefront\Configuration;
use Aurigma\Storefront\Api\ProjectsApi;
use Aurigma\Storefront\Model\CreateProjectDto;
use Aurigma\Storefront\Model\ProjectItemDto;


//general variables
$baseApiUrl = 'https://api.customerscanvashub.com/ ';
$clientId = 'your_client_id';
$clientSecret = 'your_client_secret';
$storefrontId = 999999; // <- your storefront id

//project variables
$stateId = 'your_state_id'; // <- some really existing state id
$customerId = 'user665'; // <- some customer id in your system
$ownerId = 'user665'; // <- id owner of state and project
$customerName = 'User Name'; // <- some customer nice name in your system
$orderId = '123444'; // <- order id in your system
$productId = 'CC51PF3042'; // <- product id
$productName = 'Product name'; // <- some product name
$orderUrl = ''; // <- url of order for admin

$projectApi = getProjectApiClient($baseApiUrl, $clientId, $clientSecret);

$projectItem = new ProjectItemDto(array(
    'name' => $productName,
    'fields' => array('field_1' => 'Test_value'),
    'hidden' => array(),
    'design_ids' => array(0 => $stateId),
    'quantity' => 1,
));

$data['product_reference'] = $productId ?? null;
$data['order_id'] = strval($orderId) ?? null;
$data['order_url'] = $orderUrl ?? null;
$data['order_number'] = $orderId ?? null;
$data['customer_id'] = $customerId ?? null;
$data['customer_name'] = $customerName ?? null;
$data['name'] = "order#".$orderId ?? null;
$data['owner_id'] = $ownerId ?? null;
$data['items'] = array(0 => $projectItem);

$createProjectDto = new CreateProjectDto($data, $productName);

$response = $projectApi->projectsCreate(
    $storefrontId, 
    null, 
    null, 
    $createProjectDto);

print_r($response);

echo 'Done! ';

function getProjectApiClient($apiUrl, $clientId, $clientSecret)
{
    $client = new \GuzzleHttp\Client([
        // Base URI is used with relative requests
        'base_uri' => $apiUrl,
        // You can set any number of default request options.
        'timeout'  => 60.0,
    ]);
    $selector = new HeaderSelector();
    $config = new Configuration();
    $config->setAccessToken(getAccessToken($apiUrl, $clientId, $clientSecret));
    $config->setHost($apiUrl);
    
    return new ProjectsApi($client, $config, $selector);
}

function getAccessToken($apiUrl, $clientId, $clientSecret): string
{
    $oidc = new OpenIDConnectClient($apiUrl, $clientId, $clientSecret);
    $oidc->providerConfigParam(array('token_endpoint'=> $apiUrl.'connect/token'));
    return $oidc->requestClientCredentialsToken()->access_token;
}

?>