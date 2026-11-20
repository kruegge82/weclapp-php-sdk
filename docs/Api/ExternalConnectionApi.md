# kruegge82\weclapp\ExternalConnectionApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**externalConnectionCountGet()**](ExternalConnectionApi.md#externalConnectionCountGet) | **GET** /externalConnection/count | count externalConnection |
| [**externalConnectionGet()**](ExternalConnectionApi.md#externalConnectionGet) | **GET** /externalConnection | query externalConnection |
| [**externalConnectionIdIdGet()**](ExternalConnectionApi.md#externalConnectionIdIdGet) | **GET** /externalConnection/id/{id} | query a specific externalConnection |
| [**externalConnectionIdIdStartArticleSynchronizationPost()**](ExternalConnectionApi.md#externalConnectionIdIdStartArticleSynchronizationPost) | **POST** /externalConnection/id/{id}/startArticleSynchronization |  |
| [**externalConnectionIdIdStartEbayListingSynchronizationPost()**](ExternalConnectionApi.md#externalConnectionIdIdStartEbayListingSynchronizationPost) | **POST** /externalConnection/id/{id}/startEbayListingSynchronization |  |
| [**externalConnectionIdIdStartOrderSynchronizationPost()**](ExternalConnectionApi.md#externalConnectionIdIdStartOrderSynchronizationPost) | **POST** /externalConnection/id/{id}/startOrderSynchronization |  |


## `externalConnectionCountGet()`

```php
externalConnectionCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count externalConnection

count externalConnection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ExternalConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->externalConnectionCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalConnectionApi->externalConnectionCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject33**](../Model/InlineObject33.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalConnectionGet()`

```php
externalConnectionGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InlineObject38
```

query externalConnection

query externalConnection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ExternalConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->externalConnectionGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalConnectionApi->externalConnectionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject38**](../Model/InlineObject38.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalConnectionIdIdGet()`

```php
externalConnectionIdIdGet($id): \kruegge82\weclapp\Model\ExternalConnection
```

query a specific externalConnection

query a specific externalConnection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ExternalConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->externalConnectionIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalConnectionApi->externalConnectionIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ExternalConnection**](../Model/ExternalConnection.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalConnectionIdIdStartArticleSynchronizationPost()`

```php
externalConnectionIdIdStartArticleSynchronizationPost($id, $external_connection_id_id_start_article_synchronization_post_request): \kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ExternalConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$external_connection_id_id_start_article_synchronization_post_request = new \kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPostRequest(); // \kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPostRequest

try {
    $result = $apiInstance->externalConnectionIdIdStartArticleSynchronizationPost($id, $external_connection_id_id_start_article_synchronization_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalConnectionApi->externalConnectionIdIdStartArticleSynchronizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **external_connection_id_id_start_article_synchronization_post_request** | [**\kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPostRequest**](../Model/ExternalConnectionIdIdStartArticleSynchronizationPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPost200Response**](../Model/ExternalConnectionIdIdStartArticleSynchronizationPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalConnectionIdIdStartEbayListingSynchronizationPost()`

```php
externalConnectionIdIdStartEbayListingSynchronizationPost($id, $external_connection_id_id_start_ebay_listing_synchronization_post_request): \kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ExternalConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$external_connection_id_id_start_ebay_listing_synchronization_post_request = new \kruegge82\weclapp\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostRequest(); // \kruegge82\weclapp\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostRequest

try {
    $result = $apiInstance->externalConnectionIdIdStartEbayListingSynchronizationPost($id, $external_connection_id_id_start_ebay_listing_synchronization_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalConnectionApi->externalConnectionIdIdStartEbayListingSynchronizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **external_connection_id_id_start_ebay_listing_synchronization_post_request** | [**\kruegge82\weclapp\Model\ExternalConnectionIdIdStartEbayListingSynchronizationPostRequest**](../Model/ExternalConnectionIdIdStartEbayListingSynchronizationPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPost200Response**](../Model/ExternalConnectionIdIdStartArticleSynchronizationPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalConnectionIdIdStartOrderSynchronizationPost()`

```php
externalConnectionIdIdStartOrderSynchronizationPost($id, $external_connection_id_id_start_order_synchronization_post_request): \kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ExternalConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$external_connection_id_id_start_order_synchronization_post_request = new \kruegge82\weclapp\Model\ExternalConnectionIdIdStartOrderSynchronizationPostRequest(); // \kruegge82\weclapp\Model\ExternalConnectionIdIdStartOrderSynchronizationPostRequest

try {
    $result = $apiInstance->externalConnectionIdIdStartOrderSynchronizationPost($id, $external_connection_id_id_start_order_synchronization_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalConnectionApi->externalConnectionIdIdStartOrderSynchronizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **external_connection_id_id_start_order_synchronization_post_request** | [**\kruegge82\weclapp\Model\ExternalConnectionIdIdStartOrderSynchronizationPostRequest**](../Model/ExternalConnectionIdIdStartOrderSynchronizationPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\ExternalConnectionIdIdStartArticleSynchronizationPost200Response**](../Model/ExternalConnectionIdIdStartArticleSynchronizationPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
