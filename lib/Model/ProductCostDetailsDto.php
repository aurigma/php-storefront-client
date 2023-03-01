<?php
/**
 * ProductCostDetailsDto
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
 * ProductCostDetailsDto Class Doc Comment
 *
 * @category Class
 * @description Dto class, containing information about storefront product cost details.
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductCostDetailsDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductCostDetailsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_reference' => 'string',
        'product_sku' => 'string',
        'product_quantity' => 'int',
        'product_price' => 'double',
        'product_cost' => 'double',
        'product_discount' => 'double',
        'currency_code' => 'string',
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
        'product_reference' => null,
        'product_sku' => null,
        'product_quantity' => 'int32',
        'product_price' => 'double',
        'product_cost' => 'double',
        'product_discount' => 'double',
        'currency_code' => null,
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
        'product_reference' => 'productReference',
        'product_sku' => 'productSku',
        'product_quantity' => 'productQuantity',
        'product_price' => 'productPrice',
        'product_cost' => 'productCost',
        'product_discount' => 'productDiscount',
        'currency_code' => 'currencyCode',
        'tenant_id' => 'tenantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_reference' => 'setProductReference',
        'product_sku' => 'setProductSku',
        'product_quantity' => 'setProductQuantity',
        'product_price' => 'setProductPrice',
        'product_cost' => 'setProductCost',
        'product_discount' => 'setProductDiscount',
        'currency_code' => 'setCurrencyCode',
        'tenant_id' => 'setTenantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_reference' => 'getProductReference',
        'product_sku' => 'getProductSku',
        'product_quantity' => 'getProductQuantity',
        'product_price' => 'getProductPrice',
        'product_cost' => 'getProductCost',
        'product_discount' => 'getProductDiscount',
        'currency_code' => 'getCurrencyCode',
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
        $this->container['product_reference'] = $data['product_reference'] ?? null;
        $this->container['product_sku'] = $data['product_sku'] ?? null;
        $this->container['product_quantity'] = $data['product_quantity'] ?? null;
        $this->container['product_price'] = $data['product_price'] ?? null;
        $this->container['product_cost'] = $data['product_cost'] ?? null;
        $this->container['product_discount'] = $data['product_discount'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
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
     * Gets product_reference
     *
     * @return string|null
     */
    public function getProductReference()
    {
        return $this->container['product_reference'];
    }

    /**
     * Sets product_reference
     *
     * @param string|null $product_reference Product reference is an external reference to Customer's Canvas product specification, e.g online store product identifier.
     *
     * @return self
     */
    public function setProductReference($product_reference)
    {
        $this->container['product_reference'] = $product_reference;

        return $this;
    }

    /**
     * Gets product_sku
     *
     * @return string|null
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     *
     * @param string|null $product_sku Product SKU.
     *
     * @return self
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets product_quantity
     *
     * @return int|null
     */
    public function getProductQuantity()
    {
        return $this->container['product_quantity'];
    }

    /**
     * Sets product_quantity
     *
     * @param int|null $product_quantity Product quantity.
     *
     * @return self
     */
    public function setProductQuantity($product_quantity)
    {
        $this->container['product_quantity'] = $product_quantity;

        return $this;
    }

    /**
     * Gets product_price
     *
     * @return double|null
     */
    public function getProductPrice()
    {
        return $this->container['product_price'];
    }

    /**
     * Sets product_price
     *
     * @param double|null $product_price Product price.
     *
     * @return self
     */
    public function setProductPrice($product_price)
    {
        $this->container['product_price'] = $product_price;

        return $this;
    }

    /**
     * Gets product_cost
     *
     * @return double|null
     */
    public function getProductCost()
    {
        return $this->container['product_cost'];
    }

    /**
     * Sets product_cost
     *
     * @param double|null $product_cost Product cost.
     *
     * @return self
     */
    public function setProductCost($product_cost)
    {
        $this->container['product_cost'] = $product_cost;

        return $this;
    }

    /**
     * Gets product_discount
     *
     * @return double|null
     */
    public function getProductDiscount()
    {
        return $this->container['product_discount'];
    }

    /**
     * Sets product_discount
     *
     * @param double|null $product_discount Product discount.
     *
     * @return self
     */
    public function setProductDiscount($product_discount)
    {
        $this->container['product_discount'] = $product_discount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Currency code.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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
     * @param int|null $tenant_id Tenant identifier.
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


