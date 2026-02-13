# # ProductBundleDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product bundle identifier. | [optional]
**product_bundle_version_id** | **int** | Product bundle version identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**name** | **string** | Product bundle name. | [optional]
**description** | **string** | Product bundle description. | [optional]
**created** | **\DateTime** | Product bundle creation time. | [optional]
**last_modified** | **\DateTime** | Product bundle las modification time. | [optional]
**personalization_workflow_id** | **int** | Personalization workflow identifier. | [optional]
**custom_fields** | **array<string,string>** | Product bundle custom fields. | [optional]
**image** | [**\Aurigma\Storefront\Model\ProductBundleDtoImage**](ProductBundleDtoImage.md) |  | [optional]
**items** | [**\Aurigma\Storefront\Model\ProductBundleItemDto[]**](ProductBundleItemDto.md) | Product bundle items. | [optional]
**resources** | [**\Aurigma\Storefront\Model\ProductBundleResourceDto[]**](ProductBundleResourceDto.md) | Product bundle resources. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
