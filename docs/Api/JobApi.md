# Swagger\Client\JobApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNegotiations**](JobApi.md#getnegotiations) | **GET** /job/v1/negotiations | Получение списка откликов
[**getNegotiationsByChatID**](JobApi.md#getnegotiationsbychatid) | **GET** /job/v1/negotiations/by-chat-id/{chat_id} | Получение отклика по идентификатору чата
[**getNegotiationsByID**](JobApi.md#getnegotiationsbyid) | **GET** /job/v1/negotiations/{negotiation_id} | Получение отклика по его идентификатору
[**getResume**](JobApi.md#getresume) | **GET** /job/v1/resumes/{resume_id}/ | Просмотр резюме
[**getResume20**](JobApi.md#getresume20) | **GET** /job/v2/resumes/{resume_id}/ | Просмотр резюме v2.0
[**getResumeContacts**](JobApi.md#getresumecontacts) | **GET** /job/v1/resumes/{resume_id}/contacts/ | Доступ к контактным данным соискателя
[**getResumes**](JobApi.md#getresumes) | **GET** /job/v1/resumes/ | Поиск резюме
[**postProlongateVacancy**](JobApi.md#postprolongatevacancy) | **POST** /job/v1/vacancies/{vacancy_id}/prolongate | Реактивация вакансии
[**postVacancy**](JobApi.md#postvacancy) | **POST** /job/v1/vacancies | Публикация вакансии
[**putArchivedVacancy**](JobApi.md#putarchivedvacancy) | **PUT** /job/v1/vacancies/archived/{vacancy_id} | Остановка публикации вакансии
[**putVacancy**](JobApi.md#putvacancy) | **PUT** /job/v1/vacancies/{vacancy_id} | Редактирование вакансии

# **getNegotiations**
> \Swagger\Client\Model\NegotiationList getNegotiations($authorization, $per_page, $page, $cursor, $vacancy_id, $resume_photos)

Получение списка откликов

Возвращает постраничный список откликов с фильтрацией по вакансии

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$per_page = 20; // int | Количество записей на странице (целое число больше 0 и меньше 21)
$page = 1; // int | Номер страницы (целое число больше 0)
$cursor = 789; // int | Курсор поиска, возвращается в ответе первого запроса и если не указан, то страница всегда начинается с первой
$vacancy_id = 789; // int | Идентификатор вакансии. Опциональный фильтр
$resume_photos = True; // Bool | признак того, нужно ли отдавать картинки резюме, по умолчанию false

try {
    $result = $apiInstance->getNegotiations($authorization, $per_page, $page, $cursor, $vacancy_id, $resume_photos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getNegotiations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **per_page** | **int**| Количество записей на странице (целое число больше 0 и меньше 21) | [optional] [default to 20]
 **page** | **int**| Номер страницы (целое число больше 0) | [optional] [default to 1]
 **cursor** | **int**| Курсор поиска, возвращается в ответе первого запроса и если не указан, то страница всегда начинается с первой | [optional]
 **vacancy_id** | **int**| Идентификатор вакансии. Опциональный фильтр | [optional]
 **resume_photos** | [**Bool**](../Model/.md)| признак того, нужно ли отдавать картинки резюме, по умолчанию false | [optional]

### Return type

[**\Swagger\Client\Model\NegotiationList**](../Model/NegotiationList.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNegotiationsByChatID**
> \Swagger\Client\Model\Negotiation getNegotiationsByChatID($authorization, $chat_id)

Получение отклика по идентификатору чата

Возвращает информацию об отклике. Отклики создаются после создания чата и поэтому в ответе метода появляются не сразу (до 30 секунд)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$chat_id = "chat_id_example"; // string | Идентификатор чата

try {
    $result = $apiInstance->getNegotiationsByChatID($authorization, $chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getNegotiationsByChatID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **chat_id** | **string**| Идентификатор чата |

### Return type

[**\Swagger\Client\Model\Negotiation**](../Model/Negotiation.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNegotiationsByID**
> \Swagger\Client\Model\Negotiation getNegotiationsByID($authorization, $negotiation_id, $resume_photos)

Получение отклика по его идентификатору

Возвращает информацию об отклике

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$negotiation_id = 789; // int | Идентификатор отклика
$resume_photos = True; // Bool | признак того, нужно ли отдавать картинки резюме, по умолчанию false

try {
    $result = $apiInstance->getNegotiationsByID($authorization, $negotiation_id, $resume_photos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getNegotiationsByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **negotiation_id** | **int**| Идентификатор отклика |
 **resume_photos** | [**Bool**](../Model/.md)| признак того, нужно ли отдавать картинки резюме, по умолчанию false | [optional]

### Return type

[**\Swagger\Client\Model\Negotiation**](../Model/Negotiation.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResume**
> \Swagger\Client\Model\Resume getResume($authorization, $resume_id, $fields)

Просмотр резюме

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$resume_id = 789; // int | Идентификатор резюме
$fields = "fields_example"; // string | Поля ответа (можно указать несколько значений через запятую)

try {
    $result = $apiInstance->getResume($authorization, $resume_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getResume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **resume_id** | **int**| Идентификатор резюме |
 **fields** | **string**| Поля ответа (можно указать несколько значений через запятую) | [optional]

### Return type

[**\Swagger\Client\Model\Resume**](../Model/Resume.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResume20**
> \Swagger\Client\Model\Resume20 getResume20($authorization, $resume_id, $fields, $params, $photos)

Просмотр резюме v2.0

По умолчанию fields и params выводятся все. Если указана только часть полей - остальные поля будут отсутствовать в ответе.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$resume_id = 789; // int | Идентификатор резюме
$fields = "fields_example"; // string | Поля основного тела ответа (можно указать несколько значений через запятую). По умолчанию отображаются все поля.
$params = "params_example"; // string | Дополнительные поля, которые входят в params (можно указать несколько значений через запятую). По умолчанию отображаются все поля.
$photos = True; // Bool | Признак того, нужно ли отдавать картинки, по умолчанию false

try {
    $result = $apiInstance->getResume20($authorization, $resume_id, $fields, $params, $photos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getResume20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **resume_id** | **int**| Идентификатор резюме |
 **fields** | **string**| Поля основного тела ответа (можно указать несколько значений через запятую). По умолчанию отображаются все поля. | [optional]
 **params** | **string**| Дополнительные поля, которые входят в params (можно указать несколько значений через запятую). По умолчанию отображаются все поля. | [optional]
 **photos** | [**Bool**](../Model/.md)| Признак того, нужно ли отдавать картинки, по умолчанию false | [optional]

### Return type

[**\Swagger\Client\Model\Resume20**](../Model/Resume20.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResumeContacts**
> \Swagger\Client\Model\ResumeContacts getResumeContacts($authorization, $resume_id)

Доступ к контактным данным соискателя

Для получения контактов пользователя необходимо приобрести пакет просмотров контактных данных в [личном кабинете](https://www.avito.ru/account/cv_packages).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$resume_id = 789; // int | Идентификатор резюме

try {
    $result = $apiInstance->getResumeContacts($authorization, $resume_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getResumeContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **resume_id** | **int**| Идентификатор резюме |

### Return type

[**\Swagger\Client\Model\ResumeContacts**](../Model/ResumeContacts.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResumes**
> \Swagger\Client\Model\_ getResumes($authorization, $per_page, $page, $cursor, $fields, $query, $location, $specialization, $schedule, $business_trip_readiness, $relocation_readiness, $gender, $age_min, $age_max, $education_level, $experience_min, $experience_max, $salary_min, $salary_max, $updated_than)

Поиск резюме

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$per_page = 25; // int | Количество записей на странице (положительное число больше 0 и меньше 100)
$page = 1; // int | Номер страницы (положительное число больше 0)
$cursor = 789; // int | Курсор поиска (если не указан, будет начат новый поиск и его курсор будет возвращен в ответе)
$fields = "fields_example"; // string | Поля ответа (можно указать несколько значений через запятую)
$query = "query_example"; // string | Поисковая фраза
$location = 789; // int | Идентификатор региона поиска (можно указать несколько значений через запятую) <br> Метод принимает идентификаторы сущностей Region и City из [справочника](http://autoload.avito.ru/format/Locations.xml).
$specialization = 789; // int | Идентификатор сферы деятельности (можно указать несколько значений через запятую) <br> Возможные значения: - 10166 - IT, интернет, телеком - 10167 - Медицина, фармацевтика - 10168 - Продажи - 10169 - Страхование - 10170 - Транспорт, логистика - 10171 - Образование, наука - 10172 - Строительство - 10173 - Туризм, рестораны - 10174 - Фитнес, салоны красоты - 10175 - Без опыта, студенты - 10180 - Автомобильный бизнес - 10181 - Бухгалтерия, финансы - 10182 - Высший менеджмент - 10183 - Госслужба, НКО - 10184 - ЖКХ, эксплуатация - 10185 - Искусство, развлечения - 10186 - Консультирование - 10187 - Маркетинг, реклама, PR - 10188 - Охрана, безопасность - 10189 - Управление персоналом - 10190 - Юриспруденция - 10191 - Административная работа - 10192 - Банки, инвестиции - 10193 - Производство, сырьё, с/х - 16844 - Домашний персонал
$schedule = "schedule_example"; // string | График работы (можно указать несколько значений через запятую) <br> Возможные значения: - partial-day - Неполный рабочий день - full-day - Полный рабочий день - fly-in-fly-out - Вахтовый метод - flexible - Гибкий график - shift - Сменный график - remote - Удаленная работа
$business_trip_readiness = "business_trip_readiness_example"; // string | Готовность к командировкам (можно указать несколько значений через запятую) <br> Возможные значения: - ready - Готов - never - Не готов - sometimes - Иногда
$relocation_readiness = "relocation_readiness_example"; // string | Готовность к переезду (можно указать несколько значений через запятую) <br> Возможные значения: - possible - Возможен - never - Невозможен
$gender = "gender_example"; // string | Пол (можно указать несколько значений через запятую) <br> Возможные значения: - female - Женщина - male - Мужчина
$age_min = 18; // int | Минимальный возраст (включительно, положительное число от 18 до 99)
$age_max = 99; // int | Максимальный возраст (включительно, положительное число от 18 до 99)
$education_level = "education_level_example"; // string | Уровень образования (можно указать несколько значений через запятую) <br> Возможные значения: - higher - Высшее - unfinished-higher - Неоконченное высшее - secondary - Среднее - special-secondary - Среднее специальное
$experience_min = 0; // int | Минимальный стаж работы (включительно, положительное число от 0 до 50)
$experience_max = 50; // int | Максимальный стаж работы (включительно, положительное число от 0 до 50)
$salary_min = 0; // int | Минимальный размер заработной платы (включительно, положительное число)
$salary_max = 789; // int | Максимальный размер заработной платы (включительно, положительное число)
$updated_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Дата последнего обновления

try {
    $result = $apiInstance->getResumes($authorization, $per_page, $page, $cursor, $fields, $query, $location, $specialization, $schedule, $business_trip_readiness, $relocation_readiness, $gender, $age_min, $age_max, $education_level, $experience_min, $experience_max, $salary_min, $salary_max, $updated_than);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->getResumes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **per_page** | **int**| Количество записей на странице (положительное число больше 0 и меньше 100) | [optional] [default to 25]
 **page** | **int**| Номер страницы (положительное число больше 0) | [optional] [default to 1]
 **cursor** | **int**| Курсор поиска (если не указан, будет начат новый поиск и его курсор будет возвращен в ответе) | [optional]
 **fields** | **string**| Поля ответа (можно указать несколько значений через запятую) | [optional]
 **query** | **string**| Поисковая фраза | [optional]
 **location** | **int**| Идентификатор региона поиска (можно указать несколько значений через запятую) &lt;br&gt; Метод принимает идентификаторы сущностей Region и City из [справочника](http://autoload.avito.ru/format/Locations.xml). | [optional]
 **specialization** | **int**| Идентификатор сферы деятельности (можно указать несколько значений через запятую) &lt;br&gt; Возможные значения: - 10166 - IT, интернет, телеком - 10167 - Медицина, фармацевтика - 10168 - Продажи - 10169 - Страхование - 10170 - Транспорт, логистика - 10171 - Образование, наука - 10172 - Строительство - 10173 - Туризм, рестораны - 10174 - Фитнес, салоны красоты - 10175 - Без опыта, студенты - 10180 - Автомобильный бизнес - 10181 - Бухгалтерия, финансы - 10182 - Высший менеджмент - 10183 - Госслужба, НКО - 10184 - ЖКХ, эксплуатация - 10185 - Искусство, развлечения - 10186 - Консультирование - 10187 - Маркетинг, реклама, PR - 10188 - Охрана, безопасность - 10189 - Управление персоналом - 10190 - Юриспруденция - 10191 - Административная работа - 10192 - Банки, инвестиции - 10193 - Производство, сырьё, с/х - 16844 - Домашний персонал | [optional]
 **schedule** | **string**| График работы (можно указать несколько значений через запятую) &lt;br&gt; Возможные значения: - partial-day - Неполный рабочий день - full-day - Полный рабочий день - fly-in-fly-out - Вахтовый метод - flexible - Гибкий график - shift - Сменный график - remote - Удаленная работа | [optional]
 **business_trip_readiness** | **string**| Готовность к командировкам (можно указать несколько значений через запятую) &lt;br&gt; Возможные значения: - ready - Готов - never - Не готов - sometimes - Иногда | [optional]
 **relocation_readiness** | **string**| Готовность к переезду (можно указать несколько значений через запятую) &lt;br&gt; Возможные значения: - possible - Возможен - never - Невозможен | [optional]
 **gender** | **string**| Пол (можно указать несколько значений через запятую) &lt;br&gt; Возможные значения: - female - Женщина - male - Мужчина | [optional]
 **age_min** | **int**| Минимальный возраст (включительно, положительное число от 18 до 99) | [optional] [default to 18]
 **age_max** | **int**| Максимальный возраст (включительно, положительное число от 18 до 99) | [optional] [default to 99]
 **education_level** | **string**| Уровень образования (можно указать несколько значений через запятую) &lt;br&gt; Возможные значения: - higher - Высшее - unfinished-higher - Неоконченное высшее - secondary - Среднее - special-secondary - Среднее специальное | [optional]
 **experience_min** | **int**| Минимальный стаж работы (включительно, положительное число от 0 до 50) | [optional] [default to 0]
 **experience_max** | **int**| Максимальный стаж работы (включительно, положительное число от 0 до 50) | [optional] [default to 50]
 **salary_min** | **int**| Минимальный размер заработной платы (включительно, положительное число) | [optional] [default to 0]
 **salary_max** | **int**| Максимальный размер заработной платы (включительно, положительное число) | [optional]
 **updated_than** | **\DateTime**| Дата последнего обновления | [optional]

### Return type

[**\Swagger\Client\Model\_**](../Model/_.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProlongateVacancy**
> postProlongateVacancy($body, $authorization, $vacancy_id)

Реактивация вакансии

Реактивирует объявление в категории Вакансии

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\VacancyProlongate(); // \Swagger\Client\Model\VacancyProlongate | 
$authorization = "authorization_example"; // string | Токен для авторизации
$vacancy_id = 789; // int | Идентификатор вакансии на сайте

try {
    $apiInstance->postProlongateVacancy($body, $authorization, $vacancy_id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->postProlongateVacancy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VacancyProlongate**](../Model/VacancyProlongate.md)|  |
 **authorization** | **string**| Токен для авторизации |
 **vacancy_id** | **int**| Идентификатор вакансии на сайте |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVacancy**
> \Swagger\Client\Model\VacanctCreateResult postVacancy($body, $authorization)

Публикация вакансии

Создает объявление в категории Вакансии

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\VacancyCreate(); // \Swagger\Client\Model\VacancyCreate | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->postVacancy($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->postVacancy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VacancyCreate**](../Model/VacancyCreate.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\VacanctCreateResult**](../Model/VacanctCreateResult.md)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchivedVacancy**
> putArchivedVacancy($authorization, $vacancy_id)

Остановка публикации вакансии

Снимает с публикации объявление в категории Вакансии

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$vacancy_id = 789; // int | Идентификатор вакансии на сайте

try {
    $apiInstance->putArchivedVacancy($authorization, $vacancy_id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->putArchivedVacancy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **vacancy_id** | **int**| Идентификатор вакансии на сайте |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVacancy**
> putVacancy($body, $authorization, $vacancy_id)

Редактирование вакансии

Редактирует объявление в категории Вакансии

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Authorization Code
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\VacancyUpdate(); // \Swagger\Client\Model\VacancyUpdate | 
$authorization = "authorization_example"; // string | Токен для авторизации
$vacancy_id = 789; // int | Идентификатор вакансии на сайте

try {
    $apiInstance->putVacancy($body, $authorization, $vacancy_id);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->putVacancy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VacancyUpdate**](../Model/VacancyUpdate.md)|  |
 **authorization** | **string**| Токен для авторизации |
 **vacancy_id** | **int**| Идентификатор вакансии на сайте |

### Return type

void (empty response body)

### Authorization

[Authorization Code](../../README.md#Authorization Code), [Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

