# Aurigma\Storefront\ProjectsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectsAttachDataToProjectOrder()**](ProjectsApi.md#projectsAttachDataToProjectOrder) | **POST** /api/storefront/v1/projects/{id}/order-data | Attachs the specified data to the project&#39;s order in ecommerce system. |
| [**projectsBatchDelete()**](ProjectsApi.md#projectsBatchDelete) | **DELETE** /api/storefront/v1/projects/batch-delete | Deletes specified projects.   These projects will be hide from projects list immediately, but complete projects data cleaning will take some additional time. |
| [**projectsChangeStatus()**](ProjectsApi.md#projectsChangeStatus) | **POST** /api/storefront/v1/projects/{id}/transitions/{transition} | Changes the project status. |
| [**projectsCreateByRenderHiResScenario()**](ProjectsApi.md#projectsCreateByRenderHiResScenario) | **POST** /api/storefront/v1/projects/by-scenario/render-hires | Creates a new project by &#39;Render HiRes&#39; scenario. |
| [**projectsCreateBySpecificPipelineScenario()**](ProjectsApi.md#projectsCreateBySpecificPipelineScenario) | **POST** /api/storefront/v1/projects/by-scenario/specific-pipeline | Creates a new project by &#39;Specific Pipeline&#39; scenario. |
| [**projectsCreateWithMultipleItems()**](ProjectsApi.md#projectsCreateWithMultipleItems) | **POST** /api/storefront/v1/projects/with-multiple-items | Creates a new project with multiple items. |
| [**projectsCreateWithSingleItem()**](ProjectsApi.md#projectsCreateWithSingleItem) | **POST** /api/storefront/v1/projects/with-single-item | Creates a new project with single item. |
| [**projectsDelete()**](ProjectsApi.md#projectsDelete) | **DELETE** /api/storefront/v1/projects/{id} | Removes a project by identifier. |
| [**projectsForceStatus()**](ProjectsApi.md#projectsForceStatus) | **POST** /api/storefront/v1/projects/{id}/statuses/{status} | Changes the project status forcibly without a proper transition. |
| [**projectsGet()**](ProjectsApi.md#projectsGet) | **GET** /api/storefront/v1/projects/{id} | Returns a project by identifier. |
| [**projectsGetAll()**](ProjectsApi.md#projectsGetAll) | **GET** /api/storefront/v1/projects | Returns all projects, relevant to the specified query parameters. |
| [**projectsGetAllStatuses()**](ProjectsApi.md#projectsGetAllStatuses) | **GET** /api/storefront/v1/projects/statuses | Returns a list of all existing project statuses. |
| [**projectsGetAllTransitions()**](ProjectsApi.md#projectsGetAllTransitions) | **GET** /api/storefront/v1/projects/transitions | Returns a list of all existing project status transitions. |
| [**projectsGetAvailableTransitions()**](ProjectsApi.md#projectsGetAvailableTransitions) | **GET** /api/storefront/v1/projects/{id}/transitions | Returns all available status transitions for a project. |
| [**projectsGetPreview()**](ProjectsApi.md#projectsGetPreview) | **GET** /api/storefront/v1/projects/{id}/preview | Returns a project preview file by project identifier. |
| [**projectsGetPreviewUrl()**](ProjectsApi.md#projectsGetPreviewUrl) | **GET** /api/storefront/v1/projects/{id}/preview-url | Returns a project preview URL by project identifier. |
| [**projectsGetProjectOrder()**](ProjectsApi.md#projectsGetProjectOrder) | **GET** /api/storefront/v1/projects/{id}/order | Returns an order description from the ecommerce system for the specified project. |
| [**projectsGetProjectProcessingResults()**](ProjectsApi.md#projectsGetProjectProcessingResults) | **GET** /api/storefront/v1/projects/{id}/processing-results | Returns a project processing results. |
| [**projectsRestartProjectProcessing()**](ProjectsApi.md#projectsRestartProjectProcessing) | **POST** /api/storefront/v1/projects/{id}/restart-processing | Restarts a project processing routine. |
| [**projectsResumeProjectProcessing()**](ProjectsApi.md#projectsResumeProjectProcessing) | **POST** /api/storefront/v1/projects/{id}/resume-processing | Resumes project processing. |


## `projectsAttachDataToProjectOrder()`

```php
projectsAttachDataToProjectOrder($id, $item_id, $tenant_id, $order_data_item_dto)
```

Attachs the specified data to the project's order in ecommerce system.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$item_id = 56; // int | Project item identifier.
$tenant_id = 56; // int | Tenant identifier.
$order_data_item_dto = array(new \Aurigma\Storefront\Model\OrderDataItemDto()); // \Aurigma\Storefront\Model\OrderDataItemDto[] | A list of data items, which should be attached to project's order.

try {
    $apiInstance->projectsAttachDataToProjectOrder($id, $item_id, $tenant_id, $order_data_item_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsAttachDataToProjectOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **item_id** | **int**| Project item identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **order_data_item_dto** | [**\Aurigma\Storefront\Model\OrderDataItemDto[]**](../Model/OrderDataItemDto.md)| A list of data items, which should be attached to project&#39;s order. | [optional] |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsBatchDelete()`

```php
projectsBatchDelete($tenant_id, $projects_batch_delete_request): \Aurigma\Storefront\Model\PagedOfProjectStatusDto
```

Deletes specified projects.   These projects will be hide from projects list immediately, but complete projects data cleaning will take some additional time.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.
$projects_batch_delete_request = new \Aurigma\Storefront\Model\ProjectsBatchDeleteRequest(); // \Aurigma\Storefront\Model\ProjectsBatchDeleteRequest | Operation parameters.

try {
    $result = $apiInstance->projectsBatchDelete($tenant_id, $projects_batch_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsBatchDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **projects_batch_delete_request** | [**\Aurigma\Storefront\Model\ProjectsBatchDeleteRequest**](../Model/ProjectsBatchDeleteRequest.md)| Operation parameters. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectStatusDto**](../Model/PagedOfProjectStatusDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsChangeStatus()`

```php
projectsChangeStatus($id, $transition, $tenant_id): \Aurigma\Storefront\Model\ProjectStatusDto
```

Changes the project status.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier
$transition = 'transition_example'; // string | Transition identifying name.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsChangeStatus($id, $transition, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsChangeStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier | |
| **transition** | **string**| Transition identifying name. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectStatusDto**](../Model/ProjectStatusDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreateByRenderHiResScenario()`

```php
projectsCreateByRenderHiResScenario($storefront_id, $tenant_id, $projects_create_by_render_hi_res_scenario_request): \Aurigma\Storefront\Model\ProjectDto
```

Creates a new project by 'Render HiRes' scenario.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$projects_create_by_render_hi_res_scenario_request = new \Aurigma\Storefront\Model\ProjectsCreateByRenderHiResScenarioRequest(); // \Aurigma\Storefront\Model\ProjectsCreateByRenderHiResScenarioRequest | Create operation parameters.

try {
    $result = $apiInstance->projectsCreateByRenderHiResScenario($storefront_id, $tenant_id, $projects_create_by_render_hi_res_scenario_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreateByRenderHiResScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **projects_create_by_render_hi_res_scenario_request** | [**\Aurigma\Storefront\Model\ProjectsCreateByRenderHiResScenarioRequest**](../Model/ProjectsCreateByRenderHiResScenarioRequest.md)| Create operation parameters. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreateBySpecificPipelineScenario()`

```php
projectsCreateBySpecificPipelineScenario($storefront_id, $tenant_id, $projects_create_by_specific_pipeline_scenario_request): \Aurigma\Storefront\Model\ProjectDto
```

Creates a new project by 'Specific Pipeline' scenario.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$projects_create_by_specific_pipeline_scenario_request = new \Aurigma\Storefront\Model\ProjectsCreateBySpecificPipelineScenarioRequest(); // \Aurigma\Storefront\Model\ProjectsCreateBySpecificPipelineScenarioRequest | Create operation parameters.

try {
    $result = $apiInstance->projectsCreateBySpecificPipelineScenario($storefront_id, $tenant_id, $projects_create_by_specific_pipeline_scenario_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreateBySpecificPipelineScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **projects_create_by_specific_pipeline_scenario_request** | [**\Aurigma\Storefront\Model\ProjectsCreateBySpecificPipelineScenarioRequest**](../Model/ProjectsCreateBySpecificPipelineScenarioRequest.md)| Create operation parameters. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreateWithMultipleItems()`

```php
projectsCreateWithMultipleItems($storefront_id, $tenant_id, $projects_create_with_multiple_items_request): \Aurigma\Storefront\Model\ProjectDto
```

Creates a new project with multiple items.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$projects_create_with_multiple_items_request = new \Aurigma\Storefront\Model\ProjectsCreateWithMultipleItemsRequest(); // \Aurigma\Storefront\Model\ProjectsCreateWithMultipleItemsRequest | Create operation parameters.

try {
    $result = $apiInstance->projectsCreateWithMultipleItems($storefront_id, $tenant_id, $projects_create_with_multiple_items_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreateWithMultipleItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **projects_create_with_multiple_items_request** | [**\Aurigma\Storefront\Model\ProjectsCreateWithMultipleItemsRequest**](../Model/ProjectsCreateWithMultipleItemsRequest.md)| Create operation parameters. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreateWithSingleItem()`

```php
projectsCreateWithSingleItem($storefront_id, $tenant_id, $projects_create_with_single_item_request): \Aurigma\Storefront\Model\ProjectDto
```

Creates a new project with single item.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.
$projects_create_with_single_item_request = new \Aurigma\Storefront\Model\ProjectsCreateWithSingleItemRequest(); // \Aurigma\Storefront\Model\ProjectsCreateWithSingleItemRequest | Create operation parameters.

try {
    $result = $apiInstance->projectsCreateWithSingleItem($storefront_id, $tenant_id, $projects_create_with_single_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreateWithSingleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storefront_id** | **int**| Storefront identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |
| **projects_create_with_single_item_request** | [**\Aurigma\Storefront\Model\ProjectsCreateWithSingleItemRequest**](../Model/ProjectsCreateWithSingleItemRequest.md)| Create operation parameters. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsDelete()`

```php
projectsDelete($id, $tenant_id)
```

Removes a project by identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $apiInstance->projectsDelete($id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
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

## `projectsForceStatus()`

```php
projectsForceStatus($id, $status, $tenant_id): \Aurigma\Storefront\Model\ProjectStatusDto
```

Changes the project status forcibly without a proper transition.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$status = 56; // int | Project status code.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsForceStatus($id, $status, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsForceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **status** | **int**| Project status code. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectStatusDto**](../Model/ProjectStatusDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGet()`

```php
projectsGet($id, $tenant_id): \Aurigma\Storefront\Model\ProjectDto
```

Returns a project by identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGet($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAll()`

```php
projectsGetAll($owner_id, $product_reference, $status, $date_period, $skip, $take, $sorting, $search, $order_id, $processing_status, $include_obsolete, $storefront_id, $tenant_id): \Aurigma\Storefront\Model\PagedOfProjectDto
```

Returns all projects, relevant to the specified query parameters.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner_id = 'owner_id_example'; // string | Project owner (storefront user id) filter.
$product_reference = 'product_reference_example'; // string | Product reference filter.
$status = 56; // int | Project status filter.
$date_period = new \Aurigma\Storefront\Model\\Aurigma\Storefront\Model\DatePeriod(); // \Aurigma\Storefront\Model\DatePeriod | Project date period filter.
$skip = 56; // int | Defines page start offset from beginning of sorted result list.
$take = 56; // int | Defines page length (how many consequent items of sorted result list should be taken).
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\".
$search = 'search_example'; // string | Search string for partial match.
$order_id = 'order_id_example'; // string | Identifier of corresponding order.
$processing_status = new \Aurigma\Storefront\Model\\Aurigma\Storefront\Model\ProjectProcessingStatus(); // \Aurigma\Storefront\Model\ProjectProcessingStatus | Project processing status filter.
$include_obsolete = True; // bool | Indicates if obsolete projects prepared to be removed should be included to result.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetAll($owner_id, $product_reference, $status, $date_period, $skip, $take, $sorting, $search, $order_id, $processing_status, $include_obsolete, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **owner_id** | **string**| Project owner (storefront user id) filter. | [optional] |
| **product_reference** | **string**| Product reference filter. | [optional] |
| **status** | **int**| Project status filter. | [optional] |
| **date_period** | [**\Aurigma\Storefront\Model\DatePeriod**](../Model/.md)| Project date period filter. | [optional] |
| **skip** | **int**| Defines page start offset from beginning of sorted result list. | [optional] |
| **take** | **int**| Defines page length (how many consequent items of sorted result list should be taken). | [optional] |
| **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot;. | [optional] |
| **search** | **string**| Search string for partial match. | [optional] |
| **order_id** | **string**| Identifier of corresponding order. | [optional] |
| **processing_status** | [**\Aurigma\Storefront\Model\ProjectProcessingStatus**](../Model/.md)| Project processing status filter. | [optional] |
| **include_obsolete** | **bool**| Indicates if obsolete projects prepared to be removed should be included to result. | [optional] |
| **storefront_id** | **int**| Storefront identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectDto**](../Model/PagedOfProjectDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAllStatuses()`

```php
projectsGetAllStatuses($tenant_id): \Aurigma\Storefront\Model\PagedOfProjectStatusDto
```

Returns a list of all existing project statuses.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetAllStatuses($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAllStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectStatusDto**](../Model/PagedOfProjectStatusDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAllTransitions()`

```php
projectsGetAllTransitions($tenant_id): \Aurigma\Storefront\Model\PagedOfProjectTransitionDto
```

Returns a list of all existing project status transitions.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetAllTransitions($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAllTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectTransitionDto**](../Model/PagedOfProjectTransitionDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAvailableTransitions()`

```php
projectsGetAvailableTransitions($id, $tenant_id): \Aurigma\Storefront\Model\PagedOfProjectTransitionDto
```

Returns all available status transitions for a project.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetAvailableTransitions($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAvailableTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectTransitionDto**](../Model/PagedOfProjectTransitionDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetPreview()`

```php
projectsGetPreview($id, $tenant_id): \SplFileObject
```

Returns a project preview file by project identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetPreview($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetPreviewUrl()`

```php
projectsGetPreviewUrl($id, $tenant_id): string
```

Returns a project preview URL by project identifier.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetPreviewUrl($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetPreviewUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

**string**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetProjectOrder()`

```php
projectsGetProjectOrder($id, $tenant_id): mixed
```

Returns an order description from the ecommerce system for the specified project.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetProjectOrder($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetProjectOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

**mixed**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetProjectProcessingResults()`

```php
projectsGetProjectProcessingResults($id, $item_id, $tenant_id): \Aurigma\Storefront\Model\ProjectProcessingResultsDto
```

Returns a project processing results.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$item_id = 56; // int | Project item identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->projectsGetProjectProcessingResults($id, $item_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetProjectProcessingResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **item_id** | **int**| Project item identifier. | [optional] |
| **tenant_id** | **int**| Tenant identifier. | [optional] |

### Return type

[**\Aurigma\Storefront\Model\ProjectProcessingResultsDto**](../Model/ProjectProcessingResultsDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth2ClientCredentials](../../README.md#OAuth2ClientCredentials), [OAuth2Implicit](../../README.md#OAuth2Implicit), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsRestartProjectProcessing()`

```php
projectsRestartProjectProcessing($id, $item_id, $tenant_id)
```

Restarts a project processing routine.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$item_id = 56; // int | Project item identifier. If value is set, only specified item processing will be restarted.
$tenant_id = 56; // int | Tenant identifier.

try {
    $apiInstance->projectsRestartProjectProcessing($id, $item_id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsRestartProjectProcessing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **item_id** | **int**| Project item identifier. If value is set, only specified item processing will be restarted. | [optional] |
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

## `projectsResumeProjectProcessing()`

```php
projectsResumeProjectProcessing($id, $item_id, $tenant_id)
```

Resumes project processing.

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier.
$item_id = 56; // int | Project item identifier. If value is set, only specified item processing will be resumed.
$tenant_id = 56; // int | Tenant identifier.

try {
    $apiInstance->projectsResumeProjectProcessing($id, $item_id, $tenant_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsResumeProjectProcessing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Project identifier. | |
| **item_id** | **int**| Project item identifier. If value is set, only specified item processing will be resumed. | [optional] |
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
