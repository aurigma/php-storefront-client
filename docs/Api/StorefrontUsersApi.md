# Aurigma\Storefront\StorefrontUsersApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**storefrontUsersCreate()**](StorefrontUsersApi.md#storefrontUsersCreate) | **POST** /api/storefront/v1/storefront-users | Creates new storefront user
[**storefrontUsersGet()**](StorefrontUsersApi.md#storefrontUsersGet) | **GET** /api/storefront/v1/storefront-users/{id} | Gets storefront user by id
[**storefrontUsersGetAll()**](StorefrontUsersApi.md#storefrontUsersGetAll) | **GET** /api/storefront/v1/storefront-users | Gets all storefront users relevant to specified query parameters
[**storefrontUsersGetToken()**](StorefrontUsersApi.md#storefrontUsersGetToken) | **GET** /api/storefront/v1/storefront-users/token | Gets storefront user token
[**storefrontUsersMergeAnonymous()**](StorefrontUsersApi.md#storefrontUsersMergeAnonymous) | **POST** /api/storefront/v1/storefront-users/merge-anonymous | Merges anonymous storefront user data to regular storefront user account


## `storefrontUsersCreate()`

```php
storefrontUsersCreate($storefront_id, $tenant_id, $user_id, $create_storefront_user_dto): \Aurigma\Storefront\Model\StorefrontUserDto
```

Creates new storefront user

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier
$create_storefront_user_dto = new \Aurigma\Storefront\Model\CreateStorefrontUserDto(); // \Aurigma\Storefront\Model\CreateStorefrontUserDto | Create operation parameters

try {
    $result = $apiInstance->storefrontUsersCreate($storefront_id, $tenant_id, $user_id, $create_storefront_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]
 **create_storefront_user_dto** | [**\Aurigma\Storefront\Model\CreateStorefrontUserDto**](../Model/CreateStorefrontUserDto.md)| Create operation parameters | [optional]

### Return type

[**\Aurigma\Storefront\Model\StorefrontUserDto**](../Model/StorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersGet()`

```php
storefrontUsersGet($id, $storefront_id, $tenant_id, $user_id): \Aurigma\Storefront\Model\StorefrontUserDto
```

Gets storefront user by id

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Storefront user identifier
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->storefrontUsersGet($id, $storefront_id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Storefront user identifier |
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\StorefrontUserDto**](../Model/StorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersGetAll()`

```php
storefrontUsersGetAll($storefront_id, $storefront_user_id, $skip, $take, $sorting, $search, $tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfStorefrontUserDto
```

Gets all storefront users relevant to specified query parameters

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$storefront_user_id = 'storefront_user_id_example'; // string | Storefront user identifier
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->storefrontUsersGetAll($storefront_id, $storefront_user_id, $skip, $take, $sorting, $search, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **storefront_user_id** | **string**| Storefront user identifier | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfStorefrontUserDto**](../Model/PagedOfStorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersGetToken()`

```php
storefrontUsersGetToken($storefront_user_id, $storefront_id, $tenant_id, $user_id)
```

Gets storefront user token

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_user_id = 'storefront_user_id_example'; // string | Storefront user identifier
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $apiInstance->storefrontUsersGetToken($storefront_user_id, $storefront_id, $tenant_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersGetToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_user_id** | **string**| Storefront user identifier |
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersMergeAnonymous()`

```php
storefrontUsersMergeAnonymous($storefront_id, $tenant_id, $user_id, $merge_anonymous_user_data_input)
```

Merges anonymous storefront user data to regular storefront user account

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


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier
$merge_anonymous_user_data_input = new \Aurigma\Storefront\Model\MergeAnonymousUserDataInput(); // \Aurigma\Storefront\Model\MergeAnonymousUserDataInput | Merge operation parameters

try {
    $apiInstance->storefrontUsersMergeAnonymous($storefront_id, $tenant_id, $user_id, $merge_anonymous_user_data_input);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersMergeAnonymous: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]
 **merge_anonymous_user_data_input** | [**\Aurigma\Storefront\Model\MergeAnonymousUserDataInput**](../Model/MergeAnonymousUserDataInput.md)| Merge operation parameters | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
