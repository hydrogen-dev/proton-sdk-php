<?php
/**
 * RecurringTransactionAnalysisRequest
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
 * OpenAPI spec version: 1.9.1
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
 * RecurringTransactionAnalysisRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurringTransactionAnalysisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recurringTransactionAnalysisRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_code' => 'string',
        'client_id' => 'string',
        'scope' => 'string',
        'end_date' => '\DateTime',
        'account_ids' => 'string[]',
        'currency_conversion' => 'string',
        'interval_deviation_threshold' => 'int',
        'amount_deviation_threshold' => 'float',
        'analyze_transactions' => 'bool',
        'start_date' => '\DateTime',
        'flag_transactions' => 'bool',
        'transaction_status_scope' => 'string[]',
        'only_cleansed' => 'bool',
        'aggregation_account_ids' => 'string[]',
        'show_recurring_details' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_code' => null,
        'client_id' => 'uuid',
        'scope' => null,
        'end_date' => 'date',
        'account_ids' => 'uuid',
        'currency_conversion' => null,
        'interval_deviation_threshold' => 'int32',
        'amount_deviation_threshold' => 'float',
        'analyze_transactions' => null,
        'start_date' => 'date',
        'flag_transactions' => null,
        'transaction_status_scope' => null,
        'only_cleansed' => null,
        'aggregation_account_ids' => 'uuid',
        'show_recurring_details' => null
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
        'currency_code' => 'currency_code',
        'client_id' => 'client_id',
        'scope' => 'scope',
        'end_date' => 'end_date',
        'account_ids' => 'account_ids',
        'currency_conversion' => 'currency_conversion',
        'interval_deviation_threshold' => 'interval_deviation_threshold',
        'amount_deviation_threshold' => 'amount_deviation_threshold',
        'analyze_transactions' => 'analyze_transactions',
        'start_date' => 'start_date',
        'flag_transactions' => 'flag_transactions',
        'transaction_status_scope' => 'transaction_status_scope',
        'only_cleansed' => 'only_cleansed',
        'aggregation_account_ids' => 'aggregation_account_ids',
        'show_recurring_details' => 'show_recurring_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'client_id' => 'setClientId',
        'scope' => 'setScope',
        'end_date' => 'setEndDate',
        'account_ids' => 'setAccountIds',
        'currency_conversion' => 'setCurrencyConversion',
        'interval_deviation_threshold' => 'setIntervalDeviationThreshold',
        'amount_deviation_threshold' => 'setAmountDeviationThreshold',
        'analyze_transactions' => 'setAnalyzeTransactions',
        'start_date' => 'setStartDate',
        'flag_transactions' => 'setFlagTransactions',
        'transaction_status_scope' => 'setTransactionStatusScope',
        'only_cleansed' => 'setOnlyCleansed',
        'aggregation_account_ids' => 'setAggregationAccountIds',
        'show_recurring_details' => 'setShowRecurringDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'client_id' => 'getClientId',
        'scope' => 'getScope',
        'end_date' => 'getEndDate',
        'account_ids' => 'getAccountIds',
        'currency_conversion' => 'getCurrencyConversion',
        'interval_deviation_threshold' => 'getIntervalDeviationThreshold',
        'amount_deviation_threshold' => 'getAmountDeviationThreshold',
        'analyze_transactions' => 'getAnalyzeTransactions',
        'start_date' => 'getStartDate',
        'flag_transactions' => 'getFlagTransactions',
        'transaction_status_scope' => 'getTransactionStatusScope',
        'only_cleansed' => 'getOnlyCleansed',
        'aggregation_account_ids' => 'getAggregationAccountIds',
        'show_recurring_details' => 'getShowRecurringDetails'
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
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : 'all';
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['account_ids'] = isset($data['account_ids']) ? $data['account_ids'] : null;
        $this->container['currency_conversion'] = isset($data['currency_conversion']) ? $data['currency_conversion'] : null;
        $this->container['interval_deviation_threshold'] = isset($data['interval_deviation_threshold']) ? $data['interval_deviation_threshold'] : 3;
        $this->container['amount_deviation_threshold'] = isset($data['amount_deviation_threshold']) ? $data['amount_deviation_threshold'] : 0.05;
        $this->container['analyze_transactions'] = isset($data['analyze_transactions']) ? $data['analyze_transactions'] : true;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['flag_transactions'] = isset($data['flag_transactions']) ? $data['flag_transactions'] : false;
        $this->container['transaction_status_scope'] = isset($data['transaction_status_scope']) ? $data['transaction_status_scope'] : null;
        $this->container['only_cleansed'] = isset($data['only_cleansed']) ? $data['only_cleansed'] : false;
        $this->container['aggregation_account_ids'] = isset($data['aggregation_account_ids']) ? $data['aggregation_account_ids'] : null;
        $this->container['show_recurring_details'] = isset($data['show_recurring_details']) ? $data['show_recurring_details'] : false;
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

        if (!is_null($this->container['interval_deviation_threshold']) && ($this->container['interval_deviation_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'interval_deviation_threshold', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['amount_deviation_threshold']) && ($this->container['amount_deviation_threshold'] > 1)) {
            $invalidProperties[] = "invalid value for 'amount_deviation_threshold', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['amount_deviation_threshold']) && ($this->container['amount_deviation_threshold'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount_deviation_threshold', must be bigger than or equal to 0.";
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
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
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
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets account_ids
     *
     * @return string[]
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     *
     * @param string[] $account_ids account_ids
     *
     * @return $this
     */
    public function setAccountIds($account_ids)
    {
        $this->container['account_ids'] = $account_ids;

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
     * Gets interval_deviation_threshold
     *
     * @return int
     */
    public function getIntervalDeviationThreshold()
    {
        return $this->container['interval_deviation_threshold'];
    }

    /**
     * Sets interval_deviation_threshold
     *
     * @param int $interval_deviation_threshold interval_deviation_threshold
     *
     * @return $this
     */
    public function setIntervalDeviationThreshold($interval_deviation_threshold)
    {

        if (!is_null($interval_deviation_threshold) && ($interval_deviation_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $interval_deviation_threshold when calling RecurringTransactionAnalysisRequest., must be bigger than or equal to 0.');
        }

        $this->container['interval_deviation_threshold'] = $interval_deviation_threshold;

        return $this;
    }

    /**
     * Gets amount_deviation_threshold
     *
     * @return float
     */
    public function getAmountDeviationThreshold()
    {
        return $this->container['amount_deviation_threshold'];
    }

    /**
     * Sets amount_deviation_threshold
     *
     * @param float $amount_deviation_threshold amount_deviation_threshold
     *
     * @return $this
     */
    public function setAmountDeviationThreshold($amount_deviation_threshold)
    {

        if (!is_null($amount_deviation_threshold) && ($amount_deviation_threshold > 1)) {
            throw new \InvalidArgumentException('invalid value for $amount_deviation_threshold when calling RecurringTransactionAnalysisRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($amount_deviation_threshold) && ($amount_deviation_threshold < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount_deviation_threshold when calling RecurringTransactionAnalysisRequest., must be bigger than or equal to 0.');
        }

        $this->container['amount_deviation_threshold'] = $amount_deviation_threshold;

        return $this;
    }

    /**
     * Gets analyze_transactions
     *
     * @return bool
     */
    public function getAnalyzeTransactions()
    {
        return $this->container['analyze_transactions'];
    }

    /**
     * Sets analyze_transactions
     *
     * @param bool $analyze_transactions analyze_transactions
     *
     * @return $this
     */
    public function setAnalyzeTransactions($analyze_transactions)
    {
        $this->container['analyze_transactions'] = $analyze_transactions;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets flag_transactions
     *
     * @return bool
     */
    public function getFlagTransactions()
    {
        return $this->container['flag_transactions'];
    }

    /**
     * Sets flag_transactions
     *
     * @param bool $flag_transactions flag_transactions
     *
     * @return $this
     */
    public function setFlagTransactions($flag_transactions)
    {
        $this->container['flag_transactions'] = $flag_transactions;

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
     * Gets aggregation_account_ids
     *
     * @return string[]
     */
    public function getAggregationAccountIds()
    {
        return $this->container['aggregation_account_ids'];
    }

    /**
     * Sets aggregation_account_ids
     *
     * @param string[] $aggregation_account_ids aggregation_account_ids
     *
     * @return $this
     */
    public function setAggregationAccountIds($aggregation_account_ids)
    {
        $this->container['aggregation_account_ids'] = $aggregation_account_ids;

        return $this;
    }

    /**
     * Gets show_recurring_details
     *
     * @return bool
     */
    public function getShowRecurringDetails()
    {
        return $this->container['show_recurring_details'];
    }

    /**
     * Sets show_recurring_details
     *
     * @param bool $show_recurring_details show_recurring_details
     *
     * @return $this
     */
    public function setShowRecurringDetails($show_recurring_details)
    {
        $this->container['show_recurring_details'] = $show_recurring_details;

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


