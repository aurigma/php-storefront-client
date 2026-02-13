# # ProductOptionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product option identifier. | [optional]
**product_version_id** | **int** | Product version identifier | [optional]
**product_id** | **int** | Product identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**type** | [**\Aurigma\Storefront\Model\OptionType**](OptionType.md) | Option type (&#39;Simple&#39; / &#39;Size&#39; / &#39;PageCount&#39;). | [optional]
**traits** | **string[]** | Option traits. | [optional]
**title** | **string** | Product option title. | [optional]
**sort_index** | **int** | Product option sort index. | [optional]
**tag** | **string** | Product option identifying tag. | [optional]
**uid** | **string** | Product option UID. | [optional]
**use_for_design_binding** | **bool** | Specifies if the option is used for design binding. | [optional]
**use_for_mockup_binding** | **bool** | Specifies if the option is used for mockup binding. | [optional]
**use_for_document_binding** | **bool** | Specifies if the option is used for document binding. | [optional]
**description** | **string** | Product option description. | [optional]
**tooltip** | **string** | Product option tooltip. | [optional]
**appearance_data** | [**\Aurigma\Storefront\Model\ProductOptionDtoAppearanceData**](ProductOptionDtoAppearanceData.md) |  | [optional]
**image** | [**\Aurigma\Storefront\Model\ProductOptionDtoImage**](ProductOptionDtoImage.md) |  | [optional]
**product_option_values** | [**\Aurigma\Storefront\Model\ProductOptionValueDto[]**](ProductOptionValueDto.md) | A list of product option values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
