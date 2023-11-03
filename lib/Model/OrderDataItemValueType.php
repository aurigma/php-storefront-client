<?php
/**
 * OrderDataItemValueType
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
 * OrderDataItemValueType Class Doc Comment
 *
 * @category Class
 * @description Available value types for order data item.
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDataItemValueType
{
    /**
     * Possible values of this enum
     */
    const PLAIN_TEXT = 'PlainText';
    const COMMA_SEPARATED_LIST = 'CommaSeparatedList';
    const SERIALIZED_JSON = 'SerializedJson';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLAIN_TEXT,
            self::COMMA_SEPARATED_LIST,
            self::SERIALIZED_JSON,
        ];
    }
}

