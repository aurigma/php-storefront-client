# Aurigma\Storefront\ProjectsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsChangeStatus()**](ProjectsApi.md#projectsChangeStatus) | **POST** /api/storefront/v1/projects/{id}/transitions/{transition} | Changes project status
[**projectsCreate()**](ProjectsApi.md#projectsCreate) | **POST** /api/storefront/v1/projects | Creates new project
[**projectsForceStatus()**](ProjectsApi.md#projectsForceStatus) | **POST** /api/storefront/v1/projects/{id}/statuses/{status} | Force changes project status
[**projectsGet()**](ProjectsApi.md#projectsGet) | **GET** /api/storefront/v1/projects/{id} | Gets project by id
[**projectsGetAll()**](ProjectsApi.md#projectsGetAll) | **GET** /api/storefront/v1/projects | Gets all projects relevant to specified query parameters
[**projectsGetAllStatuses()**](ProjectsApi.md#projectsGetAllStatuses) | **GET** /api/storefront/v1/projects/statuses | Gets all project statuses
[**projectsGetAllTransitions()**](ProjectsApi.md#projectsGetAllTransitions) | **GET** /api/storefront/v1/projects/transitions | Gets all project transitions
[**projectsGetAvailableTransitions()**](ProjectsApi.md#projectsGetAvailableTransitions) | **GET** /api/storefront/v1/projects/{id}/transitions | Gets available project transitions
[**projectsGetProjectOrder()**](ProjectsApi.md#projectsGetProjectOrder) | **GET** /api/storefront/v1/projects/{id}/order | Gets project order data from ecommerce system
[**projectsGetProjectPdfUrl()**](ProjectsApi.md#projectsGetProjectPdfUrl) | **GET** /api/storefront/v1/projects/{id}/project-pdf | Gets project pdf url
[**projectsGetProjectPdfZip()**](ProjectsApi.md#projectsGetProjectPdfZip) | **GET** /api/storefront/v1/projects/{id}/project-pdf-zip | Gets project pdf files in zip archive


## `projectsChangeStatus()`

```php
projectsChangeStatus($id, $transition, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProjectStatusDto
```

Changes project status

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier
$transition = 'transition_example'; // string | Transition identifying name
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsChangeStatus($id, $transition, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsChangeStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project identifier |
 **transition** | **string**| Transition identifying name |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProjectStatusDto**](../Model/ProjectStatusDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreate()`

```php
projectsCreate($storefront_id, $tenant_id, $user_id, $create_project_dto): \Aurigma\Storefront\Model\ProjectDto
```

Creates new project

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier
$create_project_dto = new \Aurigma\Storefront\Model\CreateProjectDto(); // \Aurigma\Storefront\Model\CreateProjectDto | Create operation parameters

try {
    $result = $apiInstance->projectsCreate($storefront_id, $tenant_id, $user_id, $create_project_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]
 **create_project_dto** | [**\Aurigma\Storefront\Model\CreateProjectDto**](../Model/CreateProjectDto.md)| Create operation parameters | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsForceStatus()`

```php
projectsForceStatus($id, $status, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProjectStatusDto
```

Force changes project status

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier
$status = 56; // int | Project status code
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsForceStatus($id, $status, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsForceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project identifier |
 **status** | **int**| Project status code |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProjectStatusDto**](../Model/ProjectStatusDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGet()`

```php
projectsGet($id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProjectDto
```

Gets project by id

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGet($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProjectDto**](../Model/ProjectDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAll()`

```php
projectsGetAll($storefront_id, $status, $date_period, $skip, $take, $sorting, $search, $tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfProjectDto
```

Gets all projects relevant to specified query parameters

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storefront_id = 56; // int | Storefront identifier
$status = 56; // int | Project status filter
$date_period = new \Aurigma\Storefront\Model\\Aurigma\Storefront\Model\DatePeriod(); // \Aurigma\Storefront\Model\DatePeriod | Project date period filter
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$search = 'search_example'; // string | Search string for partial match
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGetAll($storefront_id, $status, $date_period, $skip, $take, $sorting, $search, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_id** | **int**| Storefront identifier |
 **status** | **int**| Project status filter | [optional]
 **date_period** | [**\Aurigma\Storefront\Model\DatePeriod**](../Model/.md)| Project date period filter | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **search** | **string**| Search string for partial match | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectDto**](../Model/PagedOfProjectDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAllStatuses()`

```php
projectsGetAllStatuses($tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfProjectStatusDto
```

Gets all project statuses

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGetAllStatuses($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAllStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectStatusDto**](../Model/PagedOfProjectStatusDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAllTransitions()`

```php
projectsGetAllTransitions($tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfProjectTransitionDto
```

Gets all project transitions

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGetAllTransitions($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAllTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectTransitionDto**](../Model/PagedOfProjectTransitionDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetAvailableTransitions()`

```php
projectsGetAvailableTransitions($id, $tenant_id, $user_id): \Aurigma\Storefront\Model\PagedOfProjectTransitionDto
```

Gets available project transitions

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGetAvailableTransitions($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetAvailableTransitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\PagedOfProjectTransitionDto**](../Model/PagedOfProjectTransitionDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetProjectOrder()`

```php
projectsGetProjectOrder($id): mixed
```

Gets project order data from ecommerce system

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project identifier

try {
    $result = $apiInstance->projectsGetProjectOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetProjectOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project identifier |

### Return type

**mixed**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetProjectPdfUrl()`

```php
projectsGetProjectPdfUrl($id, $design_user_id, $design_id, $tenant_id, $user_id): \Aurigma\Storefront\Model\ProjectPdfResultDto
```

Gets project pdf url

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project unique identifier
$design_user_id = 'design_user_id_example'; // string | User identifier
$design_id = 'design_id_example'; // string | Design identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGetProjectPdfUrl($id, $design_user_id, $design_id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetProjectPdfUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project unique identifier |
 **design_user_id** | **string**| User identifier |
 **design_id** | **string**| Design identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\Aurigma\Storefront\Model\ProjectPdfResultDto**](../Model/ProjectPdfResultDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsGetProjectPdfZip()`

```php
projectsGetProjectPdfZip($id, $design_user_id, $design_id, $attachment, $tenant_id, $user_id): \SplFileObject
```

Gets project pdf files in zip archive

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


$apiInstance = new Aurigma\Storefront\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project unique identifier
$design_user_id = 'design_user_id_example'; // string | User identifier
$design_id = 'design_id_example'; // string | Design identifier
$attachment = true; // bool | If set to 'true', file will be provided as an attachment with proper filename supplied (default value is 'false')
$tenant_id = 56; // int | Tenant identifier
$user_id = 56; // int | User identifier

try {
    $result = $apiInstance->projectsGetProjectPdfZip($id, $design_user_id, $design_id, $attachment, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetProjectPdfZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project unique identifier |
 **design_user_id** | **string**| User identifier |
 **design_id** | **string**| Design identifier |
 **attachment** | **bool**| If set to &#39;true&#39;, file will be provided as an attachment with proper filename supplied (default value is &#39;false&#39;) | [optional] [default to true]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **int**| User identifier | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
