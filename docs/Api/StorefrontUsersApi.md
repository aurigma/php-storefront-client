# Aurigma\Storefront\StorefrontUsersApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**storefrontUsersCreate()**](StorefrontUsersApi.md#storefrontUsersCreate) | **POST** /api/storefront/v1/storefront-users | Creates a new storefront user.
[**storefrontUsersGet()**](StorefrontUsersApi.md#storefrontUsersGet) | **GET** /api/storefront/v1/storefront-users/{id} | Returns a storefront user by identifier.
[**storefrontUsersGetAll()**](StorefrontUsersApi.md#storefrontUsersGetAll) | **GET** /api/storefront/v1/storefront-users | Returns all storefront users, relevant to the specified query parameters.
[**storefrontUsersGetToken()**](StorefrontUsersApi.md#storefrontUsersGetToken) | **GET** /api/storefront/v1/storefront-users/token | Returns an API access token for the specified storefront user.
[**storefrontUsersMergeAnonymous()**](StorefrontUsersApi.md#storefrontUsersMergeAnonymous) | **POST** /api/storefront/v1/storefront-users/merge-anonymous | Transfers all existing data for the anonymous storefront user to the selected regular storefront user account.
[**storefrontUsersRegister()**](StorefrontUsersApi.md#storefrontUsersRegister) | **POST** /api/storefront/v1/storefront-users/register | Registers a storefront user with the specified identifier.


## `storefrontUsersCreate()`

```php
storefrontUsersCreate($storefront_id, $tenant_id, $create_storefront_user_dto): \Aurigma\Storefront\Model\StorefrontUserDto
```

Creates a new storefront user.

If a user with the specified identifier already exists then the error with http status code 409 be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$create_storefront_user_dto = new \Aurigma\Storefront\Model\CreateStorefrontUserDto(); // \Aurigma\Storefront\Model\CreateStorefrontUserDto | Operation parameters.

try {
    $result = $apiInstance->storefrontUsersCreate($storefront_id, $tenant_id, $create_storefront_user_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier. |
 **tenant_id** | **int**| Tenant identifier. | [optional]
 **create_storefront_user_dto** | [**\Aurigma\Storefront\Model\CreateStorefrontUserDto**](../Model/CreateStorefrontUserDto.md)| Operation parameters. | [optional]

### Return type

[**\Aurigma\Storefront\Model\StorefrontUserDto**](../Model/StorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersGet()`

```php
storefrontUsersGet($id, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\StorefrontUserDto
```

Returns a storefront user by identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Storefront user identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->storefrontUsersGet($id, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Storefront user identifier. |
 **storefront_id** | **int**| Storefront identifier. |
 **tenant_id** | **int**| Tenant identifier. | [optional]

### Return type

[**\Aurigma\Storefront\Model\StorefrontUserDto**](../Model/StorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersGetAll()`

```php
storefrontUsersGetAll($storefront_id, $storefront_user_id, $skip, $take, $sorting, $search, $tenant_id): \Aurigma\Storefront\Model\PagedOfStorefrontUserDto
```

Returns all storefront users, relevant to the specified query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$storefront_user_id = 'storefront_user_id_example'; // string | Storefront user identifier.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->storefrontUsersGetAll($storefront_id, $storefront_user_id, $skip, $take, $sorting, $search, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier. |
 **storefront_user_id** | **string**| Storefront user identifier. | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional]
 **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional]
 **search** | **string**| Search string for partial match. | [optional]
 **tenant_id** | **int**| Tenant identifier. | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfStorefrontUserDto**](../Model/PagedOfStorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersGetToken()`

```php
storefrontUsersGetToken($storefront_user_id, $storefront_id, $tenant_id): string
```

Returns an API access token for the specified storefront user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_user_id = 'storefront_user_id_example'; // string | Storefront user identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->storefrontUsersGetToken($storefront_user_id, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersGetToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_user_id** | **string**| Storefront user identifier. |
 **storefront_id** | **int**| Storefront identifier. |
 **tenant_id** | **int**| Tenant identifier. | [optional]

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersMergeAnonymous()`

```php
storefrontUsersMergeAnonymous($storefront_id, $tenant_id, $merge_anonymous_user_data_input)
```

Transfers all existing data for the anonymous storefront user to the selected regular storefront user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$merge_anonymous_user_data_input = new \Aurigma\Storefront\Model\MergeAnonymousUserDataInput(); // \Aurigma\Storefront\Model\MergeAnonymousUserDataInput | Operation parameters.

try {
    $apiInstance->storefrontUsersMergeAnonymous($storefront_id, $tenant_id, $merge_anonymous_user_data_input);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersMergeAnonymous: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier. |
 **tenant_id** | **int**| Tenant identifier. | [optional]
 **merge_anonymous_user_data_input** | [**\Aurigma\Storefront\Model\MergeAnonymousUserDataInput**](../Model/MergeAnonymousUserDataInput.md)| Operation parameters. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storefrontUsersRegister()`

```php
storefrontUsersRegister($storefront_id, $tenant_id, $register_storefront_user_input): \Aurigma\Storefront\Model\StorefrontUserDto
```

Registers a storefront user with the specified identifier.

If an anonymous user with the specified identifier already exists then this user become a 'regular' user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Api\StorefrontUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$register_storefront_user_input = new \Aurigma\Storefront\Model\RegisterStorefrontUserInput(); // \Aurigma\Storefront\Model\RegisterStorefrontUserInput | Operation parameters.

try {
    $result = $apiInstance->storefrontUsersRegister($storefront_id, $tenant_id, $register_storefront_user_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontUsersApi->storefrontUsersRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier. |
 **tenant_id** | **int**| Tenant identifier. | [optional]
 **register_storefront_user_input** | [**\Aurigma\Storefront\Model\RegisterStorefrontUserInput**](../Model/RegisterStorefrontUserInput.md)| Operation parameters. | [optional]

### Return type

[**\Aurigma\Storefront\Model\StorefrontUserDto**](../Model/StorefrontUserDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [bearerAuth](../../README.md#bearerAuth), [oauth2-clientCredentials](../../README.md#oauth2-clientCredentials), [oauth2-code](../../README.md#oauth2-code), [oauth2-implicit](../../README.md#oauth2-implicit)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
