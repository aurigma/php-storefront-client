# # ProjectDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Project identifier. | [optional]
**product_reference** | **string** | Product reference (i.e external reference to Customer&#39;s Canvas product specification) | [optional]
**storefront_id** | **int** | Storefront identifier. | [optional]
**tenant_id** | **int** | Project tenant indentifier. | [optional]
**order_id** | **string** | Order identifier in ecommerce system. | [optional]
**order_url** | **string** | Order url in ecommerce system. | [optional]
**order_number** | **int** | Order number in ecommerce system. | [optional]
**order_line_item_id** | **string** | Line item identifier from external ecommerce system order. | [optional]
**order_line_item_index** | **int** | Line item index from external ecommerce system order. | [optional]
**customer_id** | **string** | Customer identifier in ecommerce system. | [optional]
**customer_name** | **string** | Customer name in ecommerce system. | [optional]
**name** | **string** | Project name. | [optional]
**owner_id** | **string** | Project owner identifier. | [optional]
**items** | [**\Aurigma\Storefront\Model\ProjectItemDto[]**](ProjectItemDto.md) | List of project items. | [optional]
**status** | **int** | Project status code. | [optional]
**created** | [**\DateTime**](\DateTime.md) | Project creation time. | [optional]
**last_modified** | [**\DateTime**](\DateTime.md) | Project modification time. | [optional]
**description** | **string** | Description of the project. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
