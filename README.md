# Aurigma Customer's Canvas SDK - Storefront API Client
======================================================

This module is an Angular API client for Storefront API service which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.
* You need to use it in Angular applications **only**. 

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation. 

## Installation

```
composer require aurigma/php-storefront-client
```

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aurigma/php-storefront-client.git"
    }
  ],
  "require": {
    "aurigma/php-storefront-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation).

Receive an access token through your backend as explained in the [documentation](https://customerscanvas.com/dev/getting-started/about-backend-services.html#authorization) and deliver it to your app. 

Then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->buildInfoGetInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Aurigma Inc <info@aurigma.com> (https://customerscanvas.com)

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuildInfoApi* | [**buildInfoGetInfo**](docs/Api/BuildInfoApi.md#buildinfogetinfo) | **GET** /api/storefront/v1/info | Gets assembly build info
*BuildInfoApi* | [**buildInfoHeadInfo**](docs/Api/BuildInfoApi.md#buildinfoheadinfo) | **HEAD** /api/storefront/v1/info | Gets assembly build info
*ProductReferencesApi* | [**productReferencesCreate**](docs/Api/ProductReferencesApi.md#productreferencescreate) | **POST** /api/storefront/v1/product-references | Creates new storefront product reference
*ProductReferencesApi* | [**productReferencesDelete**](docs/Api/ProductReferencesApi.md#productreferencesdelete) | **DELETE** /api/storefront/v1/product-references/{reference} | Deletes storefront product reference
*ProductReferencesApi* | [**productReferencesGet**](docs/Api/ProductReferencesApi.md#productreferencesget) | **GET** /api/storefront/v1/product-references/{reference} | Gets storefront product reference
*ProductReferencesApi* | [**productReferencesGetAll**](docs/Api/ProductReferencesApi.md#productreferencesgetall) | **GET** /api/storefront/v1/product-references | Gets all storefront product references relevant to specified query parameters
*ProductReferencesApi* | [**productReferencesGetProductConfig**](docs/Api/ProductReferencesApi.md#productreferencesgetproductconfig) | **GET** /api/storefront/v1/product-references/{reference}/product-config | Gets product configuration information by storefront product reference
*ProductReferencesApi* | [**productReferencesGetProductSpecification**](docs/Api/ProductReferencesApi.md#productreferencesgetproductspecification) | **GET** /api/storefront/v1/product-references/{reference}/product-specification | Gets product specification by storefront product reference
*ProductSpecificationsApi* | [**productSpecificationsGet**](docs/Api/ProductSpecificationsApi.md#productspecificationsget) | **GET** /api/storefront/v1/product-specifications/{id} | Gets product specification by id
*ProductSpecificationsApi* | [**productSpecificationsGetAll**](docs/Api/ProductSpecificationsApi.md#productspecificationsgetall) | **GET** /api/storefront/v1/product-specifications | Gets all product specifications relevant to specified query parameters
*ProductSpecificationsApi* | [**productSpecificationsGetConfiguration**](docs/Api/ProductSpecificationsApi.md#productspecificationsgetconfiguration) | **GET** /api/storefront/v1/product-specifications/{id}/config | Gets product configuration description by product specification id
*ProjectsApi* | [**projectsChangeStatus**](docs/Api/ProjectsApi.md#projectschangestatus) | **POST** /api/storefront/v1/projects/{id}/transitions/{transition} | Changes project status
*ProjectsApi* | [**projectsCreate**](docs/Api/ProjectsApi.md#projectscreate) | **POST** /api/storefront/v1/projects | Creates new project
*ProjectsApi* | [**projectsForceStatus**](docs/Api/ProjectsApi.md#projectsforcestatus) | **POST** /api/storefront/v1/projects/{id}/statuses/{status} | Force changes project status
*ProjectsApi* | [**projectsGet**](docs/Api/ProjectsApi.md#projectsget) | **GET** /api/storefront/v1/projects/{id} | Gets project by id
*ProjectsApi* | [**projectsGetAll**](docs/Api/ProjectsApi.md#projectsgetall) | **GET** /api/storefront/v1/projects | Gets all projects relevant to specified query parameters
*ProjectsApi* | [**projectsGetAllStatuses**](docs/Api/ProjectsApi.md#projectsgetallstatuses) | **GET** /api/storefront/v1/projects/statuses | Gets all project statuses
*ProjectsApi* | [**projectsGetAllTransitions**](docs/Api/ProjectsApi.md#projectsgetalltransitions) | **GET** /api/storefront/v1/projects/transitions | Gets all project transitions
*ProjectsApi* | [**projectsGetAvailableTransitions**](docs/Api/ProjectsApi.md#projectsgetavailabletransitions) | **GET** /api/storefront/v1/projects/{id}/transitions | Gets available project transitions
*ProjectsApi* | [**projectsGetProjectOrder**](docs/Api/ProjectsApi.md#projectsgetprojectorder) | **GET** /api/storefront/v1/projects/{id}/order | Gets project order data from ecommerce system
*ProjectsApi* | [**projectsGetProjectPdfUrl**](docs/Api/ProjectsApi.md#projectsgetprojectpdfurl) | **GET** /api/storefront/v1/projects/{id}/project-pdf | Gets project pdf url
*ProjectsApi* | [**projectsGetProjectPdfZip**](docs/Api/ProjectsApi.md#projectsgetprojectpdfzip) | **GET** /api/storefront/v1/projects/{id}/project-pdf-zip | Gets project pdf files in zip archive
*StorefrontsApi* | [**storefrontsGet**](docs/Api/StorefrontsApi.md#storefrontsget) | **GET** /api/storefront/v1/storefronts/{id} | Gets storefront
*StorefrontsApi* | [**storefrontsGetAll**](docs/Api/StorefrontsApi.md#storefrontsgetall) | **GET** /api/storefront/v1/storefronts | Gets all storefronts relevant to specified query parameters
*TenantInfoApi* | [**tenantInfoGetApplicationsInfo**](docs/Api/TenantInfoApi.md#tenantinfogetapplicationsinfo) | **GET** /api/storefront/v1/tenant-info/applications | Gets information about tenant applications

## Models

- [BuildInfoModel](docs/Model/BuildInfoModel.md)
- [CreateProductReferenceDto](docs/Model/CreateProductReferenceDto.md)
- [CreateProjectDto](docs/Model/CreateProjectDto.md)
- [DatePeriod](docs/Model/DatePeriod.md)
- [MicrosoftAspNetCoreMvcProblemDetails](docs/Model/MicrosoftAspNetCoreMvcProblemDetails.md)
- [PagedOfProductReferenceDto](docs/Model/PagedOfProductReferenceDto.md)
- [PagedOfProductSpecificationDto](docs/Model/PagedOfProductSpecificationDto.md)
- [PagedOfProjectDto](docs/Model/PagedOfProjectDto.md)
- [PagedOfProjectStatusDto](docs/Model/PagedOfProjectStatusDto.md)
- [PagedOfProjectTransitionDto](docs/Model/PagedOfProjectTransitionDto.md)
- [PagedOfStorefrontDto](docs/Model/PagedOfStorefrontDto.md)
- [ProductAttributeDto](docs/Model/ProductAttributeDto.md)
- [ProductReferenceDto](docs/Model/ProductReferenceDto.md)
- [ProductSpecificationDto](docs/Model/ProductSpecificationDto.md)
- [ProjectDto](docs/Model/ProjectDto.md)
- [ProjectItemDto](docs/Model/ProjectItemDto.md)
- [ProjectPdfResultDto](docs/Model/ProjectPdfResultDto.md)
- [ProjectStatusDto](docs/Model/ProjectStatusDto.md)
- [ProjectTransitionConflictDto](docs/Model/ProjectTransitionConflictDto.md)
- [ProjectTransitionDto](docs/Model/ProjectTransitionDto.md)
- [StorefrontDto](docs/Model/StorefrontDto.md)
- [StorefrontType](docs/Model/StorefrontType.md)
- [TenantApplicationsInfoDto](docs/Model/TenantApplicationsInfoDto.md)
