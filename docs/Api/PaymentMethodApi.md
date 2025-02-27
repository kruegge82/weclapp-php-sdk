# kruegge82\weclapp\PaymentMethodApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**paymentMethodCountGet()**](PaymentMethodApi.md#paymentMethodCountGet) | **GET** /paymentMethod/count | count paymentMethod |
| [**paymentMethodGet()**](PaymentMethodApi.md#paymentMethodGet) | **GET** /paymentMethod | query paymentMethod |
| [**paymentMethodIdIdDelete()**](PaymentMethodApi.md#paymentMethodIdIdDelete) | **DELETE** /paymentMethod/id/{id} | delete a paymentMethod |
| [**paymentMethodIdIdGet()**](PaymentMethodApi.md#paymentMethodIdIdGet) | **GET** /paymentMethod/id/{id} | query a specific paymentMethod |
| [**paymentMethodIdIdPut()**](PaymentMethodApi.md#paymentMethodIdIdPut) | **PUT** /paymentMethod/id/{id} | update a paymentMethod |
| [**paymentMethodPost()**](PaymentMethodApi.md#paymentMethodPost) | **POST** /paymentMethod | create a paymentMethod |


## `paymentMethodCountGet()`

```php
paymentMethodCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count paymentMethod

count paymentMethod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->paymentMethodCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->paymentMethodCountGet: ', $e->getMessage(), PHP_EOL;
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

## `paymentMethodGet()`

```php
paymentMethodGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PaymentMethodGet200Response
```

query paymentMethod

query paymentMethod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PaymentMethodApi(
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
    $result = $apiInstance->paymentMethodGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->paymentMethodGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\PaymentMethodGet200Response**](../Model/PaymentMethodGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentMethodIdIdDelete()`

```php
paymentMethodIdIdDelete($id, $dry_run)
```

delete a paymentMethod

delete a paymentMethod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->paymentMethodIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->paymentMethodIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `paymentMethodIdIdGet()`

```php
paymentMethodIdIdGet($id): \kruegge82\weclapp\Model\PaymentMethod
```

query a specific paymentMethod

query a specific paymentMethod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->paymentMethodIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->paymentMethodIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentMethodIdIdPut()`

```php
paymentMethodIdIdPut($id, $payment_method, $dry_run): \kruegge82\weclapp\Model\PaymentMethod
```

update a paymentMethod

update paymentMethod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$payment_method = new \kruegge82\weclapp\Model\PaymentMethod(); // \kruegge82\weclapp\Model\PaymentMethod
$dry_run = True; // bool

try {
    $result = $apiInstance->paymentMethodIdIdPut($id, $payment_method, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->paymentMethodIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **payment_method** | [**\kruegge82\weclapp\Model\PaymentMethod**](../Model/PaymentMethod.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentMethodPost()`

```php
paymentMethodPost($payment_method, $dry_run): \kruegge82\weclapp\Model\PaymentMethod
```

create a paymentMethod

create a paymentMethod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PaymentMethodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_method = new \kruegge82\weclapp\Model\PaymentMethod(); // \kruegge82\weclapp\Model\PaymentMethod
$dry_run = True; // bool

try {
    $result = $apiInstance->paymentMethodPost($payment_method, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodApi->paymentMethodPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_method** | [**\kruegge82\weclapp\Model\PaymentMethod**](../Model/PaymentMethod.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
