# # ProjectItemParametersDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Item name. | [optional]
**group_id** | **string** | Project item group identifier. | [optional]
**quantity** | **int** | Item quantity information. | [optional]
**order_line_item_index** | **int** | Line item index from ecommerce system order. | [optional]
**order_line_item_id** | **string** | Line Item identifier from ecommerce system order. | [optional]
**product_reference** | **string** | Storefront product identifier. | [optional]
**fields** | **array<string,mixed>** | Item information. | [optional]
**hidden** | **mixed** | Additional item information. | [optional]
**design_ids** | **string[]** | A list of design identifiers associated to the item. | [optional]
**sku** | **string** | SKU. | [optional]
**resources** | [**\Aurigma\Storefront\Model\ProjectItemResourceParametersDto[]**](ProjectItemResourceParametersDto.md) | External resources descriptions. | [optional]
**product_specifier** | [**\Aurigma\Storefront\Model\ProjectItemParametersDtoProductSpecifier**](ProjectItemParametersDtoProductSpecifier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
