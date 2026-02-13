# # ProductSummaryDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **int** | Product identifier. | [optional]
**product_version_id** | **int** | Product version identifier. If product variant is not specified, active version identifier should be used. | [optional]
**product_link_id** | **int** | Product link identifier. If product link is not specified, should be null. | [optional]
**product_link_version_id** | **int** | Product link version identifier. If product link is not specified, should be null. | [optional]
**product_filter_id** | **int** | Product filter identifier for product link. If product link is not specified, should be null. | [optional]
**product_bundle_id** | **int** | Product bundle identifier. If product bundle is not specified, should be null. | [optional]
**product_bundle_version_id** | **int** | Product bundle version identifier. If product bundle is not specified, should be null. | [optional]
**product_variant_id** | **int** | Product variant identifier. If product variant is not specified, should be null. | [optional]
**product_variant_sku** | **string** | Product variant SKU. If product variant is not specified, should be null. | [optional]
**product_variant_price** | **float** | Product variant price. If product variant is not specified, should be null. | [optional]
**is_product_variant_available** | **bool** | Product variant availability. If product variant is not specified, should be null. | [optional]
**name** | **string** | Product name. If product link is specified, name of link will be used. | [optional]
**description** | **string** | Product description. If product link is specified, description of link will be used. | [optional]
**image** | [**\Aurigma\Storefront\Model\ProductSummaryDtoImage**](ProductSummaryDtoImage.md) |  | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**personalization_workflow_id** | **int** | Personalization workflow identifier. | [optional]
**processing_pipeline_id** | **int** | Processing pipeline identifier. | [optional]
**tags** | **string[]** | Product tags. | [optional]
**custom_fields** | **array<string,string>** | Product custom fields. | [optional]
**options** | [**\Aurigma\Storefront\Model\ProductSummaryOptionDto[]**](ProductSummaryOptionDto.md) | Product options summary.   If product link or variant is specified, product options will be filtered by link or variant options. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
