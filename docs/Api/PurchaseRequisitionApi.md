# kruegge82\weclapp\PurchaseRequisitionApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseRequisitionCountGet()**](PurchaseRequisitionApi.md#purchaseRequisitionCountGet) | **GET** /purchaseRequisition/count | count purchaseRequisition |
| [**purchaseRequisitionDeleteAllRequisitionsPost()**](PurchaseRequisitionApi.md#purchaseRequisitionDeleteAllRequisitionsPost) | **POST** /purchaseRequisition/deleteAllRequisitions |  |
| [**purchaseRequisitionGet()**](PurchaseRequisitionApi.md#purchaseRequisitionGet) | **GET** /purchaseRequisition | query purchaseRequisition |
| [**purchaseRequisitionIdIdGet()**](PurchaseRequisitionApi.md#purchaseRequisitionIdIdGet) | **GET** /purchaseRequisition/id/{id} | query a specific purchaseRequisition |
| [**purchaseRequisitionIdIdPut()**](PurchaseRequisitionApi.md#purchaseRequisitionIdIdPut) | **PUT** /purchaseRequisition/id/{id} | update a purchaseRequisition |
| [**purchaseRequisitionStartMaterialPlanningRunPost()**](PurchaseRequisitionApi.md#purchaseRequisitionStartMaterialPlanningRunPost) | **POST** /purchaseRequisition/startMaterialPlanningRun |  |


## `purchaseRequisitionCountGet()`

```php
purchaseRequisitionCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count purchaseRequisition

count purchaseRequisition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseRequisitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->purchaseRequisitionCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseRequisitionApi->purchaseRequisitionCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseRequisitionDeleteAllRequisitionsPost()`

```php
purchaseRequisitionDeleteAllRequisitionsPost($body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseRequisitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->purchaseRequisitionDeleteAllRequisitionsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseRequisitionApi->purchaseRequisitionDeleteAllRequisitionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

void (empty response body)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseRequisitionGet()`

```php
purchaseRequisitionGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PurchaseRequisitionGet200Response
```

query purchaseRequisition

query purchaseRequisition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseRequisitionApi(
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
    $result = $apiInstance->purchaseRequisitionGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseRequisitionApi->purchaseRequisitionGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\PurchaseRequisitionGet200Response**](../Model/PurchaseRequisitionGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseRequisitionIdIdGet()`

```php
purchaseRequisitionIdIdGet($id): \kruegge82\weclapp\Model\PurchaseRequisition
```

query a specific purchaseRequisition

query a specific purchaseRequisition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseRequisitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseRequisitionIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseRequisitionApi->purchaseRequisitionIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseRequisition**](../Model/PurchaseRequisition.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseRequisitionIdIdPut()`

```php
purchaseRequisitionIdIdPut($id, $purchase_requisition, $dry_run): \kruegge82\weclapp\Model\PurchaseRequisition
```

update a purchaseRequisition

update purchaseRequisition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseRequisitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_requisition = new \kruegge82\weclapp\Model\PurchaseRequisition(); // \kruegge82\weclapp\Model\PurchaseRequisition
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseRequisitionIdIdPut($id, $purchase_requisition, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseRequisitionApi->purchaseRequisitionIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_requisition** | [**\kruegge82\weclapp\Model\PurchaseRequisition**](../Model/PurchaseRequisition.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseRequisition**](../Model/PurchaseRequisition.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseRequisitionStartMaterialPlanningRunPost()`

```php
purchaseRequisitionStartMaterialPlanningRunPost($purchase_requisition_start_material_planning_run_post_request): \kruegge82\weclapp\Model\JobAbortGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseRequisitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_requisition_start_material_planning_run_post_request = new \kruegge82\weclapp\Model\PurchaseRequisitionStartMaterialPlanningRunPostRequest(); // \kruegge82\weclapp\Model\PurchaseRequisitionStartMaterialPlanningRunPostRequest

try {
    $result = $apiInstance->purchaseRequisitionStartMaterialPlanningRunPost($purchase_requisition_start_material_planning_run_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseRequisitionApi->purchaseRequisitionStartMaterialPlanningRunPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_requisition_start_material_planning_run_post_request** | [**\kruegge82\weclapp\Model\PurchaseRequisitionStartMaterialPlanningRunPostRequest**](../Model/PurchaseRequisitionStartMaterialPlanningRunPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\JobAbortGet200Response**](../Model/JobAbortGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
