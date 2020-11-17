# Swagger\Client\UserApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserBalance**](UserApi.md#getuserbalance) | **GET** /core/v1/accounts/{user_id}/balance/ | Получение баланса кошелька пользователя
[**getUserInfoSelf**](UserApi.md#getuserinfoself) | **GET** /core/v1/accounts/self | Получение информации об авторизованном пользователе
[**postOperationsHistory**](UserApi.md#postoperationshistory) | **POST** /core/v1/accounts/operations_history/ | Получение истории операций пользователя

# **getUserBalance**
> \Swagger\Client\Model\Balance getUserBalance($authorization, $user_id)

Получение баланса кошелька пользователя

Возвращает сумму реальных денежных средств в кошельке, а также сумму бонусных средств

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$user_id = 789; // int | Идентификатор пользователя (клиента)

try {
    $result = $apiInstance->getUserBalance($authorization, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **user_id** | **int**| Идентификатор пользователя (клиента) |

### Return type

[**\Swagger\Client\Model\Balance**](../Model/Balance.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserInfoSelf**
> \Swagger\Client\Model\UserInfoSelf getUserInfoSelf($authorization)

Получение информации об авторизованном пользователе

Возвращает идентификатор пользователя и его регистрационные данные

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->getUserInfoSelf($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserInfoSelf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\UserInfoSelf**](../Model/UserInfoSelf.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOperationsHistory**
> \Swagger\Client\Model\ResponseOperationsHistory postOperationsHistory($authorization, $body)

Получение истории операций пользователя

Возвращает список операций пользователя (списания/пополнение кошелька - деньги и бонусы) за определенный временной период (задается пользователем)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$body = new \Swagger\Client\Model\RequestOperationsHistory(); // \Swagger\Client\Model\RequestOperationsHistory | 

try {
    $result = $apiInstance->postOperationsHistory($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->postOperationsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **body** | [**\Swagger\Client\Model\RequestOperationsHistory**](../Model/RequestOperationsHistory.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResponseOperationsHistory**](../Model/ResponseOperationsHistory.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

