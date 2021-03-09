<?php
/**
 * SensitivityFactor
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\proton\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Proton API
 *
 * Financial engineering module of Hydrogen Atom
 *
 * OpenAPI spec version: 1.8.0
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\proton\Model;

use \ArrayAccess;
use \com\hydrogen\proton\ObjectSerializer;

/**
 * SensitivityFactor Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SensitivityFactor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SensitivityFactor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'change_duration' => 'int',
        'lag' => 'int',
        'change_amount' => 'float',
        'ticker' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'change_duration' => 'int32',
        'lag' => 'int32',
        'change_amount' => 'float',
        'ticker' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'change_duration' => 'change_duration',
        'lag' => 'lag',
        'change_amount' => 'change_amount',
        'ticker' => 'ticker'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'change_duration' => 'setChangeDuration',
        'lag' => 'setLag',
        'change_amount' => 'setChangeAmount',
        'ticker' => 'setTicker'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'change_duration' => 'getChangeDuration',
        'lag' => 'getLag',
        'change_amount' => 'getChangeAmount',
        'ticker' => 'getTicker'
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
        return self::$swaggerModelName;
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
        $this->container['change_duration'] = isset($data['change_duration']) ? $data['change_duration'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : 0;
        $this->container['change_amount'] = isset($data['change_amount']) ? $data['change_amount'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['change_duration'] === null) {
            $invalidProperties[] = "'change_duration' can't be null";
        }
        if (($this->container['change_duration'] < 1)) {
            $invalidProperties[] = "invalid value for 'change_duration', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['lag']) && ($this->container['lag'] < 0)) {
            $invalidProperties[] = "invalid value for 'lag', must be bigger than or equal to 0.";
        }

        if ($this->container['change_amount'] === null) {
            $invalidProperties[] = "'change_amount' can't be null";
        }
        if (($this->container['change_amount'] < -1)) {
            $invalidProperties[] = "invalid value for 'change_amount', must be bigger than or equal to -1.";
        }

        if ($this->container['ticker'] === null) {
            $invalidProperties[] = "'ticker' can't be null";
        }
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
     * Gets change_duration
     *
     * @return int
     */
    public function getChangeDuration()
    {
        return $this->container['change_duration'];
    }

    /**
     * Sets change_duration
     *
     * @param int $change_duration change_duration
     *
     * @return $this
     */
    public function setChangeDuration($change_duration)
    {

        if (($change_duration < 1)) {
            throw new \InvalidArgumentException('invalid value for $change_duration when calling SensitivityFactor., must be bigger than or equal to 1.');
        }

        $this->container['change_duration'] = $change_duration;

        return $this;
    }

    /**
     * Gets lag
     *
     * @return int
     */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /**
     * Sets lag
     *
     * @param int $lag lag
     *
     * @return $this
     */
    public function setLag($lag)
    {

        if (!is_null($lag) && ($lag < 0)) {
            throw new \InvalidArgumentException('invalid value for $lag when calling SensitivityFactor., must be bigger than or equal to 0.');
        }

        $this->container['lag'] = $lag;

        return $this;
    }

    /**
     * Gets change_amount
     *
     * @return float
     */
    public function getChangeAmount()
    {
        return $this->container['change_amount'];
    }

    /**
     * Sets change_amount
     *
     * @param float $change_amount change_amount
     *
     * @return $this
     */
    public function setChangeAmount($change_amount)
    {

        if (($change_amount < -1)) {
            throw new \InvalidArgumentException('invalid value for $change_amount when calling SensitivityFactor., must be bigger than or equal to -1.');
        }

        $this->container['change_amount'] = $change_amount;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


