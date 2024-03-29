<?php
/**
 * RenderHiResScenarioOutputFlipMode
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
 * RenderHiResScenarioOutputFlipMode Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RenderHiResScenarioOutputFlipMode
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const HORIZONTAL = 'Horizontal';
    const VERTICAL = 'Vertical';
    const BOTH = 'Both';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::HORIZONTAL,
            self::VERTICAL,
            self::BOTH,
        ];
    }
}


