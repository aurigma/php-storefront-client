# Aurigma\Storefront\ProductSpecificationsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productSpecificationsGet()**](ProductSpecificationsApi.md#productSpecificationsGet) | **GET** /api/storefront/v1/product-specifications/{id} | Gets product specification by id
[**productSpecificationsGetAll()**](ProductSpecificationsApi.md#productSpecificationsGetAll) | **GET** /api/storefront/v1/product-specifications | Gets all product specifications relevant to specified query parameters
[**productSpecificationsGetConfiguration()**](ProductSpecificationsApi.md#productSpecificationsGetConfiguration) | **GET** /api/storefront/v1/product-specifications/{id}/config | Gets product configuration description by product specification id


## `productSpecificationsGet()`

```php
productSpecificationsGet($id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProductSpecificationDto
```

Gets product specification by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\ProductSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product specification identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productSpecificationsGet($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSpecificationsApi->productSpecificationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product specification identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProductSpecificationDto**](../Model/ProductSpecificationDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSpecificationsGetAll()`

```php
productSpecificationsGetAll($skip, $take, $sorting, $search, $tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfProductSpecificationDto
```

Gets all product specifications relevant to specified query parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\ProductSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productSpecificationsGetAll($skip, $take, $sorting, $search, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSpecificationsApi->productSpecificationsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductSpecificationDto**](../Model/PagedOfProductSpecificationDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productSpecificationsGetConfiguration()`

```php
productSpecificationsGetConfiguration($id, $tenant_id, $user_id): string
```

Gets product configuration description by product specification id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\ProductSpecificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product specification identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productSpecificationsGetConfiguration($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSpecificationsApi->productSpecificationsGetConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Product specification identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
