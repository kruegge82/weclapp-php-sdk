# kruegge82\weclapp\TicketAssignmentRuleApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ticketAssignmentRuleCountGet()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleCountGet) | **GET** /ticketAssignmentRule/count | count ticketAssignmentRule |
| [**ticketAssignmentRuleGet()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleGet) | **GET** /ticketAssignmentRule | query ticketAssignmentRule |
| [**ticketAssignmentRuleIdIdDelete()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleIdIdDelete) | **DELETE** /ticketAssignmentRule/id/{id} | delete a ticketAssignmentRule |
| [**ticketAssignmentRuleIdIdGet()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleIdIdGet) | **GET** /ticketAssignmentRule/id/{id} | query a specific ticketAssignmentRule |
| [**ticketAssignmentRuleIdIdPut()**](TicketAssignmentRuleApi.md#ticketAssignmentRuleIdIdPut) | **PUT** /ticketAssignmentRule/id/{id} | update a ticketAssignmentRule |
| [**ticketAssignmentRulePost()**](TicketAssignmentRuleApi.md#ticketAssignmentRulePost) | **POST** /ticketAssignmentRule | create a ticketAssignmentRule |


## `ticketAssignmentRuleCountGet()`

```php
ticketAssignmentRuleCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count ticketAssignmentRule

count ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->ticketAssignmentRuleCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleCountGet: ', $e->getMessage(), PHP_EOL;
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

## `ticketAssignmentRuleGet()`

```php
ticketAssignmentRuleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\TicketAssignmentRuleGet200Response
```

query ticketAssignmentRule

query ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->ticketAssignmentRuleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
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
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRuleGet200Response**](../Model/TicketAssignmentRuleGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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

delete a ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

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

query a specific ticketAssignmentRule

query a specific ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketAssignmentRuleIdIdPut()`

```php
ticketAssignmentRuleIdIdPut($id, $ticket_assignment_rule, $dry_run): \kruegge82\weclapp\Model\TicketAssignmentRule
```

update a ticketAssignmentRule

update ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$ticket_assignment_rule = new \kruegge82\weclapp\Model\TicketAssignmentRule(); // \kruegge82\weclapp\Model\TicketAssignmentRule
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketAssignmentRuleIdIdPut($id, $ticket_assignment_rule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRuleIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ticket_assignment_rule** | [**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketAssignmentRulePost()`

```php
ticketAssignmentRulePost($ticket_assignment_rule, $dry_run): \kruegge82\weclapp\Model\TicketAssignmentRule
```

create a ticketAssignmentRule

create a ticketAssignmentRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketAssignmentRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_assignment_rule = new \kruegge82\weclapp\Model\TicketAssignmentRule(); // \kruegge82\weclapp\Model\TicketAssignmentRule
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketAssignmentRulePost($ticket_assignment_rule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketAssignmentRuleApi->ticketAssignmentRulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_assignment_rule** | [**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketAssignmentRule**](../Model/TicketAssignmentRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
