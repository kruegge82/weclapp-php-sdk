# kruegge82\weclapp\CustomAttributeDefinitionApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customAttributeDefinitionCountGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionCountGet) | **GET** /customAttributeDefinition/count | count customAttributeDefinition |
| [**customAttributeDefinitionGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionGet) | **GET** /customAttributeDefinition | query customAttributeDefinition |
| [**customAttributeDefinitionIdIdDelete()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionIdIdDelete) | **DELETE** /customAttributeDefinition/id/{id} | delete a customAttributeDefinition |
| [**customAttributeDefinitionIdIdGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionIdIdGet) | **GET** /customAttributeDefinition/id/{id} | query a specific customAttributeDefinition |
| [**customAttributeDefinitionIdIdPut()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionIdIdPut) | **PUT** /customAttributeDefinition/id/{id} | update a customAttributeDefinition |
| [**customAttributeDefinitionPost()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionPost) | **POST** /customAttributeDefinition | create a customAttributeDefinition |
| [**customAttributeDefinitionReadOrderGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionReadOrderGet) | **GET** /customAttributeDefinition/readOrder |  |
| [**customAttributeDefinitionUpdateOrderPost()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionUpdateOrderPost) | **POST** /customAttributeDefinition/updateOrder |  |


## `customAttributeDefinitionCountGet()`

```php
customAttributeDefinitionCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count customAttributeDefinition

count customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->customAttributeDefinitionCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionGet()`

```php
customAttributeDefinitionGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\CustomAttributeDefinitionGet200Response
```

query customAttributeDefinition

query customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->customAttributeDefinitionGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinitionGet200Response**](../Model/CustomAttributeDefinitionGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionIdIdDelete()`

```php
customAttributeDefinitionIdIdDelete($id, $dry_run)
```

delete a customAttributeDefinition

delete a customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->customAttributeDefinitionIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionIdIdGet()`

```php
customAttributeDefinitionIdIdGet($id): \kruegge82\weclapp\Model\CustomAttributeDefinition
```

query a specific customAttributeDefinition

query a specific customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->customAttributeDefinitionIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionIdIdPut()`

```php
customAttributeDefinitionIdIdPut($id, $custom_attribute_definition, $dry_run): \kruegge82\weclapp\Model\CustomAttributeDefinition
```

update a customAttributeDefinition

update customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$custom_attribute_definition = new \kruegge82\weclapp\Model\CustomAttributeDefinition(); // \kruegge82\weclapp\Model\CustomAttributeDefinition
$dry_run = True; // bool

try {
    $result = $apiInstance->customAttributeDefinitionIdIdPut($id, $custom_attribute_definition, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **custom_attribute_definition** | [**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionPost()`

```php
customAttributeDefinitionPost($custom_attribute_definition, $dry_run): \kruegge82\weclapp\Model\CustomAttributeDefinition
```

create a customAttributeDefinition

create a customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_attribute_definition = new \kruegge82\weclapp\Model\CustomAttributeDefinition(); // \kruegge82\weclapp\Model\CustomAttributeDefinition
$dry_run = True; // bool

try {
    $result = $apiInstance->customAttributeDefinitionPost($custom_attribute_definition, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_attribute_definition** | [**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionReadOrderGet()`

```php
customAttributeDefinitionReadOrderGet($entity_type): \kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\CustomAttributeExtendableEntity(); // \kruegge82\weclapp\Model\CustomAttributeExtendableEntity

try {
    $result = $apiInstance->customAttributeDefinitionReadOrderGet($entity_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionReadOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | [**\kruegge82\weclapp\Model\CustomAttributeExtendableEntity**](../Model/.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response**](../Model/CustomAttributeDefinitionReadOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionUpdateOrderPost()`

```php
customAttributeDefinitionUpdateOrderPost($custom_attribute_definition_update_order_post_request): \kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_attribute_definition_update_order_post_request = new \kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequest(); // \kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequest

try {
    $result = $apiInstance->customAttributeDefinitionUpdateOrderPost($custom_attribute_definition_update_order_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionUpdateOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_attribute_definition_update_order_post_request** | [**\kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequest**](../Model/CustomAttributeDefinitionUpdateOrderPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response**](../Model/CustomAttributeDefinitionReadOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
