# kruegge82\weclapp\RecordEmailingRuleApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recordEmailingRuleCountGet()**](RecordEmailingRuleApi.md#recordEmailingRuleCountGet) | **GET** /recordEmailingRule/count | count recordEmailingRule |
| [**recordEmailingRuleGet()**](RecordEmailingRuleApi.md#recordEmailingRuleGet) | **GET** /recordEmailingRule | query recordEmailingRule |
| [**recordEmailingRuleIdIdDelete()**](RecordEmailingRuleApi.md#recordEmailingRuleIdIdDelete) | **DELETE** /recordEmailingRule/id/{id} | delete a recordEmailingRule |
| [**recordEmailingRuleIdIdGet()**](RecordEmailingRuleApi.md#recordEmailingRuleIdIdGet) | **GET** /recordEmailingRule/id/{id} | query a specific recordEmailingRule |
| [**recordEmailingRuleIdIdPut()**](RecordEmailingRuleApi.md#recordEmailingRuleIdIdPut) | **PUT** /recordEmailingRule/id/{id} | update a recordEmailingRule |
| [**recordEmailingRulePost()**](RecordEmailingRuleApi.md#recordEmailingRulePost) | **POST** /recordEmailingRule | create a recordEmailingRule |


## `recordEmailingRuleCountGet()`

```php
recordEmailingRuleCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count recordEmailingRule

count recordEmailingRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RecordEmailingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->recordEmailingRuleCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordEmailingRuleApi->recordEmailingRuleCountGet: ', $e->getMessage(), PHP_EOL;
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

## `recordEmailingRuleGet()`

```php
recordEmailingRuleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\RecordEmailingRuleGet200Response
```

query recordEmailingRule

query recordEmailingRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RecordEmailingRuleApi(
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
    $result = $apiInstance->recordEmailingRuleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordEmailingRuleApi->recordEmailingRuleGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\RecordEmailingRuleGet200Response**](../Model/RecordEmailingRuleGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordEmailingRuleIdIdDelete()`

```php
recordEmailingRuleIdIdDelete($id, $dry_run)
```

delete a recordEmailingRule

delete a recordEmailingRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RecordEmailingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->recordEmailingRuleIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling RecordEmailingRuleApi->recordEmailingRuleIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `recordEmailingRuleIdIdGet()`

```php
recordEmailingRuleIdIdGet($id): \kruegge82\weclapp\Model\RecordEmailingRule
```

query a specific recordEmailingRule

query a specific recordEmailingRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RecordEmailingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->recordEmailingRuleIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordEmailingRuleApi->recordEmailingRuleIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\RecordEmailingRule**](../Model/RecordEmailingRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordEmailingRuleIdIdPut()`

```php
recordEmailingRuleIdIdPut($id, $record_emailing_rule, $dry_run): \kruegge82\weclapp\Model\RecordEmailingRule
```

update a recordEmailingRule

update recordEmailingRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RecordEmailingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$record_emailing_rule = new \kruegge82\weclapp\Model\RecordEmailingRule(); // \kruegge82\weclapp\Model\RecordEmailingRule
$dry_run = True; // bool

try {
    $result = $apiInstance->recordEmailingRuleIdIdPut($id, $record_emailing_rule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordEmailingRuleApi->recordEmailingRuleIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **record_emailing_rule** | [**\kruegge82\weclapp\Model\RecordEmailingRule**](../Model/RecordEmailingRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\RecordEmailingRule**](../Model/RecordEmailingRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recordEmailingRulePost()`

```php
recordEmailingRulePost($record_emailing_rule, $dry_run): \kruegge82\weclapp\Model\RecordEmailingRule
```

create a recordEmailingRule

create a recordEmailingRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RecordEmailingRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_emailing_rule = new \kruegge82\weclapp\Model\RecordEmailingRule(); // \kruegge82\weclapp\Model\RecordEmailingRule
$dry_run = True; // bool

try {
    $result = $apiInstance->recordEmailingRulePost($record_emailing_rule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordEmailingRuleApi->recordEmailingRulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_emailing_rule** | [**\kruegge82\weclapp\Model\RecordEmailingRule**](../Model/RecordEmailingRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\RecordEmailingRule**](../Model/RecordEmailingRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
