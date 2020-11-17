# Negotiation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**created_at** | **string** | Дата создания отклика | [optional] 
**updated_at** | **string** | Дата последнего обновления отклика | [optional] 
**state** | **string** | Статус отклика зависит от поля type. Может принимать следующие значения:&lt;br/&gt; Для откликов типа &#x60;response&#x60; 1. &#x60;new&#x60; - отклик был создан&lt;br/&gt; 2. &#x60;response&#x60; - соискатель согласился отправить о себе информацию&lt;br/&gt; 3. &#x60;discard&#x60; - соискатель отказался отправить о себе информацию&lt;br/&gt; 4. &#x60;reject&#x60; - работодатель отказал соискателю&lt;br/&gt; 5. &#x60;special&#x60; - настроены автоответы или другая нестандартная логика&lt;br/&gt;  Для откликов типа &#x60;invitation&#x60; 1. &#x60;new&#x60; - отклик был создан&lt;br/&gt; 2. &#x60;phone_sent&#x60; - работодатель отправил свои контактные данные соискателю. | [optional] 
**chat_id** | **string** | Идентификатор чата | [optional] 
**resume** | [**\Swagger\Client\Model\NegotiationResume**](NegotiationResume.md) |  | [optional] 
**vacancy** | [**\Swagger\Client\Model\NegotiationVacancy**](NegotiationVacancy.md) |  | [optional] 
**called** | **bool** | Отклик был создан через звонок | [optional] 
**company_name** | **string** | Наименование компании | [optional] 
**manager_name** | **string** | Имя менеджера компании | [optional] 
**type** | **string** | Тип отклика&lt;br/&gt; &#x60;response&#x60; - соискатель откликнулся на вакансию&lt;br/&gt; &#x60;invitation&#x60; - работодатель пригласил соискателя по резюме | [optional] 
**user** | [**\Swagger\Client\Model\NegotiationUser**](NegotiationUser.md) |  | [optional] 
**contact** | [**\Swagger\Client\Model\NegotiationContact**](NegotiationContact.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

