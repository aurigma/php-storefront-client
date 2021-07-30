<?php
/**
 * TenantApplicationsInfoDto
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

use \ArrayAccess;
use \Aurigma\Storefront\ObjectSerializer;

/**
 * TenantApplicationsInfoDto Class Doc Comment
 *
 * @category Class
 * @description Dto class, containing information about tenant applications
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TenantApplicationsInfoDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TenantApplicationsInfoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'design_editor_url' => 'string',
        'ui_framework_url' => 'string',
        'preflight_url' => 'string',
        'dynamic_image_url' => 'string',
        'tenant_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'design_editor_url' => null,
        'ui_framework_url' => null,
        'preflight_url' => null,
        'dynamic_image_url' => null,
        'tenant_id' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'design_editor_url' => 'designEditorUrl',
        'ui_framework_url' => 'uiFrameworkUrl',
        'preflight_url' => 'preflightUrl',
        'dynamic_image_url' => 'dynamicImageUrl',
        'tenant_id' => 'tenantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'design_editor_url' => 'setDesignEditorUrl',
        'ui_framework_url' => 'setUiFrameworkUrl',
        'preflight_url' => 'setPreflightUrl',
        'dynamic_image_url' => 'setDynamicImageUrl',
        'tenant_id' => 'setTenantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'design_editor_url' => 'getDesignEditorUrl',
        'ui_framework_url' => 'getUiFrameworkUrl',
        'preflight_url' => 'getPreflightUrl',
        'dynamic_image_url' => 'getDynamicImageUrl',
        'tenant_id' => 'getTenantId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['design_editor_url'] = $data['design_editor_url'] ?? null;
        $this->container['ui_framework_url'] = $data['ui_framework_url'] ?? null;
        $this->container['preflight_url'] = $data['preflight_url'] ?? null;
        $this->container['dynamic_image_url'] = $data['dynamic_image_url'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets design_editor_url
     *
     * @return string|null
     */
    public function getDesignEditorUrl()
    {
        return $this->container['design_editor_url'];
    }

    /**
     * Sets design_editor_url
     *
     * @param string|null $design_editor_url design_editor_url
     *
     * @return self
     */
    public function setDesignEditorUrl($design_editor_url)
    {
        $this->container['design_editor_url'] = $design_editor_url;

        return $this;
    }

    /**
     * Gets ui_framework_url
     *
     * @return string|null
     */
    public function getUiFrameworkUrl()
    {
        return $this->container['ui_framework_url'];
    }

    /**
     * Sets ui_framework_url
     *
     * @param string|null $ui_framework_url ui_framework_url
     *
     * @return self
     */
    public function setUiFrameworkUrl($ui_framework_url)
    {
        $this->container['ui_framework_url'] = $ui_framework_url;

        return $this;
    }

    /**
     * Gets preflight_url
     *
     * @return string|null
     */
    public function getPreflightUrl()
    {
        return $this->container['preflight_url'];
    }

    /**
     * Sets preflight_url
     *
     * @param string|null $preflight_url preflight_url
     *
     * @return self
     */
    public function setPreflightUrl($preflight_url)
    {
        $this->container['preflight_url'] = $preflight_url;

        return $this;
    }

    /**
     * Gets dynamic_image_url
     *
     * @return string|null
     */
    public function getDynamicImageUrl()
    {
        return $this->container['dynamic_image_url'];
    }

    /**
     * Sets dynamic_image_url
     *
     * @param string|null $dynamic_image_url dynamic_image_url
     *
     * @return self
     */
    public function setDynamicImageUrl($dynamic_image_url)
    {
        $this->container['dynamic_image_url'] = $dynamic_image_url;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int|null $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


