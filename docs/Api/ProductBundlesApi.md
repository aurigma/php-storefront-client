# Aurigma\Storefront\ProductBundlesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productBundlesGetAllProductBundles()**](ProductBundlesApi.md#productBundlesGetAllProductBundles) | **GET** /api/storefront/v1/product-bundles | Returns all product bundles, relevant to the specified query parameters. |
| [**productBundlesGetPersonalizationWorkflow()**](ProductBundlesApi.md#productBundlesGetPersonalizationWorkflow) | **GET** /api/storefront/v1/product-bundles/{id}/personalization-workflow | Returns a product bundle personalization workflow description by product bundle identifier. |
| [**productBundlesGetProductBundle()**](ProductBundlesApi.md#productBundlesGetProductBundle) | **GET** /api/storefront/v1/product-bundles/{id} | Returns a product bundle by its identifier. |
| [**productBundlesGetProductSummary()**](ProductBundlesApi.md#productBundlesGetProductSummary) | **GET** /api/storefront/v1/product-bundles/{id}/summary | Returns a product bundle summary by product bundle identifier. |


## `productBundlesGetAllProductBundles()`

```php
productBundlesGetAllProductBundles($skip, $take, $sorting, $search, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductBundleDto
```

Returns all product bundles, relevant to the specified query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\Storefront\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productBundlesGetAllProductBundles($skip, $take, $sorting, $search, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundlesGetAllProductBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **custom_fields** | **string**| Serialized custom fields dictionary filter. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;} | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductBundleDto**](../Model/PagedOfProductBundleDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBundlesGetPersonalizationWorkflow()`

```php
productBundlesGetPersonalizationWorkflow($id, $product_bundle_version_id, $tenant_id): \Aurigma\Storefront\Model\PersonalizationWorkflowDto
```

Returns a product bundle personalization workflow description by product bundle identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\Storefront\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product bundle identifier.
$product_bundle_version_id = 56; // int | Product bundle version identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productBundlesGetPersonalizationWorkflow($id, $product_bundle_version_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundlesGetPersonalizationWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product bundle identifier. | |
| **product_bundle_version_id** | **int**| Product bundle version identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PersonalizationWorkflowDto**](../Model/PersonalizationWorkflowDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBundlesGetProductBundle()`

```php
productBundlesGetProductBundle($id, $product_bundle_version_id, $tenant_id): \Aurigma\Storefront\Model\ProductBundleDto
```

Returns a product bundle by its identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\Storefront\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_bundle_version_id = 56; // int | Product bundle version identifier. Optional
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productBundlesGetProductBundle($id, $product_bundle_version_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundlesGetProductBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_bundle_version_id** | **int**| Product bundle version identifier. Optional | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductBundleDto**](../Model/ProductBundleDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBundlesGetProductSummary()`

```php
productBundlesGetProductSummary($id, $product_bundle_version_id, $product_variant_id, $sku, $tenant_id): \Aurigma\Storefront\Model\ProductSummaryDto
```

Returns a product bundle summary by product bundle identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: OAuth2Implicit
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: Bearer
$config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Aurigma\Storefront\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product bundle identifier.
$product_bundle_version_id = 56; // int | Product bundle version identifier.
$product_variant_id = 56; // int | Product variant identifier.
$sku = 'sku_example'; // string | Product variant SKU.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productBundlesGetProductSummary($id, $product_bundle_version_id, $product_variant_id, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundlesGetProductSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product bundle identifier. | |
| **product_bundle_version_id** | **int**| Product bundle version identifier. | [optional] |
| **product_variant_id** | **int**| Product variant identifier. | [optional] |
| **sku** | **string**| Product variant SKU. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductSummaryDto**](../Model/ProductSummaryDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
