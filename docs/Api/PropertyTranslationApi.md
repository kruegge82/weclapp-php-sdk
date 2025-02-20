# kruegge82\weclapp\PropertyTranslationApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**propertyTranslationReadPropertyTranslationsGet()**](PropertyTranslationApi.md#propertyTranslationReadPropertyTranslationsGet) | **GET** /propertyTranslation/readPropertyTranslations |  |
| [**propertyTranslationUpdatePropertyTranslationsPost()**](PropertyTranslationApi.md#propertyTranslationUpdatePropertyTranslationsPost) | **POST** /propertyTranslation/updatePropertyTranslations |  |


## `propertyTranslationReadPropertyTranslationsGet()`

```php
propertyTranslationReadPropertyTranslationsGet($entity_name, $entity_id, $locale, $property_names): \kruegge82\weclapp\Model\PropertyTranslationReadPropertyTranslationsGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PropertyTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_name = 'entity_name_example'; // string
$entity_id = 'entity_id_example'; // string
$locale = 'locale_example'; // string
$property_names = array('property_names_example'); // string[]

try {
    $result = $apiInstance->propertyTranslationReadPropertyTranslationsGet($entity_name, $entity_id, $locale, $property_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTranslationApi->propertyTranslationReadPropertyTranslationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_name** | **string**|  | |
| **entity_id** | **string**|  | |
| **locale** | **string**|  | [optional] |
| **property_names** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PropertyTranslationReadPropertyTranslationsGet200Response**](../Model/PropertyTranslationReadPropertyTranslationsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `propertyTranslationUpdatePropertyTranslationsPost()`

```php
propertyTranslationUpdatePropertyTranslationsPost($property_translation_update_property_translations_post_request): \kruegge82\weclapp\Model\PropertyTranslationReadPropertyTranslationsGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PropertyTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_translation_update_property_translations_post_request = new \kruegge82\weclapp\Model\PropertyTranslationUpdatePropertyTranslationsPostRequest(); // \kruegge82\weclapp\Model\PropertyTranslationUpdatePropertyTranslationsPostRequest

try {
    $result = $apiInstance->propertyTranslationUpdatePropertyTranslationsPost($property_translation_update_property_translations_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTranslationApi->propertyTranslationUpdatePropertyTranslationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **property_translation_update_property_translations_post_request** | [**\kruegge82\weclapp\Model\PropertyTranslationUpdatePropertyTranslationsPostRequest**](../Model/PropertyTranslationUpdatePropertyTranslationsPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PropertyTranslationReadPropertyTranslationsGet200Response**](../Model/PropertyTranslationReadPropertyTranslationsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
