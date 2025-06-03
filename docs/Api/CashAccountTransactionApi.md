# kruegge82\weclapp\CashAccountTransactionApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cashAccountTransactionCountGet()**](CashAccountTransactionApi.md#cashAccountTransactionCountGet) | **GET** /cashAccountTransaction/count | count cashAccountTransaction |
| [**cashAccountTransactionGet()**](CashAccountTransactionApi.md#cashAccountTransactionGet) | **GET** /cashAccountTransaction | query cashAccountTransaction |
| [**cashAccountTransactionIdIdDelete()**](CashAccountTransactionApi.md#cashAccountTransactionIdIdDelete) | **DELETE** /cashAccountTransaction/id/{id} | delete a cashAccountTransaction |
| [**cashAccountTransactionIdIdGet()**](CashAccountTransactionApi.md#cashAccountTransactionIdIdGet) | **GET** /cashAccountTransaction/id/{id} | query a specific cashAccountTransaction |
| [**cashAccountTransactionPost()**](CashAccountTransactionApi.md#cashAccountTransactionPost) | **POST** /cashAccountTransaction | create a cashAccountTransaction |


## `cashAccountTransactionCountGet()`

```php
cashAccountTransactionCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count cashAccountTransaction

count cashAccountTransaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CashAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->cashAccountTransactionCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashAccountTransactionApi->cashAccountTransactionCountGet: ', $e->getMessage(), PHP_EOL;
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

## `cashAccountTransactionGet()`

```php
cashAccountTransactionGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\CashAccountTransactionGet200Response
```

query cashAccountTransaction

query cashAccountTransaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CashAccountTransactionApi(
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
    $result = $apiInstance->cashAccountTransactionGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashAccountTransactionApi->cashAccountTransactionGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\CashAccountTransactionGet200Response**](../Model/CashAccountTransactionGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cashAccountTransactionIdIdDelete()`

```php
cashAccountTransactionIdIdDelete($id, $dry_run)
```

delete a cashAccountTransaction

delete a cashAccountTransaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CashAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->cashAccountTransactionIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling CashAccountTransactionApi->cashAccountTransactionIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `cashAccountTransactionIdIdGet()`

```php
cashAccountTransactionIdIdGet($id): \kruegge82\weclapp\Model\CashAccountTransaction
```

query a specific cashAccountTransaction

query a specific cashAccountTransaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CashAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cashAccountTransactionIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashAccountTransactionApi->cashAccountTransactionIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\CashAccountTransaction**](../Model/CashAccountTransaction.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cashAccountTransactionPost()`

```php
cashAccountTransactionPost($cash_account_transaction, $dry_run): \kruegge82\weclapp\Model\CashAccountTransaction
```

create a cashAccountTransaction

create a cashAccountTransaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CashAccountTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cash_account_transaction = new \kruegge82\weclapp\Model\CashAccountTransaction(); // \kruegge82\weclapp\Model\CashAccountTransaction
$dry_run = True; // bool

try {
    $result = $apiInstance->cashAccountTransactionPost($cash_account_transaction, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashAccountTransactionApi->cashAccountTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cash_account_transaction** | [**\kruegge82\weclapp\Model\CashAccountTransaction**](../Model/CashAccountTransaction.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CashAccountTransaction**](../Model/CashAccountTransaction.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
