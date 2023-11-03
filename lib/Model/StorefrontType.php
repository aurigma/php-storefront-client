<?php
/**
 * StorefrontType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Storefront API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: storefront-v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\Storefront\Model;
use \Aurigma\Storefront\ObjectSerializer;

/**
 * StorefrontType Class Doc Comment
 *
 * @category Class
 * @description Storefront types.
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StorefrontType
{
    /**
     * Possible values of this enum
     */
    const CUSTOM = 'Custom';
    const SHOPIFY_LEGACY = 'ShopifyLegacy';
    const DOCKET_MANAGER = 'DocketManager';
    const CUSTOM_SAML = 'CustomSaml';
    const NOP_COMMERCE = 'NopCommerce';
    const WOO_COMMERCE = 'WooCommerce';
    const MAGENTO = 'Magento';
    const BIG_COMMERCE = 'BigCommerce';
    const SHOPIFY = 'Shopify';
    const SHOPIFY_CUSTOM = 'ShopifyCustom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSTOM,
            self::SHOPIFY_LEGACY,
            self::DOCKET_MANAGER,
            self::CUSTOM_SAML,
            self::NOP_COMMERCE,
            self::WOO_COMMERCE,
            self::MAGENTO,
            self::BIG_COMMERCE,
            self::SHOPIFY,
            self::SHOPIFY_CUSTOM,
        ];
    }
}


