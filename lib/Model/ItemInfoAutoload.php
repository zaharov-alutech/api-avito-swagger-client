<?php
/**
 * ItemInfoAutoload
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
 * ItemInfoAutoload Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemInfoAutoload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemInfoAutoload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avito_id' => 'int',
'url' => 'string',
'status' => 'string',
'status_detail' => 'string',
'warnings' => '\Swagger\Client\Model\ItemInfoErrorAutoload[]',
'errors' => '\Swagger\Client\Model\ItemInfoErrorAutoload[]',
'alarm' => '\Swagger\Client\Model\ItemInfoErrorAutoload[]',
'fee_info' => '\Swagger\Client\Model\ItemInfoAutoloadFeeInfo',
'applied_vas' => 'string[]',
'processing_time' => '\DateTime',
'event_time' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avito_id' => 'int32',
'url' => null,
'status' => null,
'status_detail' => null,
'warnings' => null,
'errors' => null,
'alarm' => null,
'fee_info' => null,
'applied_vas' => null,
'processing_time' => 'date-time',
'event_time' => 'date-time'    ];

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
        'avito_id' => 'avito_id',
'url' => 'url',
'status' => 'status',
'status_detail' => 'status_detail',
'warnings' => 'warnings',
'errors' => 'errors',
'alarm' => 'alarm',
'fee_info' => 'fee_info',
'applied_vas' => 'applied_vas',
'processing_time' => 'processing_time',
'event_time' => 'event_time'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avito_id' => 'setAvitoId',
'url' => 'setUrl',
'status' => 'setStatus',
'status_detail' => 'setStatusDetail',
'warnings' => 'setWarnings',
'errors' => 'setErrors',
'alarm' => 'setAlarm',
'fee_info' => 'setFeeInfo',
'applied_vas' => 'setAppliedVas',
'processing_time' => 'setProcessingTime',
'event_time' => 'setEventTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avito_id' => 'getAvitoId',
'url' => 'getUrl',
'status' => 'getStatus',
'status_detail' => 'getStatusDetail',
'warnings' => 'getWarnings',
'errors' => 'getErrors',
'alarm' => 'getAlarm',
'fee_info' => 'getFeeInfo',
'applied_vas' => 'getAppliedVas',
'processing_time' => 'getProcessingTime',
'event_time' => 'getEventTime'    ];

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

    const STATUS_SUCCESS = 'success';
const STATUS_PROBLEM = 'problem';
const STATUS_ERROR = 'error';
const STATUS_NOT_PUBLISH = 'not_publish';
const STATUS_WILL_PUBLISH_LATER = 'will_publish_later';
const STATUS_DUPLICATE = 'duplicate';
const STATUS_WITHOUT_ID = 'without_id';
const STATUS_DELETED = 'deleted';
const STATUS_UNKNOWN = 'unknown';
const STATUS_DETAIL_SUCCESS_ADDED = 'success_added';
const STATUS_DETAIL_SUCCESS_ACTIVATED = 'success_activated';
const STATUS_DETAIL_SUCCESS_ACTIVATED_UPDATED = 'success_activated_updated';
const STATUS_DETAIL_SUCCESS_UPDATED = 'success_updated';
const STATUS_DETAIL_SUCCESS_SKIPPED = 'success_skipped';
const STATUS_DETAIL_PROBLEM_OBSOLETE = 'problem_obsolete';
const STATUS_DETAIL_PROBLEM_PARAMS_CRITICAL = 'problem_params_critical';
const STATUS_DETAIL_PROBLEM_PARAMS = 'problem_params';
const STATUS_DETAIL_PROBLEM_PHONE = 'problem_phone';
const STATUS_DETAIL_PROBLEM_IMAGES = 'problem_images';
const STATUS_DETAIL_PROBLEM_VAS = 'problem_vas';
const STATUS_DETAIL_PROBLEM_OTHER = 'problem_other';
const STATUS_DETAIL_PROBLEM_SEVERAL = 'problem_several';
const STATUS_DETAIL_ERROR_FEE = 'error_fee';
const STATUS_DETAIL_ERROR_PARAMS = 'error_params';
const STATUS_DETAIL_ERROR_PHONE = 'error_phone';
const STATUS_DETAIL_ERROR_REJECTED = 'error_rejected';
const STATUS_DETAIL_ERROR_BLOCKED = 'error_blocked';
const STATUS_DETAIL_ERROR_DELETED = 'error_deleted';
const STATUS_DETAIL_ERROR_OTHER = 'error_other';
const STATUS_DETAIL_ERROR_SEVERAL = 'error_several';
const STATUS_DETAIL_STOPPED_END_DATE_COMPLETE = 'stopped_end_date_complete';
const STATUS_DETAIL_STOPPED_END_DATE_ERROR = 'stopped_end_date_error';
const STATUS_DETAIL_DATE_IN_FUTURE = 'date_in_future';
const STATUS_DETAIL_PUBLISH_LATER = 'publish_later';
const STATUS_DETAIL_LINKER = 'linker';
const STATUS_DETAIL_REMOVED_COMPLETE = 'removed_complete';
const STATUS_DETAIL_REMOVED_ERROR = 'removed_error';
const STATUS_DETAIL_NEED_SYNC = 'need_sync';
const STATUS_DETAIL_DUPLICATE = 'duplicate';
const STATUS_DETAIL_WITHOUT_ID = 'without_id';
const APPLIED_VAS_VIP = 'vip';
const APPLIED_VAS_HIGHLIGHT = 'highlight';
const APPLIED_VAS_PUSHUP = 'pushup';
const APPLIED_VAS_PREMIUM = 'premium';
const APPLIED_VAS_TURBO_SALE = 'turbo_sale';
const APPLIED_VAS_QUICK_SALE = 'quick_sale';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
self::STATUS_PROBLEM,
self::STATUS_ERROR,
self::STATUS_NOT_PUBLISH,
self::STATUS_WILL_PUBLISH_LATER,
self::STATUS_DUPLICATE,
self::STATUS_WITHOUT_ID,
self::STATUS_DELETED,
self::STATUS_UNKNOWN,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusDetailAllowableValues()
    {
        return [
            self::STATUS_DETAIL_SUCCESS_ADDED,
self::STATUS_DETAIL_SUCCESS_ACTIVATED,
self::STATUS_DETAIL_SUCCESS_ACTIVATED_UPDATED,
self::STATUS_DETAIL_SUCCESS_UPDATED,
self::STATUS_DETAIL_SUCCESS_SKIPPED,
self::STATUS_DETAIL_PROBLEM_OBSOLETE,
self::STATUS_DETAIL_PROBLEM_PARAMS_CRITICAL,
self::STATUS_DETAIL_PROBLEM_PARAMS,
self::STATUS_DETAIL_PROBLEM_PHONE,
self::STATUS_DETAIL_PROBLEM_IMAGES,
self::STATUS_DETAIL_PROBLEM_VAS,
self::STATUS_DETAIL_PROBLEM_OTHER,
self::STATUS_DETAIL_PROBLEM_SEVERAL,
self::STATUS_DETAIL_ERROR_FEE,
self::STATUS_DETAIL_ERROR_PARAMS,
self::STATUS_DETAIL_ERROR_PHONE,
self::STATUS_DETAIL_ERROR_REJECTED,
self::STATUS_DETAIL_ERROR_BLOCKED,
self::STATUS_DETAIL_ERROR_DELETED,
self::STATUS_DETAIL_ERROR_OTHER,
self::STATUS_DETAIL_ERROR_SEVERAL,
self::STATUS_DETAIL_STOPPED_END_DATE_COMPLETE,
self::STATUS_DETAIL_STOPPED_END_DATE_ERROR,
self::STATUS_DETAIL_DATE_IN_FUTURE,
self::STATUS_DETAIL_PUBLISH_LATER,
self::STATUS_DETAIL_LINKER,
self::STATUS_DETAIL_REMOVED_COMPLETE,
self::STATUS_DETAIL_REMOVED_ERROR,
self::STATUS_DETAIL_NEED_SYNC,
self::STATUS_DETAIL_DUPLICATE,
self::STATUS_DETAIL_WITHOUT_ID,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAppliedVasAllowableValues()
    {
        return [
            self::APPLIED_VAS_VIP,
self::APPLIED_VAS_HIGHLIGHT,
self::APPLIED_VAS_PUSHUP,
self::APPLIED_VAS_PREMIUM,
self::APPLIED_VAS_TURBO_SALE,
self::APPLIED_VAS_QUICK_SALE,        ];
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
        $this->container['avito_id'] = isset($data['avito_id']) ? $data['avito_id'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_detail'] = isset($data['status_detail']) ? $data['status_detail'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['alarm'] = isset($data['alarm']) ? $data['alarm'] : null;
        $this->container['fee_info'] = isset($data['fee_info']) ? $data['fee_info'] : null;
        $this->container['applied_vas'] = isset($data['applied_vas']) ? $data['applied_vas'] : null;
        $this->container['processing_time'] = isset($data['processing_time']) ? $data['processing_time'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusDetailAllowableValues();
        if (!is_null($this->container['status_detail']) && !in_array($this->container['status_detail'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_detail', must be one of '%s'",
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
     * Gets avito_id
     *
     * @return int
     */
    public function getAvitoId()
    {
        return $this->container['avito_id'];
    }

    /**
     * Sets avito_id
     *
     * @param int $avito_id Идентификатор объявления на сайте
     *
     * @return $this
     */
    public function setAvitoId($avito_id)
    {
        $this->container['avito_id'] = $avito_id;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL объявления на сайте
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Статус выгрузки объявления:<br /> `success` - Успешно опубликовано<br /> `problem` - Опубликовано с проблемами<br /> `error` - Не удалось опубликовать<br /> `not_publish` - Не нужно публиковать<br /> `will_publish_later` - Будут опубликованы позднее<br /> `duplicate` - Дубликат объявления<br /> `without_id` - Объявление без идентификатора<br /> `deleted` - Удалено из файла<br /> `unknown` - Возникли проблемы при определении статуса
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_detail
     *
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->container['status_detail'];
    }

    /**
     * Sets status_detail
     *
     * @param string $status_detail Подробный статус выгрузки объявления: <br />`success_added` - Объявление добавленно на сайт в последний цикл автозагрузки <br />`success_activated` - Объявление активировано из ранее снятых с публикации или завершенных <br />`success_activated_updated` - Объявление активировано из ранее снятых с публикации или завершенных и изменено <br />`success_updated` - Объявление было изменено <br />`success_skipped` - Объявление в данный цикл автозагрузки без изменений оставлено активным на сайте <br />`problem_obsolete` - Объявление в XML имеет устаревший формат. [Документация по формату](http://autoload.avito.ru/format/) <br />`problem_params_critical` - При обработке объявления возникли ошибки, связанные с описанием или значениями параметров. Если ошибки не исправить, то через какое-то время объявление исчезнет с сайта <br />`problem_params` - При обработке объявления возникли ошибки, связанные с описанием или значениями параметров <br />`problem_phone` - Проблемы с телефонным номером в контактной информации <br />`problem_images` - При обработке возникли ошибки размещения фотографий <br />`problem_vas` - При обработке возникли ошибки активации дополнительных услуг <br />`problem_other` - Возникли ошибки, отличные от перечисленных <br />`problem_several` - Возникло несколько разных ошибок, перечисленных выше <br />`error_fee` - Объявление не опубликовано на сайте из-за проблем с оплатой размещения <br />`error_params` - Не удалось опубликовать на сайте из-за ошибок, связанных с описанием или значениями параметров <br />`error_phone` - Не удалось опубликовать из-за проблем с телефонным номером в контактной информации <br />`error_rejected` - Объявление было отклонено модерацией из-за нарушений правил сайта <br />`error_blocked` - Объявление было заблокировано модерацией из-за нарушений правил сайта <br />`error_deleted` - Объявление невозможно обработать из-за того, что ранее объявления с таким ID (в XML-файле) было удалено с сайта <br />`error_other` - Возникли ошибки, отличные от перечисленных <br />`error_several` - Возникло несколько разных ошибок, перечисленных выше <br />`stopped_end_date_complete` - Не опубликовано или снято с публикации по причине истечения срока экспозиции, указанного в XML-файле <br />`stopped_end_date_error` - При попытке снятия с публикации возникли ошибки <br />`date_in_future` - Не опубликовано или снято с публикации по причине, что дата начала экспозиции, указанная в XML-файле, еще не наступила <br />`publish_later` - Не добавлено на сайт из-за ограничения на количество публикуемых за один цикл объявлений. Если вы хотите изменить режим автозагрузки ваших объявлений, обратитесь в Службу поддержки <br />`linker` - Объявления, похожие на размещенные ранее через Личный кабинет, по которым требуется принять решение: объединить с существующим или опубликовать как новое объявление <br />`removed_complete` - Объявление снято с публикации (завершенные), т.к. они были удалены из XML-файла <br />`removed_error` - Ошибки при попытке снятия с публикации <br />`need_sync` - Объявление ожидает синхронизации с сайтом <br />`duplicate` - Объявления имеют одинаковое описание <br />`without_id` - Объявление без идентификатора
     *
     * @return $this
     */
    public function setStatusDetail($status_detail)
    {
        $allowedValues = $this->getStatusDetailAllowableValues();
        if (!is_null($status_detail) && !in_array($status_detail, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_detail', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_detail'] = $status_detail;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \Swagger\Client\Model\ItemInfoErrorAutoload[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Swagger\Client\Model\ItemInfoErrorAutoload[] $warnings Ошибки, которые, в подавляющем большинстве случаев, информируют, но не требуют вмешательства (никак не влияют на статус обработки)
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Swagger\Client\Model\ItemInfoErrorAutoload[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Swagger\Client\Model\ItemInfoErrorAutoload[] $errors Ошибки, при возникновении которых публикация новых не происходит, уже опубликованные — остаются без изменений, VAS-услуги не применяются, завершенные — не реактивируются
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets alarm
     *
     * @return \Swagger\Client\Model\ItemInfoErrorAutoload[]
     */
    public function getAlarm()
    {
        return $this->container['alarm'];
    }

    /**
     * Sets alarm
     *
     * @param \Swagger\Client\Model\ItemInfoErrorAutoload[] $alarm Ошибки, при которых публикация/обновление происходит, но при этом с объявлением есть проблема, которая требует вмешательства пользователя; публикация изменений, по-возможности, происходит
     *
     * @return $this
     */
    public function setAlarm($alarm)
    {
        $this->container['alarm'] = $alarm;

        return $this;
    }

    /**
     * Gets fee_info
     *
     * @return \Swagger\Client\Model\ItemInfoAutoloadFeeInfo
     */
    public function getFeeInfo()
    {
        return $this->container['fee_info'];
    }

    /**
     * Sets fee_info
     *
     * @param \Swagger\Client\Model\ItemInfoAutoloadFeeInfo $fee_info fee_info
     *
     * @return $this
     */
    public function setFeeInfo($fee_info)
    {
        $this->container['fee_info'] = $fee_info;

        return $this;
    }

    /**
     * Gets applied_vas
     *
     * @return string[]
     */
    public function getAppliedVas()
    {
        return $this->container['applied_vas'];
    }

    /**
     * Sets applied_vas
     *
     * @param string[] $applied_vas Список примененных при выгрузке дополнительных услуг - `premium` — [премиум-объявление](https://support.avito.ru/articles/200026868) - `vip` — [VIP-объявление](https://support.avito.ru/articles/200026848) - `pushup` — [поднятие объявления в поиске](https://support.avito.ru/articles/200026828) - `highlight` — [выделение объявления](https://support.avito.ru/articles/200026858) - `turbo_sale` - применение пакета [Турбо-продажа](https://support.avito.ru/articles/200026838) - `quick_sale` - применение пакета [Быстрая продажа](https://support.avito.ru/articles/200026838)
     *
     * @return $this
     */
    public function setAppliedVas($applied_vas)
    {
        $allowedValues = $this->getAppliedVasAllowableValues();
        if (!is_null($applied_vas) && array_diff($applied_vas, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'applied_vas', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['applied_vas'] = $applied_vas;

        return $this;
    }

    /**
     * Gets processing_time
     *
     * @return \DateTime
     */
    public function getProcessingTime()
    {
        return $this->container['processing_time'];
    }

    /**
     * Sets processing_time
     *
     * @param \DateTime $processing_time Дата последнего цикла обработки
     *
     * @return $this
     */
    public function setProcessingTime($processing_time)
    {
        $this->container['processing_time'] = $processing_time;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param \DateTime $event_time Дата последнего изменения состояния (статуса) выгрузки объявления
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

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
