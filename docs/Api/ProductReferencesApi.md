# Aurigma\Storefront\ProductReferencesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**productReferencesCreate()**](ProductReferencesApi.md#productReferencesCreate) | **POST** /api/storefront/v1/product-references | Creates new storefront product reference
[**productReferencesDelete()**](ProductReferencesApi.md#productReferencesDelete) | **DELETE** /api/storefront/v1/product-references/{reference} | Deletes storefront product reference
[**productReferencesGet()**](ProductReferencesApi.md#productReferencesGet) | **GET** /api/storefront/v1/product-references/{reference} | Gets storefront product reference
[**productReferencesGetAll()**](ProductReferencesApi.md#productReferencesGetAll) | **GET** /api/storefront/v1/product-references | Gets all storefront product references relevant to specified query parameters
[**productReferencesGetProductConfig()**](ProductReferencesApi.md#productReferencesGetProductConfig) | **GET** /api/storefront/v1/product-references/{reference}/product-config | Gets product configuration information by storefront product reference
[**productReferencesGetProductSpecification()**](ProductReferencesApi.md#productReferencesGetProductSpecification) | **GET** /api/storefront/v1/product-references/{reference}/product-specification | Gets product specification by storefront product reference


## `productReferencesCreate()`

```php
productReferencesCreate($storefront_id, $tenant_id, $user_id, $create_product_reference_dto): \Aurigma\Storefront\Model\ProductReferenceDto
```

Creates new storefront product reference

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier
$create_product_reference_dto = new \Aurigma\Storefront\Model\CreateProductReferenceDto(); // \Aurigma\Storefront\Model\CreateProductReferenceDto | Create operation parameters

try {
    $result = $apiInstance->productReferencesCreate($storefront_id, $tenant_id, $user_id, $create_product_reference_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]
 **create_product_reference_dto** | [**\Aurigma\Storefront\Model\CreateProductReferenceDto**](../Model/CreateProductReferenceDto.md)| Create operation parameters | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProductReferenceDto**](../Model/ProductReferenceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesDelete()`

```php
productReferencesDelete($reference, $storefront_id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProductReferenceDto
```

Deletes storefront product reference

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Product reference - external reference to Customer's Canvas product specification, e.g online store product identifier
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productReferencesDelete($reference, $storefront_id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Product reference - external reference to Customer&#39;s Canvas product specification, e.g online store product identifier |
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProductReferenceDto**](../Model/ProductReferenceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGet()`

```php
productReferencesGet($reference, $storefront_id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProductReferenceDto
```

Gets storefront product reference

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Product reference - external reference to Customer's Canvas product specification, e.g online store product identifier
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productReferencesGet($reference, $storefront_id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Product reference - external reference to Customer&#39;s Canvas product specification, e.g online store product identifier |
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProductReferenceDto**](../Model/ProductReferenceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetAll()`

```php
productReferencesGetAll($storefront_id, $product_reference, $product_specification_id, $skip, $take, $sorting, $search, $tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfProductReferenceDto
```

Gets all storefront product references relevant to specified query parameters

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$product_reference = 'product_reference_example'; // string | Product reference filter. Product reference is an external reference to Customer's Canvas product specification, e.g online store product identifier
$product_specification_id = 56; // int | Cusomer's Canvas product specification filter
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productReferencesGetAll($storefront_id, $product_reference, $product_specification_id, $skip, $take, $sorting, $search, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **product_reference** | **string**| Product reference filter. Product reference is an external reference to Customer&#39;s Canvas product specification, e.g online store product identifier | [optional]
 **product_specification_id** | **int**| Cusomer&#39;s Canvas product specification filter | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductReferenceDto**](../Model/PagedOfProductReferenceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetProductConfig()`

```php
productReferencesGetProductConfig($reference, $storefront_id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProductReferenceDto
```

Gets product configuration information by storefront product reference

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Product reference - external reference to Customer's Canvas product specification, e.g online store product identifier
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productReferencesGetProductConfig($reference, $storefront_id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Product reference - external reference to Customer&#39;s Canvas product specification, e.g online store product identifier |
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProductReferenceDto**](../Model/ProductReferenceDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetProductSpecification()`

```php
productReferencesGetProductSpecification($reference, $storefront_id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProductSpecificationDto
```

Gets product specification by storefront product reference

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Product reference - external reference to Customer's Canvas product specification, e.g online store product identifier
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->productReferencesGetProductSpecification($reference, $storefront_id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductSpecification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Product reference - external reference to Customer&#39;s Canvas product specification, e.g online store product identifier |
 **storefront_id** | **int**| Storefront identifier |
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
