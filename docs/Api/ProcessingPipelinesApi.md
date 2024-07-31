# Aurigma\Storefront\ProcessingPipelinesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**processingPipelinesGet()**](ProcessingPipelinesApi.md#processingPipelinesGet) | **GET** /api/storefront/v1/processing-pipelines/{id} | Returns a processing pipeline. |
| [**processingPipelinesGetAll()**](ProcessingPipelinesApi.md#processingPipelinesGetAll) | **GET** /api/storefront/v1/processing-pipelines | Returns all processing pipelines relevant to the specified query parameters. |


## `processingPipelinesGet()`

```php
processingPipelinesGet($id, $tenant_id): \Aurigma\Storefront\Model\ProcessingPipelineDto
```

Returns a processing pipeline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\ProcessingPipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Processing pipeline identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->processingPipelinesGet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPipelinesApi->processingPipelinesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Processing pipeline identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProcessingPipelineDto**](../Model/ProcessingPipelineDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [bearerAuth](../../README.md#bearerAuth), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processingPipelinesGetAll()`

```php
processingPipelinesGetAll($skip, $take, $search, $tenant_id): \Aurigma\Storefront\Model\PagedOfProcessingPipelineDto
```

Returns all processing pipelines relevant to the specified query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\ProcessingPipelinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$search = 'search_example'; // string | Search string for partial by processing pipeline name.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->processingPipelinesGetAll($skip, $take, $search, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingPipelinesApi->processingPipelinesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **search** | **string**| Search string for partial by processing pipeline name. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProcessingPipelineDto**](../Model/PagedOfProcessingPipelineDto.md)

### Authorization

[oauth2-code](../../README.md#oauth2-code), [apiKey](../../README.md#apiKey), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [bearerAuth](../../README.md#bearerAuth), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
