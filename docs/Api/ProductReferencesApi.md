# Aurigma\Storefront\ProductReferencesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productReferencesGet()**](ProductReferencesApi.md#productReferencesGet) | **GET** /api/storefront/v1/product-references/{reference} | Returns a storefront product reference. |
| [**productReferencesGetAll()**](ProductReferencesApi.md#productReferencesGetAll) | **GET** /api/storefront/v1/product-references | Returns all storefront product references relevant to the specified query parameters. |
| [**productReferencesGetAllProductBundles()**](ProductReferencesApi.md#productReferencesGetAllProductBundles) | **GET** /api/storefront/v1/product-references/product-bundles | Returns a list of product bundles associated with storefront product references relevant to the specified query parameters. |
| [**productReferencesGetAllProductLinks()**](ProductReferencesApi.md#productReferencesGetAllProductLinks) | **GET** /api/storefront/v1/product-references/product-links | Returns a list of product links associated with storefront product references relevant to the specified query parameters. |
| [**productReferencesGetAllProductSpecifications()**](ProductReferencesApi.md#productReferencesGetAllProductSpecifications) | **GET** /api/storefront/v1/product-references/product-specifications | Returns a list of product specifications associated with storefront product references relevant to the specified query parameters. |
| [**productReferencesGetAllProducts()**](ProductReferencesApi.md#productReferencesGetAllProducts) | **GET** /api/storefront/v1/product-references/products | Returns a list of products associated with storefront product references relevant to the specified query parameters. |
| [**productReferencesGetPersonalizationWorkflow()**](ProductReferencesApi.md#productReferencesGetPersonalizationWorkflow) | **GET** /api/storefront/v1/product-references/{reference}/personalization-workflow | Returns a product personalization workflow. |
| [**productReferencesGetProduct()**](ProductReferencesApi.md#productReferencesGetProduct) | **GET** /api/storefront/v1/product-references/{reference}/product | Returns a product by storefront product reference. |
| [**productReferencesGetProductBundle()**](ProductReferencesApi.md#productReferencesGetProductBundle) | **GET** /api/storefront/v1/product-references/{reference}/product-bundle | Returns a product bundle by storefront product reference. |
| [**productReferencesGetProductCostDetails()**](ProductReferencesApi.md#productReferencesGetProductCostDetails) | **GET** /api/storefront/v1/product-references/{reference}/product-cost-details | Returns a product cost details from ecommerce system. |
| [**productReferencesGetProductLink()**](ProductReferencesApi.md#productReferencesGetProductLink) | **GET** /api/storefront/v1/product-references/{reference}/product-link | Returns a product link by storefront product reference. |
| [**productReferencesGetProductSpecification()**](ProductReferencesApi.md#productReferencesGetProductSpecification) | **GET** /api/storefront/v1/product-references/{reference}/product-specification | Returns a product specification by the storefront product reference. |
| [**productReferencesGetProductSummary()**](ProductReferencesApi.md#productReferencesGetProductSummary) | **GET** /api/storefront/v1/product-references/{reference}/product-summary | Returns a product summary by storefront product reference. |


## `productReferencesGet()`

```php
productReferencesGet($reference, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\ProductReferenceDto
```

Returns a storefront product reference.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGet($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductReferenceDto**](../Model/ProductReferenceDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetAll()`

```php
productReferencesGetAll($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductReferenceDto
```

Returns all storefront product references relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$product_reference = 'product_reference_example'; // string | Product reference filter.  Product reference is an external reference to Customer's Canvas product, e.g online store product identifier.
$product_specification_id = 56; // int | Customer's Canvas product specification filter.
$product_id = 56; // int | Customer's Canvas product filter.
$product_link_id = 56; // int | Customer's Canvas product link filter.
$product_bundle_id = 56; // int | Customer's Canvas product bundle filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$sku = 'sku_example'; // string | SKU filter.
$tags = array('tags_example'); // string[] | List of tags that product should have.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetAll($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **product_reference** | **string**| Product reference filter.  Product reference is an external reference to Customer&#39;s Canvas product, e.g online store product identifier. | [optional] |
| **product_specification_id** | **int**| Customer&#39;s Canvas product specification filter. | [optional] |
| **product_id** | **int**| Customer&#39;s Canvas product filter. | [optional] |
| **product_link_id** | **int**| Customer&#39;s Canvas product link filter. | [optional] |
| **product_bundle_id** | **int**| Customer&#39;s Canvas product bundle filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **sku** | **string**| SKU filter. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| List of tags that product should have. | [optional] |
| **custom_fields** | **string**| Serialized custom fields dictionary filter. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductReferenceDto**](../Model/PagedOfProductReferenceDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetAllProductBundles()`

```php
productReferencesGetAllProductBundles($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductBundleDto
```

Returns a list of product bundles associated with storefront product references relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$product_reference = 'product_reference_example'; // string | Product reference filter.  Product reference is an external reference to Customer's Canvas product, e.g online store product identifier.
$product_specification_id = 56; // int | Customer's Canvas product specification filter.
$product_id = 56; // int | Customer's Canvas product filter.
$product_link_id = 56; // int | Customer's Canvas product link filter.
$product_bundle_id = 56; // int | Customer's Canvas product bundle filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$sku = 'sku_example'; // string | SKU filter.
$tags = array('tags_example'); // string[] | List of tags that product should have.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetAllProductBundles($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetAllProductBundles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **product_reference** | **string**| Product reference filter.  Product reference is an external reference to Customer&#39;s Canvas product, e.g online store product identifier. | [optional] |
| **product_specification_id** | **int**| Customer&#39;s Canvas product specification filter. | [optional] |
| **product_id** | **int**| Customer&#39;s Canvas product filter. | [optional] |
| **product_link_id** | **int**| Customer&#39;s Canvas product link filter. | [optional] |
| **product_bundle_id** | **int**| Customer&#39;s Canvas product bundle filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **sku** | **string**| SKU filter. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| List of tags that product should have. | [optional] |
| **custom_fields** | **string**| Serialized custom fields dictionary filter. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}. | [optional] |
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

## `productReferencesGetAllProductLinks()`

```php
productReferencesGetAllProductLinks($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductLinkDto
```

Returns a list of product links associated with storefront product references relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$product_reference = 'product_reference_example'; // string | Product reference filter.  Product reference is an external reference to Customer's Canvas product, e.g online store product identifier.
$product_specification_id = 56; // int | Customer's Canvas product specification filter.
$product_id = 56; // int | Customer's Canvas product filter.
$product_link_id = 56; // int | Customer's Canvas product link filter.
$product_bundle_id = 56; // int | Customer's Canvas product bundle filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$sku = 'sku_example'; // string | SKU filter.
$tags = array('tags_example'); // string[] | List of tags that product should have.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetAllProductLinks($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetAllProductLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **product_reference** | **string**| Product reference filter.  Product reference is an external reference to Customer&#39;s Canvas product, e.g online store product identifier. | [optional] |
| **product_specification_id** | **int**| Customer&#39;s Canvas product specification filter. | [optional] |
| **product_id** | **int**| Customer&#39;s Canvas product filter. | [optional] |
| **product_link_id** | **int**| Customer&#39;s Canvas product link filter. | [optional] |
| **product_bundle_id** | **int**| Customer&#39;s Canvas product bundle filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **sku** | **string**| SKU filter. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| List of tags that product should have. | [optional] |
| **custom_fields** | **string**| Serialized custom fields dictionary filter. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductLinkDto**](../Model/PagedOfProductLinkDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetAllProductSpecifications()`

```php
productReferencesGetAllProductSpecifications($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductSpecificationDto
```

Returns a list of product specifications associated with storefront product references relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$product_reference = 'product_reference_example'; // string | Product reference filter.  Product reference is an external reference to Customer's Canvas product, e.g online store product identifier.
$product_specification_id = 56; // int | Customer's Canvas product specification filter.
$product_id = 56; // int | Customer's Canvas product filter.
$product_link_id = 56; // int | Customer's Canvas product link filter.
$product_bundle_id = 56; // int | Customer's Canvas product bundle filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$sku = 'sku_example'; // string | SKU filter.
$tags = array('tags_example'); // string[] | List of tags that product should have.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetAllProductSpecifications($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetAllProductSpecifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **product_reference** | **string**| Product reference filter.  Product reference is an external reference to Customer&#39;s Canvas product, e.g online store product identifier. | [optional] |
| **product_specification_id** | **int**| Customer&#39;s Canvas product specification filter. | [optional] |
| **product_id** | **int**| Customer&#39;s Canvas product filter. | [optional] |
| **product_link_id** | **int**| Customer&#39;s Canvas product link filter. | [optional] |
| **product_bundle_id** | **int**| Customer&#39;s Canvas product bundle filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **sku** | **string**| SKU filter. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| List of tags that product should have. | [optional] |
| **custom_fields** | **string**| Serialized custom fields dictionary filter. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductSpecificationDto**](../Model/PagedOfProductSpecificationDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetAllProducts()`

```php
productReferencesGetAllProducts($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductDto
```

Returns a list of products associated with storefront product references relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$product_reference = 'product_reference_example'; // string | Product reference filter.  Product reference is an external reference to Customer's Canvas product, e.g online store product identifier.
$product_specification_id = 56; // int | Customer's Canvas product specification filter.
$product_id = 56; // int | Customer's Canvas product filter.
$product_link_id = 56; // int | Customer's Canvas product link filter.
$product_bundle_id = 56; // int | Customer's Canvas product bundle filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$sku = 'sku_example'; // string | SKU filter.
$tags = array('tags_example'); // string[] | List of tags that product should have.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetAllProducts($storefront_id, $product_reference, $product_specification_id, $product_id, $product_link_id, $product_bundle_id, $skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetAllProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **product_reference** | **string**| Product reference filter.  Product reference is an external reference to Customer&#39;s Canvas product, e.g online store product identifier. | [optional] |
| **product_specification_id** | **int**| Customer&#39;s Canvas product specification filter. | [optional] |
| **product_id** | **int**| Customer&#39;s Canvas product filter. | [optional] |
| **product_link_id** | **int**| Customer&#39;s Canvas product link filter. | [optional] |
| **product_bundle_id** | **int**| Customer&#39;s Canvas product bundle filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **sku** | **string**| SKU filter. | [optional] |
| **tags** | [**string[]**](../Model/string.md)| List of tags that product should have. | [optional] |
| **custom_fields** | **string**| Serialized custom fields dictionary filter. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;}. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductDto**](../Model/PagedOfProductDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetPersonalizationWorkflow()`

```php
productReferencesGetPersonalizationWorkflow($reference, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\PersonalizationWorkflowDto
```

Returns a product personalization workflow.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetPersonalizationWorkflow($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetPersonalizationWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | [optional] |
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

## `productReferencesGetProduct()`

```php
productReferencesGetProduct($reference, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\ProductDto
```

Returns a product by storefront product reference.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetProduct($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductDto**](../Model/ProductDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetProductBundle()`

```php
productReferencesGetProductBundle($reference, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\ProductBundleDto
```

Returns a product bundle by storefront product reference.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetProductBundle($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductBundle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | |
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

## `productReferencesGetProductCostDetails()`

```php
productReferencesGetProductCostDetails($reference, $sku, $storefront_id, $storefront_user_id, $currency_code, $quantity, $tenant_id): \Aurigma\Storefront\Model\ProductCostDetailsDto
```

Returns a product cost details from ecommerce system.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$sku = 'sku_example'; // string | Product SKU.
$storefront_id = 56; // int | Storefront identifier.
$storefront_user_id = 'storefront_user_id_example'; // string | Storefront user identifier.
$currency_code = 'currency_code_example'; // string | Product cost currency code.
$quantity = 1; // int | Product quantity.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetProductCostDetails($reference, $sku, $storefront_id, $storefront_user_id, $currency_code, $quantity, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductCostDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **sku** | **string**| Product SKU. | |
| **storefront_id** | **int**| Storefront identifier. | |
| **storefront_user_id** | **string**| Storefront user identifier. | [optional] |
| **currency_code** | **string**| Product cost currency code. | [optional] |
| **quantity** | **int**| Product quantity. | [optional] [default to 1] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductCostDetailsDto**](../Model/ProductCostDetailsDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetProductLink()`

```php
productReferencesGetProductLink($reference, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\ProductLinkDto
```

Returns a product link by storefront product reference.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetProductLink($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductLinkDto**](../Model/ProductLinkDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetProductSpecification()`

```php
productReferencesGetProductSpecification($reference, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\ProductSpecificationDto
```

Returns a product specification by the storefront product reference.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Product reference - external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetProductSpecification($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductSpecification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| Product reference - external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductSpecificationDto**](../Model/ProductSpecificationDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productReferencesGetProductSummary()`

```php
productReferencesGetProductSummary($reference, $storefront_id, $product_variant_id, $sku, $tenant_id): \Aurigma\Storefront\Model\ProductSummaryDto
```

Returns a product summary by storefront product reference.

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


$apiInstance = new Aurigma\Storefront\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | An external reference to Customer's Canvas product, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$product_variant_id = 56; // int | Product variant identifier.
$sku = 'sku_example'; // string | Product variant SKU.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGetProductSummary($reference, $storefront_id, $product_variant_id, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGetProductSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reference** | **string**| An external reference to Customer&#39;s Canvas product, e.g online store product identifier. | |
| **storefront_id** | **int**| Storefront identifier. | |
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
