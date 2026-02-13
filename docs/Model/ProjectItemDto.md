# # ProjectItemDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Item identifier. | [optional]
**name** | **string** | Item name. | [optional]
**group_id** | **string** | Project item group identifier. | [optional]
**quantity** | **int** | Item quantity information. | [optional]
**order_line_item_id** | **string** | Order item identifier from storefront order. | [optional]
**order_line_item_index** | **int** | Order item index from storefront order. | [optional]
**product_reference** | **string** | Storefront product reference (i.e external reference to Customer&#39;s Canvas product specification). | [optional]
**fields** | **array<string,mixed>** | Item information. | [optional]
**hidden** | **mixed** | Additional item information. | [optional]
**design_ids** | **string[]** | A list of design identifiers associated to the item. | [optional]
**sku** | **string** | SKU. | [optional]
**resources** | [**\Aurigma\Storefront\Model\ProjectItemResourceDto[]**](ProjectItemResourceDto.md) | External resources descriptions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
