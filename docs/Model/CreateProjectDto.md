# # CreateProjectDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_reference** | **string** | Product reference (i.e external reference to Customer&#39;s Canvas product specification - main subject of this project) |
**order_id** | **string** | Order identifier in ecommerce system | [optional]
**order_url** | **string** | Order url in ecommerce system | [optional]
**order_number** | **int** | Order number in ecommerce system | [optional]
**order_line_item_index** | **int** | Line item index from ecommerce system order | [optional]
**order_line_item_id** | **string** | Line Item id from ecommerce system order | [optional]
**customer_id** | **string** | Customer identifier in ecommerce system | [optional]
**customer_name** | **string** | Customer name in ecommerce system | [optional]
**name** | **string** | Project name | [optional]
**owner_id** | **string** | Project owner identifier | [optional]
**items** | [**\Aurigma\Storefront\Model\ProjectItemDto[]**](ProjectItemDto.md) | List of project items | [optional]
**description** | **string** | Description of the project | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
