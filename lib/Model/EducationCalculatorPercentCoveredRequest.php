<?php
/**
 * EducationCalculatorPercentCoveredRequest
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
 * EducationCalculatorPercentCoveredRequest Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\proton
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EducationCalculatorPercentCoveredRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'educationCalculatorPercentCoveredRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'education_inflation_rate' => 'float',
        'decumulation_horizon' => 'int',
        'accumulation_horizon' => 'int',
        'account_ids' => 'string[]',
        'tax_rate' => 'float',
        'general_inflation_rate' => 'float',
        'total_annual_cost' => 'float',
        'portfolio_return' => 'float',
        'deposit_schedule' => '\com\hydrogen\proton\Model\CalculatorDepositSchedule1',
        'initial_balance' => 'float',
        'aggregation_account_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'education_inflation_rate' => 'float',
        'decumulation_horizon' => 'int32',
        'accumulation_horizon' => 'int32',
        'account_ids' => 'uuid',
        'tax_rate' => 'float',
        'general_inflation_rate' => 'float',
        'total_annual_cost' => 'float',
        'portfolio_return' => 'float',
        'deposit_schedule' => null,
        'initial_balance' => 'float',
        'aggregation_account_ids' => 'uuid'
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
        'education_inflation_rate' => 'education_inflation_rate',
        'decumulation_horizon' => 'decumulation_horizon',
        'accumulation_horizon' => 'accumulation_horizon',
        'account_ids' => 'account_ids',
        'tax_rate' => 'tax_rate',
        'general_inflation_rate' => 'general_inflation_rate',
        'total_annual_cost' => 'total_annual_cost',
        'portfolio_return' => 'portfolio_return',
        'deposit_schedule' => 'deposit_schedule',
        'initial_balance' => 'initial_balance',
        'aggregation_account_ids' => 'aggregation_account_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'education_inflation_rate' => 'setEducationInflationRate',
        'decumulation_horizon' => 'setDecumulationHorizon',
        'accumulation_horizon' => 'setAccumulationHorizon',
        'account_ids' => 'setAccountIds',
        'tax_rate' => 'setTaxRate',
        'general_inflation_rate' => 'setGeneralInflationRate',
        'total_annual_cost' => 'setTotalAnnualCost',
        'portfolio_return' => 'setPortfolioReturn',
        'deposit_schedule' => 'setDepositSchedule',
        'initial_balance' => 'setInitialBalance',
        'aggregation_account_ids' => 'setAggregationAccountIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'education_inflation_rate' => 'getEducationInflationRate',
        'decumulation_horizon' => 'getDecumulationHorizon',
        'accumulation_horizon' => 'getAccumulationHorizon',
        'account_ids' => 'getAccountIds',
        'tax_rate' => 'getTaxRate',
        'general_inflation_rate' => 'getGeneralInflationRate',
        'total_annual_cost' => 'getTotalAnnualCost',
        'portfolio_return' => 'getPortfolioReturn',
        'deposit_schedule' => 'getDepositSchedule',
        'initial_balance' => 'getInitialBalance',
        'aggregation_account_ids' => 'getAggregationAccountIds'
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
        $this->container['education_inflation_rate'] = isset($data['education_inflation_rate']) ? $data['education_inflation_rate'] : 0.05;
        $this->container['decumulation_horizon'] = isset($data['decumulation_horizon']) ? $data['decumulation_horizon'] : null;
        $this->container['accumulation_horizon'] = isset($data['accumulation_horizon']) ? $data['accumulation_horizon'] : null;
        $this->container['account_ids'] = isset($data['account_ids']) ? $data['account_ids'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : 0.0;
        $this->container['general_inflation_rate'] = isset($data['general_inflation_rate']) ? $data['general_inflation_rate'] : 0.0;
        $this->container['total_annual_cost'] = isset($data['total_annual_cost']) ? $data['total_annual_cost'] : null;
        $this->container['portfolio_return'] = isset($data['portfolio_return']) ? $data['portfolio_return'] : null;
        $this->container['deposit_schedule'] = isset($data['deposit_schedule']) ? $data['deposit_schedule'] : null;
        $this->container['initial_balance'] = isset($data['initial_balance']) ? $data['initial_balance'] : 0.0;
        $this->container['aggregation_account_ids'] = isset($data['aggregation_account_ids']) ? $data['aggregation_account_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['education_inflation_rate']) && ($this->container['education_inflation_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'education_inflation_rate', must be bigger than or equal to -1.";
        }

        if ($this->container['decumulation_horizon'] === null) {
            $invalidProperties[] = "'decumulation_horizon' can't be null";
        }
        if (($this->container['decumulation_horizon'] < 0)) {
            $invalidProperties[] = "invalid value for 'decumulation_horizon', must be bigger than or equal to 0.";
        }

        if ($this->container['accumulation_horizon'] === null) {
            $invalidProperties[] = "'accumulation_horizon' can't be null";
        }
        if (($this->container['accumulation_horizon'] < 0)) {
            $invalidProperties[] = "invalid value for 'accumulation_horizon', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['tax_rate']) && ($this->container['tax_rate'] > 1)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['tax_rate']) && ($this->container['tax_rate'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_rate', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['general_inflation_rate']) && ($this->container['general_inflation_rate'] < -1)) {
            $invalidProperties[] = "invalid value for 'general_inflation_rate', must be bigger than or equal to -1.";
        }

        if ($this->container['total_annual_cost'] === null) {
            $invalidProperties[] = "'total_annual_cost' can't be null";
        }
        if (($this->container['total_annual_cost'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_annual_cost', must be bigger than or equal to 0.";
        }

        if ($this->container['portfolio_return'] === null) {
            $invalidProperties[] = "'portfolio_return' can't be null";
        }
        if (($this->container['portfolio_return'] < -1)) {
            $invalidProperties[] = "invalid value for 'portfolio_return', must be bigger than or equal to -1.";
        }

        if (!is_null($this->container['initial_balance']) && ($this->container['initial_balance'] < 0)) {
            $invalidProperties[] = "invalid value for 'initial_balance', must be bigger than or equal to 0.";
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
     * Gets education_inflation_rate
     *
     * @return float
     */
    public function getEducationInflationRate()
    {
        return $this->container['education_inflation_rate'];
    }

    /**
     * Sets education_inflation_rate
     *
     * @param float $education_inflation_rate education_inflation_rate
     *
     * @return $this
     */
    public function setEducationInflationRate($education_inflation_rate)
    {

        if (!is_null($education_inflation_rate) && ($education_inflation_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $education_inflation_rate when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to -1.');
        }

        $this->container['education_inflation_rate'] = $education_inflation_rate;

        return $this;
    }

    /**
     * Gets decumulation_horizon
     *
     * @return int
     */
    public function getDecumulationHorizon()
    {
        return $this->container['decumulation_horizon'];
    }

    /**
     * Sets decumulation_horizon
     *
     * @param int $decumulation_horizon decumulation_horizon
     *
     * @return $this
     */
    public function setDecumulationHorizon($decumulation_horizon)
    {

        if (($decumulation_horizon < 0)) {
            throw new \InvalidArgumentException('invalid value for $decumulation_horizon when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to 0.');
        }

        $this->container['decumulation_horizon'] = $decumulation_horizon;

        return $this;
    }

    /**
     * Gets accumulation_horizon
     *
     * @return int
     */
    public function getAccumulationHorizon()
    {
        return $this->container['accumulation_horizon'];
    }

    /**
     * Sets accumulation_horizon
     *
     * @param int $accumulation_horizon accumulation_horizon
     *
     * @return $this
     */
    public function setAccumulationHorizon($accumulation_horizon)
    {

        if (($accumulation_horizon < 0)) {
            throw new \InvalidArgumentException('invalid value for $accumulation_horizon when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to 0.');
        }

        $this->container['accumulation_horizon'] = $accumulation_horizon;

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
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {

        if (!is_null($tax_rate) && ($tax_rate > 1)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling EducationCalculatorPercentCoveredRequest., must be smaller than or equal to 1.');
        }
        if (!is_null($tax_rate) && ($tax_rate < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_rate when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to 0.');
        }

        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets general_inflation_rate
     *
     * @return float
     */
    public function getGeneralInflationRate()
    {
        return $this->container['general_inflation_rate'];
    }

    /**
     * Sets general_inflation_rate
     *
     * @param float $general_inflation_rate general_inflation_rate
     *
     * @return $this
     */
    public function setGeneralInflationRate($general_inflation_rate)
    {

        if (!is_null($general_inflation_rate) && ($general_inflation_rate < -1)) {
            throw new \InvalidArgumentException('invalid value for $general_inflation_rate when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to -1.');
        }

        $this->container['general_inflation_rate'] = $general_inflation_rate;

        return $this;
    }

    /**
     * Gets total_annual_cost
     *
     * @return float
     */
    public function getTotalAnnualCost()
    {
        return $this->container['total_annual_cost'];
    }

    /**
     * Sets total_annual_cost
     *
     * @param float $total_annual_cost total_annual_cost
     *
     * @return $this
     */
    public function setTotalAnnualCost($total_annual_cost)
    {

        if (($total_annual_cost < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_annual_cost when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to 0.');
        }

        $this->container['total_annual_cost'] = $total_annual_cost;

        return $this;
    }

    /**
     * Gets portfolio_return
     *
     * @return float
     */
    public function getPortfolioReturn()
    {
        return $this->container['portfolio_return'];
    }

    /**
     * Sets portfolio_return
     *
     * @param float $portfolio_return portfolio_return
     *
     * @return $this
     */
    public function setPortfolioReturn($portfolio_return)
    {

        if (($portfolio_return < -1)) {
            throw new \InvalidArgumentException('invalid value for $portfolio_return when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to -1.');
        }

        $this->container['portfolio_return'] = $portfolio_return;

        return $this;
    }

    /**
     * Gets deposit_schedule
     *
     * @return \com\hydrogen\proton\Model\CalculatorDepositSchedule1
     */
    public function getDepositSchedule()
    {
        return $this->container['deposit_schedule'];
    }

    /**
     * Sets deposit_schedule
     *
     * @param \com\hydrogen\proton\Model\CalculatorDepositSchedule1 $deposit_schedule deposit_schedule
     *
     * @return $this
     */
    public function setDepositSchedule($deposit_schedule)
    {
        $this->container['deposit_schedule'] = $deposit_schedule;

        return $this;
    }

    /**
     * Gets initial_balance
     *
     * @return float
     */
    public function getInitialBalance()
    {
        return $this->container['initial_balance'];
    }

    /**
     * Sets initial_balance
     *
     * @param float $initial_balance initial_balance
     *
     * @return $this
     */
    public function setInitialBalance($initial_balance)
    {

        if (!is_null($initial_balance) && ($initial_balance < 0)) {
            throw new \InvalidArgumentException('invalid value for $initial_balance when calling EducationCalculatorPercentCoveredRequest., must be bigger than or equal to 0.');
        }

        $this->container['initial_balance'] = $initial_balance;

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


