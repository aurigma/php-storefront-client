# Aurigma\Storefront\ProductsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productsGetAllProductOptions()**](ProductsApi.md#productsGetAllProductOptions) | **GET** /api/storefront/v1/products/options | Returns a list of product options for all products. |
| [**productsGetAllProducts()**](ProductsApi.md#productsGetAllProducts) | **GET** /api/storefront/v1/products | Returns all products, relevant to the specified query parameters. |
| [**productsGetAvailableProductTags()**](ProductsApi.md#productsGetAvailableProductTags) | **GET** /api/storefront/v1/products/available-tags | Returns a list of all available product tags. |
| [**productsGetPersonalizationWorkflow()**](ProductsApi.md#productsGetPersonalizationWorkflow) | **GET** /api/storefront/v1/products/{id}/personalization-workflow | Returns a product personalization workflow description by product identifier. |
| [**productsGetProduct()**](ProductsApi.md#productsGetProduct) | **GET** /api/storefront/v1/products/{id} | Returns a product by identifier. |
| [**productsGetProductLink()**](ProductsApi.md#productsGetProductLink) | **GET** /api/storefront/v1/products/{id}/links/{productLinkId} | Returns a product link. |
| [**productsGetProductLinks()**](ProductsApi.md#productsGetProductLinks) | **GET** /api/storefront/v1/products/{id}/links | Returns a list of product links. |
| [**productsGetProductOptions()**](ProductsApi.md#productsGetProductOptions) | **GET** /api/storefront/v1/products/{id}/options | Returns a list of product options. |
| [**productsGetProductSummary()**](ProductsApi.md#productsGetProductSummary) | **GET** /api/storefront/v1/products/{id}/summary | Returns a product summary by product identifier. |
| [**productsGetProductVariant()**](ProductsApi.md#productsGetProductVariant) | **GET** /api/storefront/v1/products/{id}/variants/{productVariantId} | Returns a product variant. |
| [**productsGetProductVariantDesigns()**](ProductsApi.md#productsGetProductVariantDesigns) | **GET** /api/storefront/v1/products/{id}/variant-designs | Returns a list of product variant designs. |
| [**productsGetProductVariantDocuments()**](ProductsApi.md#productsGetProductVariantDocuments) | **GET** /api/storefront/v1/products/{id}/variant-documents | Returns a list of product variant documents. |
| [**productsGetProductVariantMockups()**](ProductsApi.md#productsGetProductVariantMockups) | **GET** /api/storefront/v1/products/{id}/variant-mockups | Returns a list of product variant mockups. |
| [**productsGetProductVariants()**](ProductsApi.md#productsGetProductVariants) | **GET** /api/storefront/v1/products/{id}/variants | Returns a list of product variants. |
| [**productsUpdateProductVariantResources()**](ProductsApi.md#productsUpdateProductVariantResources) | **POST** /api/storefront/v1/products/{id}/update-variant-resources | Updates product variant resources. |


## `productsGetAllProductOptions()`

```php
productsGetAllProductOptions($tenant_id): \Aurigma\Storefront\Model\PagedOfProductOptionDto
```

Returns a list of product options for all products.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetAllProductOptions($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetAllProductOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductOptionDto**](../Model/PagedOfProductOptionDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetAllProducts()`

```php
productsGetAllProducts($skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductDto
```

Returns all products, relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$sku = 'sku_example'; // string | SKU of linked ecommerce product.
$tags = array('tags_example'); // string[] | List of tags that product should have.
$custom_fields = 'custom_fields_example'; // string | Serialized custom fields dictionary filter. For example: {\"public\":\"true\",\"name\":\"my item\"}.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetAllProducts($skip, $take, $sorting, $search, $sku, $tags, $custom_fields, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetAllProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **sku** | **string**| SKU of linked ecommerce product. | [optional] |
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

## `productsGetAvailableProductTags()`

```php
productsGetAvailableProductTags($search, $tenant_id): string[]
```

Returns a list of all available product tags.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search string for partial match.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetAvailableProductTags($search, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetAvailableProductTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search string for partial match. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

**string[]**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetPersonalizationWorkflow()`

```php
productsGetPersonalizationWorkflow($id, $product_version_id, $product_link_id, $product_filter_id, $tenant_id): \Aurigma\Storefront\Model\PersonalizationWorkflowDto
```

Returns a product personalization workflow description by product identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$product_link_id = 56; // int | Product link identifier.
$product_filter_id = 56; // int | Product filter identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetPersonalizationWorkflow($id, $product_version_id, $product_link_id, $product_filter_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetPersonalizationWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **product_link_id** | **int**| Product link identifier. | [optional] |
| **product_filter_id** | **int**| Product filter identifier. | [optional] |
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

## `productsGetProduct()`

```php
productsGetProduct($id, $product_version_id, $tenant_id): \Aurigma\Storefront\Model\ProductDto
```

Returns a product by identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProduct($id, $product_version_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
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

## `productsGetProductLink()`

```php
productsGetProductLink($id, $product_link_id, $product_version_id, $tenant_id): \Aurigma\Storefront\Model\ProductLinkDto
```

Returns a product link.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_link_id = 56; // int | Product link identifier.
$product_version_id = 56; // int | Product version identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductLink($id, $product_link_id, $product_version_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_link_id** | **int**| Product link identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
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

## `productsGetProductLinks()`

```php
productsGetProductLinks($id, $product_version_id, $skip, $take, $sorting, $search, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductLinkDto
```

Returns a list of product links.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductLinks($id, $product_version_id, $skip, $take, $sorting, $search, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
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

## `productsGetProductOptions()`

```php
productsGetProductOptions($id, $product_version_id, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductOptionDto
```

Returns a list of product options.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductOptions($id, $product_version_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductOptionDto**](../Model/PagedOfProductOptionDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetProductSummary()`

```php
productsGetProductSummary($id, $product_version_id, $product_link_id, $product_variant_id, $sku, $tenant_id): \Aurigma\Storefront\Model\ProductSummaryDto
```

Returns a product summary by product identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$product_link_id = 56; // int | Product link identifier.
$product_variant_id = 56; // int | Product variant identifier.
$sku = 'sku_example'; // string | Product variant SKU.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductSummary($id, $product_version_id, $product_link_id, $product_variant_id, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **product_link_id** | **int**| Product link identifier. | [optional] |
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

## `productsGetProductVariant()`

```php
productsGetProductVariant($id, $product_variant_id, $product_version_id, $tenant_id): \Aurigma\Storefront\Model\ProductVariantDto
```

Returns a product variant.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_variant_id = 56; // int | Product variant identifier.
$product_version_id = 56; // int | Product version identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductVariant($id, $product_variant_id, $product_version_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductVariant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_variant_id** | **int**| Product variant identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProductVariantDto**](../Model/ProductVariantDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetProductVariantDesigns()`

```php
productsGetProductVariantDesigns($id, $product_version_id, $product_variant_id, $search, $design_custom_fields, $design_path, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductVariantDesignDto
```

Returns a list of product variant designs.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$product_variant_id = 56; // int | Product variant identifier.
$search = 'search_example'; // string | Search string for design name partial match.
$design_custom_fields = 'design_custom_fields_example'; // string | Custom attributes dictionary filter for designs. For example: {\"public\":\"true\",\"name\":\"my item\"}
$design_path = 'design_path_example'; // string | Path filter for designs. Subfolders included by default.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$options = 'options_example'; // string | Defines options filter e.g.: \"{ \"opt1_id\": \"opt1_val1_id, opt1_val2_id\", \"opt2_id\": \"opt2_val1_id\" }\".
$product_filter_id = 56; // int | Defines special filter based on product filter with specified identifier.
$take_available_only = True; // bool | Defines special filter for available product variants.
$sku = 'sku_example'; // string | SKU of linked ecommerce product.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductVariantDesigns($id, $product_version_id, $product_variant_id, $search, $design_custom_fields, $design_path, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductVariantDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **product_variant_id** | **int**| Product variant identifier. | [optional] |
| **search** | **string**| Search string for design name partial match. | [optional] |
| **design_custom_fields** | **string**| Custom attributes dictionary filter for designs. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;} | [optional] |
| **design_path** | **string**| Path filter for designs. Subfolders included by default. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **options** | **string**| Defines options filter e.g.: \&quot;{ \&quot;opt1_id\&quot;: \&quot;opt1_val1_id, opt1_val2_id\&quot;, \&quot;opt2_id\&quot;: \&quot;opt2_val1_id\&quot; }\&quot;. | [optional] |
| **product_filter_id** | **int**| Defines special filter based on product filter with specified identifier. | [optional] |
| **take_available_only** | **bool**| Defines special filter for available product variants. | [optional] |
| **sku** | **string**| SKU of linked ecommerce product. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductVariantDesignDto**](../Model/PagedOfProductVariantDesignDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetProductVariantDocuments()`

```php
productsGetProductVariantDocuments($id, $product_version_id, $product_variant_id, $search, $document_custom_fields, $document_path, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductVariantDocumentDto
```

Returns a list of product variant documents.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$product_variant_id = 56; // int | Product variant identifier.
$search = 'search_example'; // string | Search string for document name partial match.
$document_custom_fields = 'document_custom_fields_example'; // string | Custom attributes dictionary filter for documents. For example: {\"public\":\"true\",\"name\":\"my item\"}
$document_path = 'document_path_example'; // string | Path filter for documents. Subfolders included by default.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$options = 'options_example'; // string | Defines options filter e.g.: \"{ \"opt1_id\": \"opt1_val1_id, opt1_val2_id\", \"opt2_id\": \"opt2_val1_id\" }\".
$product_filter_id = 56; // int | Defines special filter based on product filter with specified identifier.
$take_available_only = True; // bool | Defines special filter for available product variants.
$sku = 'sku_example'; // string | SKU of linked ecommerce product.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductVariantDocuments($id, $product_version_id, $product_variant_id, $search, $document_custom_fields, $document_path, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductVariantDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **product_variant_id** | **int**| Product variant identifier. | [optional] |
| **search** | **string**| Search string for document name partial match. | [optional] |
| **document_custom_fields** | **string**| Custom attributes dictionary filter for documents. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;} | [optional] |
| **document_path** | **string**| Path filter for documents. Subfolders included by default. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **options** | **string**| Defines options filter e.g.: \&quot;{ \&quot;opt1_id\&quot;: \&quot;opt1_val1_id, opt1_val2_id\&quot;, \&quot;opt2_id\&quot;: \&quot;opt2_val1_id\&quot; }\&quot;. | [optional] |
| **product_filter_id** | **int**| Defines special filter based on product filter with specified identifier. | [optional] |
| **take_available_only** | **bool**| Defines special filter for available product variants. | [optional] |
| **sku** | **string**| SKU of linked ecommerce product. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductVariantDocumentDto**](../Model/PagedOfProductVariantDocumentDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetProductVariantMockups()`

```php
productsGetProductVariantMockups($id, $product_version_id, $product_variant_id, $search, $mockup_custom_fields, $mockup_path, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductVariantMockupDto
```

Returns a list of product variant mockups.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$product_variant_id = 56; // int | Product variant identifier.
$search = 'search_example'; // string | Search string for design name partial match.
$mockup_custom_fields = 'mockup_custom_fields_example'; // string | Custom attributes dictionary filter for mockups. For example: {\"public\":\"true\",\"name\":\"my item\"}
$mockup_path = 'mockup_path_example'; // string | Path filter for mockups. Subfolders included by default.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$options = 'options_example'; // string | Defines options filter e.g.: \"{ \"opt1_id\": \"opt1_val1_id, opt1_val2_id\", \"opt2_id\": \"opt2_val1_id\" }\".
$product_filter_id = 56; // int | Defines special filter based on product filter with specified identifier.
$take_available_only = True; // bool | Defines special filter for available product variants.
$sku = 'sku_example'; // string | SKU of linked ecommerce product.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductVariantMockups($id, $product_version_id, $product_variant_id, $search, $mockup_custom_fields, $mockup_path, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductVariantMockups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **product_variant_id** | **int**| Product variant identifier. | [optional] |
| **search** | **string**| Search string for design name partial match. | [optional] |
| **mockup_custom_fields** | **string**| Custom attributes dictionary filter for mockups. For example: {\&quot;public\&quot;:\&quot;true\&quot;,\&quot;name\&quot;:\&quot;my item\&quot;} | [optional] |
| **mockup_path** | **string**| Path filter for mockups. Subfolders included by default. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **options** | **string**| Defines options filter e.g.: \&quot;{ \&quot;opt1_id\&quot;: \&quot;opt1_val1_id, opt1_val2_id\&quot;, \&quot;opt2_id\&quot;: \&quot;opt2_val1_id\&quot; }\&quot;. | [optional] |
| **product_filter_id** | **int**| Defines special filter based on product filter with specified identifier. | [optional] |
| **take_available_only** | **bool**| Defines special filter for available product variants. | [optional] |
| **sku** | **string**| SKU of linked ecommerce product. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductVariantMockupDto**](../Model/PagedOfProductVariantMockupDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsGetProductVariants()`

```php
productsGetProductVariants($id, $product_version_id, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id): \Aurigma\Storefront\Model\PagedOfProductVariantDto
```

Returns a list of product variants.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$options = 'options_example'; // string | Defines options filter e.g.: \"{ \"opt1_id\": \"opt1_val1_id, opt1_val2_id\", \"opt2_id\": \"opt2_val1_id\" }\".
$product_filter_id = 56; // int | Defines special filter based on product filter with specified identifier.
$take_available_only = True; // bool | Defines special filter for available product variants.
$sku = 'sku_example'; // string | SKU of linked ecommerce product.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productsGetProductVariants($id, $product_version_id, $skip, $take, $options, $product_filter_id, $take_available_only, $sku, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsGetProductVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **options** | **string**| Defines options filter e.g.: \&quot;{ \&quot;opt1_id\&quot;: \&quot;opt1_val1_id, opt1_val2_id\&quot;, \&quot;opt2_id\&quot;: \&quot;opt2_val1_id\&quot; }\&quot;. | [optional] |
| **product_filter_id** | **int**| Defines special filter based on product filter with specified identifier. | [optional] |
| **take_available_only** | **bool**| Defines special filter for available product variants. | [optional] |
| **sku** | **string**| SKU of linked ecommerce product. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProductVariantDto**](../Model/PagedOfProductVariantDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productsUpdateProductVariantResources()`

```php
productsUpdateProductVariantResources($id, $product_version_id, $tenant_id)
```

Updates product variant resources.

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


$apiInstance = new Aurigma\Storefront\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Product identifier.
$product_version_id = 56; // int | Product version identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $apiInstance->productsUpdateProductVariantResources($id, $product_version_id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsUpdateProductVariantResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Product identifier. | |
| **product_version_id** | **int**| Product version identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
