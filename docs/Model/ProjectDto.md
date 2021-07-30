# # ProjectDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Project identifier | [optional]
**storefront_id** | **int** | Storefront identifier | [optional]
**tenant_id** | **int** | Project tenant indentifier | [optional]
**product_specification_id** | **string** | Product specification identifier (i.e identifier of Customer&#39;s Canvas product specification - main subject of this project) | [optional]
**order_id** | **string** | Order identifier in ecommerce system | [optional]
**order_url** | **string** | Order url in ecommerce system | [optional]
**order_number** | **int** | Order number in ecommerce system | [optional]
**customer_id** | **string** | Customer identifier in ecommerce system | [optional]
**customer_name** | **string** | Customer name in ecommerce system | [optional]
**name** | **string** | Project name | [optional]
**owner_id** | **string** | Project owner identifier | [optional]
**items** | [**\Aurigma\Storefront\Model\ProjectItemDto[]**](ProjectItemDto.md) | List of project items | [optional]
**status** | **int** | Project status code | [optional]
**created** | [**\DateTime**](\DateTime.md) | Project creation time | [optional]
**last_modified** | [**\DateTime**](\DateTime.md) | Project modification time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
