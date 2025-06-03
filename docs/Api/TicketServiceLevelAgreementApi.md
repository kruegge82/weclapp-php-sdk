# kruegge82\weclapp\TicketServiceLevelAgreementApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ticketServiceLevelAgreementCountGet()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementCountGet) | **GET** /ticketServiceLevelAgreement/count |  |
| [**ticketServiceLevelAgreementGet()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementGet) | **GET** /ticketServiceLevelAgreement |  |
| [**ticketServiceLevelAgreementIdIdDelete()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementIdIdDelete) | **DELETE** /ticketServiceLevelAgreement/id/{id} |  |
| [**ticketServiceLevelAgreementIdIdGet()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementIdIdGet) | **GET** /ticketServiceLevelAgreement/id/{id} |  |
| [**ticketServiceLevelAgreementIdIdPut()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementIdIdPut) | **PUT** /ticketServiceLevelAgreement/id/{id} |  |
| [**ticketServiceLevelAgreementPost()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementPost) | **POST** /ticketServiceLevelAgreement |  |


## `ticketServiceLevelAgreementCountGet()`

```php
ticketServiceLevelAgreementCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ticketServiceLevelAgreementCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementCountGet: ', $e->getMessage(), PHP_EOL;
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

## `ticketServiceLevelAgreementGet()`

```php
ticketServiceLevelAgreementGet($page, $page_size, $sort): \kruegge82\weclapp\Model\TicketServiceLevelAgreementGet200Response
```



query ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->ticketServiceLevelAgreementGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreementGet200Response**](../Model/TicketServiceLevelAgreementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketServiceLevelAgreementIdIdDelete()`

```php
ticketServiceLevelAgreementIdIdDelete($id, $dry_run)
```



delete a ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->ticketServiceLevelAgreementIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `ticketServiceLevelAgreementIdIdGet()`

```php
ticketServiceLevelAgreementIdIdGet($id): \kruegge82\weclapp\Model\TicketServiceLevelAgreement
```



query ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->ticketServiceLevelAgreementIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketServiceLevelAgreementIdIdPut()`

```php
ticketServiceLevelAgreementIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\TicketServiceLevelAgreement
```



update ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TicketServiceLevelAgreement(); // \kruegge82\weclapp\Model\TicketServiceLevelAgreement
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketServiceLevelAgreementIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketServiceLevelAgreementPost()`

```php
ticketServiceLevelAgreementPost($body, $dry_run): \kruegge82\weclapp\Model\TicketServiceLevelAgreement
```



create a ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\TicketServiceLevelAgreement(); // \kruegge82\weclapp\Model\TicketServiceLevelAgreement
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketServiceLevelAgreementPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
