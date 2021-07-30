# Aurigma\Storefront\StorefrontsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**storefrontsGet()**](StorefrontsApi.md#storefrontsGet) | **GET** /api/storefront/v1/storefronts/{id} | Gets storefront
[**storefrontsGetAll()**](StorefrontsApi.md#storefrontsGetAll) | **GET** /api/storefront/v1/storefronts | Gets all storefronts relevant to specified query parameters


## `storefrontsGet()`

```php
storefrontsGet($id, $tenant_id, $user_id): \Aurigma\Storefront\Model\StorefrontDto
```

Gets storefront

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->storefrontsGet($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontsApi->storefrontsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\StorefrontDto**](../Model/StorefrontDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontsGetAll()`

```php
storefrontsGetAll($types, $skip, $take, $sorting, $search, $tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfStorefrontDto
```

Gets all storefronts relevant to specified query parameters

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$types = array(new \Aurigma\Storefront\Model\\Aurigma\Storefront\Model\StorefrontType()); // \Aurigma\Storefront\Model\StorefrontType[] | Storefront type filter
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->storefrontsGetAll($types, $skip, $take, $sorting, $search, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontsApi->storefrontsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **types** | [**\Aurigma\Storefront\Model\StorefrontType[]**](../Model/\Aurigma\Storefront\Model\StorefrontType.md)| Storefront type filter | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfStorefrontDto**](../Model/PagedOfStorefrontDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
