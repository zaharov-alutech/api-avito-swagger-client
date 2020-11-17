<?php
/**
 * ResponseOperationsHistoryItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Авито API для бизнеса
 *
 * # Общая информация Описание API произведено в формате [**Swagger 3.0**](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md). Вы можете использовать данный файл для ознакомления с методами API, а также для генерации базового кода для работы с API на удобном для вас языке программирования с помощью утилиты [**Swagger Codegen**](https://swagger.io/swagger-codegen/) или online сервиса [**Swagger Editor**](https://editor.swagger.io/).  **Авито API для бизнеса предоставляется согласно [Условиям использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**  По всем вопросам работы с API необходимо обращаться в Службу Поддержки профессиональных инструментов:  <li>телефон: <b>+7 495 777-10-66</b></li> <li>email: <a href=\"mailto:supportautoload@avito.ru\">supportautoload@avito.ru</a></li>  # Типы авторизации Для использования данного API запрос должен быть авторизован. В данный момент API Авито использует следующие механизмы авторизации.  <!-- ReDoc-Inject: <security-definitions> -->  Подробнее о каждом механизме и его назначении можно прочитать в соответствующем разделе.
 *
 * OpenAPI spec version: 1
 * Contact: supportautoload@avito.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ResponseOperationsHistoryItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseOperationsHistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseOperationsHistoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'updated_at' => 'string',
'operation_type' => 'string',
'service_type' => 'string',
'service_id' => 'int',
'service_name' => 'string',
'operation_name' => 'string',
'amount_total' => 'float',
'amount_rub' => 'float',
'amount_bonus' => 'float',
'item_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'updated_at' => null,
'operation_type' => null,
'service_type' => null,
'service_id' => null,
'service_name' => null,
'operation_name' => null,
'amount_total' => null,
'amount_rub' => null,
'amount_bonus' => null,
'item_id' => null    ];

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
        'updated_at' => 'updatedAt',
'operation_type' => 'operationType',
'service_type' => 'serviceType',
'service_id' => 'serviceId',
'service_name' => 'serviceName',
'operation_name' => 'operationName',
'amount_total' => 'amountTotal',
'amount_rub' => 'amountRub',
'amount_bonus' => 'amountBonus',
'item_id' => 'itemId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'updated_at' => 'setUpdatedAt',
'operation_type' => 'setOperationType',
'service_type' => 'setServiceType',
'service_id' => 'setServiceId',
'service_name' => 'setServiceName',
'operation_name' => 'setOperationName',
'amount_total' => 'setAmountTotal',
'amount_rub' => 'setAmountRub',
'amount_bonus' => 'setAmountBonus',
'item_id' => 'setItemId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'updated_at' => 'getUpdatedAt',
'operation_type' => 'getOperationType',
'service_type' => 'getServiceType',
'service_id' => 'getServiceId',
'service_name' => 'getServiceName',
'operation_name' => 'getOperationName',
'amount_total' => 'getAmountTotal',
'amount_rub' => 'getAmountRub',
'amount_bonus' => 'getAmountBonus',
'item_id' => 'getItemId'    ];

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

    const OPERATION_TYPE_ = 'аванс';
const OPERATION_TYPE__1 = 'возврат аванса';
const OPERATION_TYPE__ = 'резервирование средств под услугу';
const OPERATION_TYPE____ = 'возврат зарзервированных средств на баланс кошелька';
const OPERATION_TYPE__4 = 'чарджбэк';
const OPERATION_TYPE__5 = 'постоплата';
const SERVICE_TYPE_VAS = 'vas';
const SERVICE_TYPE_PERF_VAS = 'perf_vas';
const SERVICE_TYPE_LF = 'lf';
const SERVICE_TYPE_CV = 'cv';
const SERVICE_TYPE_TARIFF = 'tariff';
const SERVICE_TYPE_SUBSCRIPTION = 'subscription';
const SERVICE_TYPE_CPA = 'cpa';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_,
self::OPERATION_TYPE__1,
self::OPERATION_TYPE__,
self::OPERATION_TYPE____,
self::OPERATION_TYPE__4,
self::OPERATION_TYPE__5,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_VAS,
self::SERVICE_TYPE_PERF_VAS,
self::SERVICE_TYPE_LF,
self::SERVICE_TYPE_CV,
self::SERVICE_TYPE_TARIFF,
self::SERVICE_TYPE_SUBSCRIPTION,
self::SERVICE_TYPE_CPA,        ];
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
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['operation_type'] = isset($data['operation_type']) ? $data['operation_type'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['operation_name'] = isset($data['operation_name']) ? $data['operation_name'] : null;
        $this->container['amount_total'] = isset($data['amount_total']) ? $data['amount_total'] : null;
        $this->container['amount_rub'] = isset($data['amount_rub']) ? $data['amount_rub'] : null;
        $this->container['amount_bonus'] = isset($data['amount_bonus']) ? $data['amount_bonus'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!is_null($this->container['operation_type']) && !in_array($this->container['operation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['service_type']) && !in_array($this->container['service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at Дата/время совершения операции
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets operation_type
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->container['operation_type'];
    }

    /**
     * Sets operation_type
     *
     * @param string $operation_type Тип операции
     *
     * @return $this
     */
    public function setOperationType($operation_type)
    {
        $allowedValues = $this->getOperationTypeAllowableValues();
        if (!is_null($operation_type) && !in_array($operation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_type'] = $operation_type;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param string $service_type Тип услуги
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($service_type) && !in_array($service_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'service_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return int
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param int $service_id Код типа услуги
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string $service_name Название конкретного типа услуги
     *
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets operation_name
     *
     * @return string
     */
    public function getOperationName()
    {
        return $this->container['operation_name'];
    }

    /**
     * Sets operation_name
     *
     * @param string $operation_name Название операции
     *
     * @return $this
     */
    public function setOperationName($operation_name)
    {
        $this->container['operation_name'] = $operation_name;

        return $this;
    }

    /**
     * Gets amount_total
     *
     * @return float
     */
    public function getAmountTotal()
    {
        return $this->container['amount_total'];
    }

    /**
     * Sets amount_total
     *
     * @param float $amount_total Сумма операции всего
     *
     * @return $this
     */
    public function setAmountTotal($amount_total)
    {
        $this->container['amount_total'] = $amount_total;

        return $this;
    }

    /**
     * Gets amount_rub
     *
     * @return float
     */
    public function getAmountRub()
    {
        return $this->container['amount_rub'];
    }

    /**
     * Sets amount_rub
     *
     * @param float $amount_rub Сумма реальных денег
     *
     * @return $this
     */
    public function setAmountRub($amount_rub)
    {
        $this->container['amount_rub'] = $amount_rub;

        return $this;
    }

    /**
     * Gets amount_bonus
     *
     * @return float
     */
    public function getAmountBonus()
    {
        return $this->container['amount_bonus'];
    }

    /**
     * Sets amount_bonus
     *
     * @param float $amount_bonus Сумма бонусов
     *
     * @return $this
     */
    public function setAmountBonus($amount_bonus)
    {
        $this->container['amount_bonus'] = $amount_bonus;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id ID объявления
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

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
