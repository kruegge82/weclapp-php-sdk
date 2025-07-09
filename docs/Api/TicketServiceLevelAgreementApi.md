# kruegge82\weclapp\TicketServiceLevelAgreementApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ticketServiceLevelAgreementCountGet()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementCountGet) | **GET** /ticketServiceLevelAgreement/count | count ticketServiceLevelAgreement |
| [**ticketServiceLevelAgreementGet()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementGet) | **GET** /ticketServiceLevelAgreement | query ticketServiceLevelAgreement |
| [**ticketServiceLevelAgreementIdIdDelete()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementIdIdDelete) | **DELETE** /ticketServiceLevelAgreement/id/{id} | delete a ticketServiceLevelAgreement |
| [**ticketServiceLevelAgreementIdIdGet()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementIdIdGet) | **GET** /ticketServiceLevelAgreement/id/{id} | query a specific ticketServiceLevelAgreement |
| [**ticketServiceLevelAgreementIdIdPut()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementIdIdPut) | **PUT** /ticketServiceLevelAgreement/id/{id} | update a ticketServiceLevelAgreement |
| [**ticketServiceLevelAgreementPost()**](TicketServiceLevelAgreementApi.md#ticketServiceLevelAgreementPost) | **POST** /ticketServiceLevelAgreement | create a ticketServiceLevelAgreement |


## `ticketServiceLevelAgreementCountGet()`

```php
ticketServiceLevelAgreementCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count ticketServiceLevelAgreement

count ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->ticketServiceLevelAgreementCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementCountGet: ', $e->getMessage(), PHP_EOL;
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

## `ticketServiceLevelAgreementGet()`

```php
ticketServiceLevelAgreementGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\TicketServiceLevelAgreementGet200Response
```

query ticketServiceLevelAgreement

query ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->ticketServiceLevelAgreementGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
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
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreementGet200Response**](../Model/TicketServiceLevelAgreementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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

delete a ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

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

query a specific ticketServiceLevelAgreement

query a specific ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketServiceLevelAgreementIdIdPut()`

```php
ticketServiceLevelAgreementIdIdPut($id, $ticket_service_level_agreement, $dry_run): \kruegge82\weclapp\Model\TicketServiceLevelAgreement
```

update a ticketServiceLevelAgreement

update ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$ticket_service_level_agreement = new \kruegge82\weclapp\Model\TicketServiceLevelAgreement(); // \kruegge82\weclapp\Model\TicketServiceLevelAgreement
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketServiceLevelAgreementIdIdPut($id, $ticket_service_level_agreement, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ticket_service_level_agreement** | [**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketServiceLevelAgreementPost()`

```php
ticketServiceLevelAgreementPost($ticket_service_level_agreement, $dry_run): \kruegge82\weclapp\Model\TicketServiceLevelAgreement
```

create a ticketServiceLevelAgreement

create a ticketServiceLevelAgreement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TicketServiceLevelAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_service_level_agreement = new \kruegge82\weclapp\Model\TicketServiceLevelAgreement(); // \kruegge82\weclapp\Model\TicketServiceLevelAgreement
$dry_run = True; // bool

try {
    $result = $apiInstance->ticketServiceLevelAgreementPost($ticket_service_level_agreement, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketServiceLevelAgreementApi->ticketServiceLevelAgreementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ticket_service_level_agreement** | [**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TicketServiceLevelAgreement**](../Model/TicketServiceLevelAgreement.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
