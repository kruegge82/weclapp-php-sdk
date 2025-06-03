# kruegge82\weclapp\SepaDirectDebitMandateApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sepaDirectDebitMandateCountGet()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateCountGet) | **GET** /sepaDirectDebitMandate/count |  |
| [**sepaDirectDebitMandateGet()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateGet) | **GET** /sepaDirectDebitMandate |  |
| [**sepaDirectDebitMandateIdIdDelete()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateIdIdDelete) | **DELETE** /sepaDirectDebitMandate/id/{id} |  |
| [**sepaDirectDebitMandateIdIdGet()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateIdIdGet) | **GET** /sepaDirectDebitMandate/id/{id} |  |
| [**sepaDirectDebitMandateIdIdPut()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateIdIdPut) | **PUT** /sepaDirectDebitMandate/id/{id} |  |
| [**sepaDirectDebitMandatePost()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandatePost) | **POST** /sepaDirectDebitMandate |  |


## `sepaDirectDebitMandateCountGet()`

```php
sepaDirectDebitMandateCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sepaDirectDebitMandateCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandateGet()`

```php
sepaDirectDebitMandateGet($page, $page_size, $sort): \kruegge82\weclapp\Model\SepaDirectDebitMandateGet200Response
```



query sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->sepaDirectDebitMandateGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandateGet200Response**](../Model/SepaDirectDebitMandateGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandateIdIdDelete()`

```php
sepaDirectDebitMandateIdIdDelete($id, $dry_run)
```



delete a sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->sepaDirectDebitMandateIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandateIdIdGet()`

```php
sepaDirectDebitMandateIdIdGet($id): \kruegge82\weclapp\Model\SepaDirectDebitMandate
```



query sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->sepaDirectDebitMandateIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandateIdIdPut()`

```php
sepaDirectDebitMandateIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\SepaDirectDebitMandate
```



update sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\SepaDirectDebitMandate(); // \kruegge82\weclapp\Model\SepaDirectDebitMandate
$dry_run = True; // bool

try {
    $result = $apiInstance->sepaDirectDebitMandateIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandatePost()`

```php
sepaDirectDebitMandatePost($body, $dry_run): \kruegge82\weclapp\Model\SepaDirectDebitMandate
```



create a sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\SepaDirectDebitMandate(); // \kruegge82\weclapp\Model\SepaDirectDebitMandate
$dry_run = True; // bool

try {
    $result = $apiInstance->sepaDirectDebitMandatePost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
