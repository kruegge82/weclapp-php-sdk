# kruegge82\weclapp\PurchaseOpenItemApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOpenItemCountGet()**](PurchaseOpenItemApi.md#purchaseOpenItemCountGet) | **GET** /purchaseOpenItem/count | count purchaseOpenItem |
| [**purchaseOpenItemGet()**](PurchaseOpenItemApi.md#purchaseOpenItemGet) | **GET** /purchaseOpenItem | query purchaseOpenItem |
| [**purchaseOpenItemIdIdCreatePaymentApplicationPost()**](PurchaseOpenItemApi.md#purchaseOpenItemIdIdCreatePaymentApplicationPost) | **POST** /purchaseOpenItem/id/{id}/createPaymentApplication |  |
| [**purchaseOpenItemIdIdGet()**](PurchaseOpenItemApi.md#purchaseOpenItemIdIdGet) | **GET** /purchaseOpenItem/id/{id} | query a specific purchaseOpenItem |
| [**purchaseOpenItemIdIdUpdatePaymentStatePost()**](PurchaseOpenItemApi.md#purchaseOpenItemIdIdUpdatePaymentStatePost) | **POST** /purchaseOpenItem/id/{id}/updatePaymentState |  |


## `purchaseOpenItemCountGet()`

```php
purchaseOpenItemCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count purchaseOpenItem

count purchaseOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->purchaseOpenItemCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOpenItemGet()`

```php
purchaseOpenItemGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PurchaseOpenItemGet200Response
```

query purchaseOpenItem

query purchaseOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
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
    $result = $apiInstance->purchaseOpenItemGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\PurchaseOpenItemGet200Response**](../Model/PurchaseOpenItemGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOpenItemIdIdCreatePaymentApplicationPost()`

```php
purchaseOpenItemIdIdCreatePaymentApplicationPost($id, $purchase_open_item_id_id_create_payment_application_post_request): \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_open_item_id_id_create_payment_application_post_request = new \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest(); // \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest

try {
    $result = $apiInstance->purchaseOpenItemIdIdCreatePaymentApplicationPost($id, $purchase_open_item_id_id_create_payment_application_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemIdIdCreatePaymentApplicationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_open_item_id_id_create_payment_application_post_request** | [**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOpenItemIdIdGet()`

```php
purchaseOpenItemIdIdGet($id): \kruegge82\weclapp\Model\PurchaseOpenItem
```

query a specific purchaseOpenItem

query a specific purchaseOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseOpenItemIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItem**](../Model/PurchaseOpenItem.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOpenItemIdIdUpdatePaymentStatePost()`

```php
purchaseOpenItemIdIdUpdatePaymentStatePost($id, $purchase_open_item_id_id_update_payment_state_post_request): \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_open_item_id_id_update_payment_state_post_request = new \kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest(); // \kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest

try {
    $result = $apiInstance->purchaseOpenItemIdIdUpdatePaymentStatePost($id, $purchase_open_item_id_id_update_payment_state_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemIdIdUpdatePaymentStatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_open_item_id_id_update_payment_state_post_request** | [**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest**](../Model/PurchaseOpenItemIdIdUpdatePaymentStatePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
