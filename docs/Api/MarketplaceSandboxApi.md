# Swagger\Client\MarketplaceSandboxApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentAssembleSandbox**](MarketplaceSandboxApi.md#shipmentassemblesandbox) | **POST** /marketplace-sandbox/shipment/assemble | Скомплектовать товар(-ы) для отправления
[**shipmentConfirmSandbox**](MarketplaceSandboxApi.md#shipmentconfirmsandbox) | **POST** /marketplace-sandbox/shipment/confirm | Подтвердить отправление
[**shipmentCreateAcceptanceCert**](MarketplaceSandboxApi.md#shipmentcreateacceptancecert) | **POST** /marketplace-sandbox/shipment/createAcceptanceCert | Получить PDF-файл акта приёма-передачи
[**shipmentGetInfoSandbox**](MarketplaceSandboxApi.md#shipmentgetinfosandbox) | **POST** /marketplace-sandbox/shipment/getInfo | Информация об отправлении
[**shipmentGetListSandbox**](MarketplaceSandboxApi.md#shipmentgetlistsandbox) | **POST** /marketplace-sandbox/shipment/getList | Список отправлений
[**shipmentPickUpSandbox**](MarketplaceSandboxApi.md#shipmentpickupsandbox) | **POST** /marketplace-sandbox/shipment/pickup | Подтвердить отгрузку товара(-ов) на отправление
[**shipmentRejectSandbox**](MarketplaceSandboxApi.md#shipmentrejectsandbox) | **POST** /marketplace-sandbox/shipment/reject | Отменить отправление

# **shipmentAssembleSandbox**
> \Swagger\Client\Model\ShipmentAssembleReply shipmentAssembleSandbox($body, $authorization)

Скомплектовать товар(-ы) для отправления

Выполнить комплектацию товара(-ов) для отправления продавцом

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentAssembleRequest(); // \Swagger\Client\Model\ShipmentAssembleRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentAssembleSandbox($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentAssembleSandbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentAssembleRequest**](../Model/ShipmentAssembleRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentAssembleReply**](../Model/ShipmentAssembleReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentConfirmSandbox**
> \Swagger\Client\Model\ShipmentConfirmReply shipmentConfirmSandbox($body, $authorization)

Подтвердить отправление

Выполнить подтверждение отправления продавцом.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentConfirmRequest(); // \Swagger\Client\Model\ShipmentConfirmRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentConfirmSandbox($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentConfirmSandbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentConfirmRequest**](../Model/ShipmentConfirmRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentConfirmReply**](../Model/ShipmentConfirmReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentCreateAcceptanceCert**
> \Swagger\Client\Model\ShipmentCreateAcceptanceCertReply shipmentCreateAcceptanceCert($authorization)

Получить PDF-файл акта приёма-передачи

Получить PDF-файл акта приёма-передачи

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentCreateAcceptanceCert($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentCreateAcceptanceCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentCreateAcceptanceCertReply**](../Model/ShipmentCreateAcceptanceCertReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentGetInfoSandbox**
> \Swagger\Client\Model\ShipmentReply shipmentGetInfoSandbox($body, $authorization)

Информация об отправлении

Возвращает информацию об отправлении по его идентификатору.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentInfoRequest(); // \Swagger\Client\Model\ShipmentInfoRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentGetInfoSandbox($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentGetInfoSandbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentInfoRequest**](../Model/ShipmentInfoRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentReply**](../Model/ShipmentReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentGetListSandbox**
> \Swagger\Client\Model\ShipmentListReply shipmentGetListSandbox($authorization, $body)

Список отправлений

Возвращает список отправлений за указанный период времени.  Дополнительно можно отфильтровать отправления.  Максимальное количество отправлений в ответе: 50

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$body = new \Swagger\Client\Model\ShipmentListRequest(); // \Swagger\Client\Model\ShipmentListRequest | 

try {
    $result = $apiInstance->shipmentGetListSandbox($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentGetListSandbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **body** | [**\Swagger\Client\Model\ShipmentListRequest**](../Model/ShipmentListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentListReply**](../Model/ShipmentListReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPickUpSandbox**
> \Swagger\Client\Model\ShipmentPickUpReply shipmentPickUpSandbox($body, $authorization)

Подтвердить отгрузку товара(-ов) на отправление

Подтвердить отгрузку товара(-ов) на отправление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentPickUpRequest(); // \Swagger\Client\Model\ShipmentPickUpRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentPickUpSandbox($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentPickUpSandbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentPickUpRequest**](../Model/ShipmentPickUpRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentPickUpReply**](../Model/ShipmentPickUpReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentRejectSandbox**
> \Swagger\Client\Model\ShipmentRejectReply shipmentRejectSandbox($body, $authorization)

Отменить отправление

Выполнить отмену отправления продавцом.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceSandboxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentRejectRequest(); // \Swagger\Client\Model\ShipmentRejectRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentRejectSandbox($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceSandboxApi->shipmentRejectSandbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentRejectRequest**](../Model/ShipmentRejectRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentRejectReply**](../Model/ShipmentRejectReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

