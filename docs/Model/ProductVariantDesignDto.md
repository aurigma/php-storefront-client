# # ProductVariantDesignDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_variant_id** | **int** | Product variant identifier. | [optional]
**product_variant_uid** | **string** | Product variant unique identifier. | [optional]
**product_version_id** | **int** | Product version identifier. | [optional]
**product_id** | **int** | Product identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**is_available** | **bool** | Product variant available. | [optional]
**price** | **float** | Product variant price. | [optional]
**sort_index** | **int** | Product variant sort index. | [optional]
**storefront_product_variant_id** | **string** | Product variant identifier (usually SKU) in storefront / online store. | [optional]
**sku** | **string** | Product variant SKU. | [optional]
**design_id** | **string** | Design identifier. | [optional]
**design_name** | **string** | Design name. | [optional]
**design_group** | **string** | Design grouping tag. | [optional]
**design_has_data_schema** | **bool** | Design data schema tag. Indicates if design has data schema. | [optional]
**design_has_toggle_set** | **bool** | Design toggle set tag. Indicated if design has toggle set. | [optional]
**product_variant_options** | [**\Aurigma\Storefront\Model\ProductVariantOptionDto[]**](ProductVariantOptionDto.md) | A list of product variant options. | [optional]
**product_variant_resources** | [**\Aurigma\Storefront\Model\ProductVariantResourceDto[]**](ProductVariantResourceDto.md) | A list of product variant resources. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
