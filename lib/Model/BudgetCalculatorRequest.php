<?php
/**
 * BudgetCalculatorRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Proton API
 *
 * Financial engineering module of Hydrogen Atom
 *
 * OpenAPI spec version: 1.9.2
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
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
 * BudgetCalculatorRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BudgetCalculatorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'budgetCalculatorRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'scope' => 'string',
        'currency_conversion' => 'string',
        'relative_lookback' => 'bool',
        'budget_id' => 'string',
        'as_of_date' => '\DateTime',
        'show_average_spend' => 'bool',
        'lookback_periods' => 'int',
        'budget_details' => '\com\hydrogen\proton\Model\BudgetDetails',
        'transaction_status_scope' => 'string[]',
        'only_cleansed' => 'bool',
        'show_budget_track' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'scope' => null,
        'currency_conversion' => null,
        'relative_lookback' => null,
        'budget_id' => 'uuid',
        'as_of_date' => 'date',
        'show_average_spend' => null,
        'lookback_periods' => 'int32',
        'budget_details' => null,
        'transaction_status_scope' => null,
        'only_cleansed' => null,
        'show_budget_track' => null
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
        'scope' => 'scope',
        'currency_conversion' => 'currency_conversion',
        'relative_lookback' => 'relative_lookback',
        'budget_id' => 'budget_id',
        'as_of_date' => 'as_of_date',
        'show_average_spend' => 'show_average_spend',
        'lookback_periods' => 'lookback_periods',
        'budget_details' => 'budget_details',
        'transaction_status_scope' => 'transaction_status_scope',
        'only_cleansed' => 'only_cleansed',
        'show_budget_track' => 'show_budget_track'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scope' => 'setScope',
        'currency_conversion' => 'setCurrencyConversion',
        'relative_lookback' => 'setRelativeLookback',
        'budget_id' => 'setBudgetId',
        'as_of_date' => 'setAsOfDate',
        'show_average_spend' => 'setShowAverageSpend',
        'lookback_periods' => 'setLookbackPeriods',
        'budget_details' => 'setBudgetDetails',
        'transaction_status_scope' => 'setTransactionStatusScope',
        'only_cleansed' => 'setOnlyCleansed',
        'show_budget_track' => 'setShowBudgetTrack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scope' => 'getScope',
        'currency_conversion' => 'getCurrencyConversion',
        'relative_lookback' => 'getRelativeLookback',
        'budget_id' => 'getBudgetId',
        'as_of_date' => 'getAsOfDate',
        'show_average_spend' => 'getShowAverageSpend',
        'lookback_periods' => 'getLookbackPeriods',
        'budget_details' => 'getBudgetDetails',
        'transaction_status_scope' => 'getTransactionStatusScope',
        'only_cleansed' => 'getOnlyCleansed',
        'show_budget_track' => 'getShowBudgetTrack'
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

    const SCOPE_ALL = 'all';
    const SCOPE_EXTERNAL = 'external';
    const SCOPE_INTERNAL = 'internal';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_ALL,
            self::SCOPE_EXTERNAL,
            self::SCOPE_INTERNAL,
        ];
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
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : 'all';
        $this->container['currency_conversion'] = isset($data['currency_conversion']) ? $data['currency_conversion'] : null;
        $this->container['relative_lookback'] = isset($data['relative_lookback']) ? $data['relative_lookback'] : true;
        $this->container['budget_id'] = isset($data['budget_id']) ? $data['budget_id'] : null;
        $this->container['as_of_date'] = isset($data['as_of_date']) ? $data['as_of_date'] : null;
        $this->container['show_average_spend'] = isset($data['show_average_spend']) ? $data['show_average_spend'] : false;
        $this->container['lookback_periods'] = isset($data['lookback_periods']) ? $data['lookback_periods'] : 1;
        $this->container['budget_details'] = isset($data['budget_details']) ? $data['budget_details'] : null;
        $this->container['transaction_status_scope'] = isset($data['transaction_status_scope']) ? $data['transaction_status_scope'] : null;
        $this->container['only_cleansed'] = isset($data['only_cleansed']) ? $data['only_cleansed'] : false;
        $this->container['show_budget_track'] = isset($data['show_budget_track']) ? $data['show_budget_track'] : true;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['lookback_periods']) && ($this->container['lookback_periods'] < 1)) {
            $invalidProperties[] = "invalid value for 'lookback_periods', must be bigger than or equal to 1.";
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
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($scope) && !in_array($scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'scope', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets currency_conversion
     *
     * @return string
     */
    public function getCurrencyConversion()
    {
        return $this->container['currency_conversion'];
    }

    /**
     * Sets currency_conversion
     *
     * @param string $currency_conversion currency_conversion
     *
     * @return $this
     */
    public function setCurrencyConversion($currency_conversion)
    {
        $this->container['currency_conversion'] = $currency_conversion;

        return $this;
    }

    /**
     * Gets relative_lookback
     *
     * @return bool
     */
    public function getRelativeLookback()
    {
        return $this->container['relative_lookback'];
    }

    /**
     * Sets relative_lookback
     *
     * @param bool $relative_lookback relative_lookback
     *
     * @return $this
     */
    public function setRelativeLookback($relative_lookback)
    {
        $this->container['relative_lookback'] = $relative_lookback;

        return $this;
    }

    /**
     * Gets budget_id
     *
     * @return string
     */
    public function getBudgetId()
    {
        return $this->container['budget_id'];
    }

    /**
     * Sets budget_id
     *
     * @param string $budget_id budget_id
     *
     * @return $this
     */
    public function setBudgetId($budget_id)
    {
        $this->container['budget_id'] = $budget_id;

        return $this;
    }

    /**
     * Gets as_of_date
     *
     * @return \DateTime
     */
    public function getAsOfDate()
    {
        return $this->container['as_of_date'];
    }

    /**
     * Sets as_of_date
     *
     * @param \DateTime $as_of_date as_of_date
     *
     * @return $this
     */
    public function setAsOfDate($as_of_date)
    {
        $this->container['as_of_date'] = $as_of_date;

        return $this;
    }

    /**
     * Gets show_average_spend
     *
     * @return bool
     */
    public function getShowAverageSpend()
    {
        return $this->container['show_average_spend'];
    }

    /**
     * Sets show_average_spend
     *
     * @param bool $show_average_spend show_average_spend
     *
     * @return $this
     */
    public function setShowAverageSpend($show_average_spend)
    {
        $this->container['show_average_spend'] = $show_average_spend;

        return $this;
    }

    /**
     * Gets lookback_periods
     *
     * @return int
     */
    public function getLookbackPeriods()
    {
        return $this->container['lookback_periods'];
    }

    /**
     * Sets lookback_periods
     *
     * @param int $lookback_periods lookback_periods
     *
     * @return $this
     */
    public function setLookbackPeriods($lookback_periods)
    {

        if (!is_null($lookback_periods) && ($lookback_periods < 1)) {
            throw new \InvalidArgumentException('invalid value for $lookback_periods when calling BudgetCalculatorRequest., must be bigger than or equal to 1.');
        }

        $this->container['lookback_periods'] = $lookback_periods;

        return $this;
    }

    /**
     * Gets budget_details
     *
     * @return \com\hydrogen\proton\Model\BudgetDetails
     */
    public function getBudgetDetails()
    {
        return $this->container['budget_details'];
    }

    /**
     * Sets budget_details
     *
     * @param \com\hydrogen\proton\Model\BudgetDetails $budget_details budget_details
     *
     * @return $this
     */
    public function setBudgetDetails($budget_details)
    {
        $this->container['budget_details'] = $budget_details;

        return $this;
    }

    /**
     * Gets transaction_status_scope
     *
     * @return string[]
     */
    public function getTransactionStatusScope()
    {
        return $this->container['transaction_status_scope'];
    }

    /**
     * Sets transaction_status_scope
     *
     * @param string[] $transaction_status_scope transaction_status_scope
     *
     * @return $this
     */
    public function setTransactionStatusScope($transaction_status_scope)
    {
        $this->container['transaction_status_scope'] = $transaction_status_scope;

        return $this;
    }

    /**
     * Gets only_cleansed
     *
     * @return bool
     */
    public function getOnlyCleansed()
    {
        return $this->container['only_cleansed'];
    }

    /**
     * Sets only_cleansed
     *
     * @param bool $only_cleansed only_cleansed
     *
     * @return $this
     */
    public function setOnlyCleansed($only_cleansed)
    {
        $this->container['only_cleansed'] = $only_cleansed;

        return $this;
    }

    /**
     * Gets show_budget_track
     *
     * @return bool
     */
    public function getShowBudgetTrack()
    {
        return $this->container['show_budget_track'];
    }

    /**
     * Sets show_budget_track
     *
     * @param bool $show_budget_track show_budget_track
     *
     * @return $this
     */
    public function setShowBudgetTrack($show_budget_track)
    {
        $this->container['show_budget_track'] = $show_budget_track;

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


