# kruegge82\weclapp\TicketAssignmentRuleApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ticketAssignmentRuleCountGet()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleCountGet) | **GET** /ticketAssignmentRule/count |  |
| [**ticketAssignmentRuleGet()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleGet) | **GET** /ticketAssignmentRule |  |
| [**ticketAssignmentRuleIdIdDelete()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleIdIdDelete) | **DELETE** /ticketAssignmentRule/id/{id} |  |
| [**ticketAssignmentRuleIdIdGet()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleIdIdGet) | **GET** /ticketAssignmentRule/id/{id} |  |
| [**ticketAssignmentRuleIdIdPut()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleIdIdPut) | **PUT** /ticketAssignmentRule/id/{id} |  |
| [**ticketAssignmentRulePost()**](TicketAssignmentRuleApi.md#ticketAssignmentRulePost) | **POST** /ticketAssignmentRule |  |


## `ticketAssignmentRuleCountGet()`

```php
ticketAssignmentRuleCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ticketAssignmentRuleCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleCountGet: ', $e->getMessage(), PHP_EOL;
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

## `ticketAssignmentRuleGet()`

```php
ticketAssignmentRuleGet($page, $page_size, $sort): \kruegge82\weclapp\Model\TicketAssignmentRuleGet200Response
```



query ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->ticketAssignmentRuleGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRuleGet200Response**](../Model/TicketAssignmentRuleGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketAssignmentRuleIdIdDelete()`

```php
ticketAssignmentRuleIdIdDelete($id, $dry_run)
```



delete a ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->ticketAssignmentRuleIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `ticketAssignmentRuleIdIdGet()`

```php
ticketAssignmentRuleIdIdGet($id): \kruegge82\weclapp\Model\TicketAssignmentRule
```



query ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->ticketAssignmentRuleIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketAssignmentRuleIdIdPut()`

```php
ticketAssignmentRuleIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\TicketAssignmentRule
```



update ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TicketAssignmentRule(); // \kruegge82\weclapp\Model\TicketAssignmentRule
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketAssignmentRuleIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketAssignmentRulePost()`

```php
ticketAssignmentRulePost($body, $dry_run): \kruegge82\weclapp\Model\TicketAssignmentRule
```



create a ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\TicketAssignmentRule(); // \kruegge82\weclapp\Model\TicketAssignmentRule
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketAssignmentRulePost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
