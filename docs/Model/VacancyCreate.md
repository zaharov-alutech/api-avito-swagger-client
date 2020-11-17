# VacancyCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Название вакансии (строка длиной от 0 до 50 символов) | 
**description** | **string** | Описание вакансии (строка длиной от 200 до 5000 символов) | 
**html_tags** | [**\Swagger\Client\Model\HtmlTags**](HtmlTags.md) |  | [optional] 
**billing_type** | **string** | Вариант платного размещения  Возможные значения:   - \&quot;package\&quot; - размещение объявления осуществляется только при наличии подходящего пакета размещения   - \&quot;packageOrSingle\&quot; - при наличии подходящего пакета оплата размещения объявления произойдет с него; если нет подходящего пакета, но достаточно денег на кошельке Авито, то произойдет разовое размещение   - \&quot;single\&quot; - только разовое размещение, произойдет при наличии достаточной суммы на кошельке Авито; если есть подходящий пакет размещения, он будет проигнорирован | 
**allow_messages** | **bool** | Возможность откликнуться на вакансию через сайт | [optional] 
**contacts** | [**\Swagger\Client\Model\Contacts**](Contacts.md) |  | [optional] 
**custom_employer_name** | **string** | Название компании (строка длиной от 0 до 255 символов) | [optional] 
**address** | **string** | Полный адрес объекта (строка длиной от 0 до 256 символов) | [optional] 
**coordinates** | [**\Swagger\Client\Model\Coordinates**](Coordinates.md) |  | [optional] 
**salary** | **int** | Зарплата, рублей в месяц | [optional] 
**business_area** | **int** | Идентификатор сферы деятельности  Возможные значения: - 1 - IT, интернет, телеком - 13 - Медицина, фармацевтика - 17 - Продажи - 19 - Страхование - 21 - Транспорт, логистика - 14 - Образование, наука - 20 - Строительство - 22 - Туризм, рестораны - 24 - Фитнес, салоны красоты - 15 - Без опыта, студенты - 7 - Автомобильный бизнес - 2 - Бухгалтерия, финансы - 9 - Высший менеджмент - 16 - Госслужба, НКО - 10124 - ЖКХ, эксплуатация - 11 - Искусство, развлечения - 12 - Консультирование - 3 - Маркетинг, реклама, PR - 8 - Охрана, безопасность - 6 - Управление персоналом - 23 - Юриспруденция - 4 - Административная работа - 5 - Банки, инвестиции - 18 - Производство, сырьё, с/х - 27 - Домашний персонал | 
**schedule** | [**\Swagger\Client\Model\VacancyCreateSchedule**](VacancyCreateSchedule.md) |  | 
**experience** | [**\Swagger\Client\Model\VacancyCreateExperience**](VacancyCreateExperience.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

