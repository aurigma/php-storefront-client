# Aurigma\Storefront\TenantInfoApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**tenantInfoGetApplicationsInfo()**](TenantInfoApi.md#tenantInfoGetApplicationsInfo) | **GET** /api/storefront/v1/tenant-info/applications | Gets information about tenant applications
[**tenantInfoGetInfo()**](TenantInfoApi.md#tenantInfoGetInfo) | **GET** /api/storefront/v1/tenant-info | Gets information about tenant


## `tenantInfoGetApplicationsInfo()`

```php
tenantInfoGetApplicationsInfo($tenant_id, $user_id): \Aurigma\Storefront\Model\TenantApplicationsInfoDto
```

Gets information about tenant applications

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


$apiInstance = new Aurigma\Storefront\Api\TenantInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->tenantInfoGetApplicationsInfo($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantInfoApi->tenantInfoGetApplicationsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\TenantApplicationsInfoDto**](../Model/TenantApplicationsInfoDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantInfoGetInfo()`

```php
tenantInfoGetInfo($tenant_id, $user_id): \Aurigma\Storefront\Model\TenantInfoDto
```

Gets information about tenant

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


$apiInstance = new Aurigma\Storefront\Api\TenantInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->tenantInfoGetInfo($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantInfoApi->tenantInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\TenantInfoDto**](../Model/TenantInfoDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
