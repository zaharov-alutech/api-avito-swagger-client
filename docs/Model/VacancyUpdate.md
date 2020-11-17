# VacancyUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Название вакансии (строка длиной от 0 до 50 символов) | [optional] 
**description** | **string** | Описание вакансии (строка длиной от 200 до 5000 символов) | [optional] 
**html_tags** | [**\Swagger\Client\Model\HtmlTags**](HtmlTags.md) |  | [optional] 
**billing_type** | **string** | Вариант платного размещения  Возможные значения:   - \&quot;package\&quot; - размещение объявления осуществляется только при наличии подходящего пакета размещения   - \&quot;packageOrSingle\&quot; - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение   - \&quot;single\&quot; - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован | 
**allow_messages** | **bool** | Возможность откликнуться на вакансию через сайт | [optional] 
**contacts** | [**\Swagger\Client\Model\Contacts**](Contacts.md) |  | [optional] 
**custom_employer_name** | **string** | Название компании (строка длиной от 0 до 255 символов) | [optional] 
**address** | **string** | Полный адрес объекта (строка длиной от 0 до 256 символов) | [optional] 
**coordinates** | [**\Swagger\Client\Model\Coordinates**](Coordinates.md) |  | [optional] 
**salary** | **int** | Зарплата, рублей в месяц | [optional] 
**experience** | [**\Swagger\Client\Model\VacancyCreateExperience**](VacancyCreateExperience.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

