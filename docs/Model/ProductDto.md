# # ProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product identifier. | [optional]
**product_version_id** | **int** | Product version identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**name** | **string** | Product name. | [optional]
**description** | **string** | Product description. | [optional]
**image** | [**\Aurigma\Storefront\Model\ProductSummaryDtoImage**](ProductSummaryDtoImage.md) |  | [optional]
**created** | **\DateTime** | Product creation time. | [optional]
**last_modified** | **\DateTime** | Product modification time. | [optional]
**tags** | **string[]** | Product tags. | [optional]
**custom_fields** | **array<string,string>** | Product custom fields. | [optional]
**personalization_workflow_id** | **int** | Personalization workflow identifier. | [optional]
**processing_pipeline_id** | **int** | Processing pipeline identifier. | [optional]
**storefront_id** | **int** | Default storefront identifier. | [optional]
**storefront_product_id** | **string** | Default storefront product identifier. | [optional]
**storefront_product_name** | **string** | Default storefront product name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
