<?php
/**
 * ProjectDto
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
 * ProjectDto Class Doc Comment
 *
 * @category Class
 * @description Project dto class
 * @package  Aurigma\Storefront
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProjectDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'storefront_id' => 'int',
        'tenant_id' => 'int',
        'product_specification_id' => 'string',
        'order_id' => 'string',
        'order_url' => 'string',
        'order_number' => 'int',
        'customer_id' => 'string',
        'customer_name' => 'string',
        'name' => 'string',
        'owner_id' => 'string',
        'items' => '\Aurigma\Storefront\Model\ProjectItemDto[]',
        'status' => 'int',
        'created' => '\DateTime',
        'last_modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'storefront_id' => 'int32',
        'tenant_id' => 'int32',
        'product_specification_id' => null,
        'order_id' => null,
        'order_url' => null,
        'order_number' => 'int32',
        'customer_id' => null,
        'customer_name' => null,
        'name' => null,
        'owner_id' => null,
        'items' => null,
        'status' => 'int32',
        'created' => 'date-time',
        'last_modified' => 'date-time'
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
        'id' => 'id',
        'storefront_id' => 'storefrontId',
        'tenant_id' => 'tenantId',
        'product_specification_id' => 'productSpecificationId',
        'order_id' => 'orderId',
        'order_url' => 'orderUrl',
        'order_number' => 'orderNumber',
        'customer_id' => 'customerId',
        'customer_name' => 'customerName',
        'name' => 'name',
        'owner_id' => 'ownerId',
        'items' => 'items',
        'status' => 'status',
        'created' => 'created',
        'last_modified' => 'lastModified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'storefront_id' => 'setStorefrontId',
        'tenant_id' => 'setTenantId',
        'product_specification_id' => 'setProductSpecificationId',
        'order_id' => 'setOrderId',
        'order_url' => 'setOrderUrl',
        'order_number' => 'setOrderNumber',
        'customer_id' => 'setCustomerId',
        'customer_name' => 'setCustomerName',
        'name' => 'setName',
        'owner_id' => 'setOwnerId',
        'items' => 'setItems',
        'status' => 'setStatus',
        'created' => 'setCreated',
        'last_modified' => 'setLastModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'storefront_id' => 'getStorefrontId',
        'tenant_id' => 'getTenantId',
        'product_specification_id' => 'getProductSpecificationId',
        'order_id' => 'getOrderId',
        'order_url' => 'getOrderUrl',
        'order_number' => 'getOrderNumber',
        'customer_id' => 'getCustomerId',
        'customer_name' => 'getCustomerName',
        'name' => 'getName',
        'owner_id' => 'getOwnerId',
        'items' => 'getItems',
        'status' => 'getStatus',
        'created' => 'getCreated',
        'last_modified' => 'getLastModified'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['storefront_id'] = $data['storefront_id'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['product_specification_id'] = $data['product_specification_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_url'] = $data['order_url'] ?? null;
        $this->container['order_number'] = $data['order_number'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['customer_name'] = $data['customer_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['last_modified'] = $data['last_modified'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Project identifier
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets storefront_id
     *
     * @return int|null
     */
    public function getStorefrontId()
    {
        return $this->container['storefront_id'];
    }

    /**
     * Sets storefront_id
     *
     * @param int|null $storefront_id Storefront identifier
     *
     * @return self
     */
    public function setStorefrontId($storefront_id)
    {
        $this->container['storefront_id'] = $storefront_id;

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
     * @param int|null $tenant_id Project tenant indentifier
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets product_specification_id
     *
     * @return string|null
     */
    public function getProductSpecificationId()
    {
        return $this->container['product_specification_id'];
    }

    /**
     * Sets product_specification_id
     *
     * @param string|null $product_specification_id Product specification identifier (i.e identifier of Customer's Canvas product specification - main subject of this project)
     *
     * @return self
     */
    public function setProductSpecificationId($product_specification_id)
    {
        $this->container['product_specification_id'] = $product_specification_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Order identifier in ecommerce system
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_url
     *
     * @return string|null
     */
    public function getOrderUrl()
    {
        return $this->container['order_url'];
    }

    /**
     * Sets order_url
     *
     * @param string|null $order_url Order url in ecommerce system
     *
     * @return self
     */
    public function setOrderUrl($order_url)
    {
        $this->container['order_url'] = $order_url;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return int|null
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int|null $order_number Order number in ecommerce system
     *
     * @return self
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id Customer identifier in ecommerce system
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string|null $customer_name Customer name in ecommerce system
     *
     * @return self
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Project name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id Project owner identifier
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Aurigma\Storefront\Model\ProjectItemDto[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Aurigma\Storefront\Model\ProjectItemDto[]|null $items List of project items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status Project status code
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created Project creation time
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime|null $last_modified Project modification time
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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


