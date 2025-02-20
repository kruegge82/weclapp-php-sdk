# kruegge82\weclapp\TransportationOrderApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transportationOrderCountGet()**](TransportationOrderApi.md#transportationOrderCountGet) | **GET** /transportationOrder/count | count transportationOrder |
| [**transportationOrderGet()**](TransportationOrderApi.md#transportationOrderGet) | **GET** /transportationOrder | query transportationOrder |
| [**transportationOrderIdIdCreatePickPost()**](TransportationOrderApi.md#transportationOrderIdIdCreatePickPost) | **POST** /transportationOrder/id/{id}/createPick |  |
| [**transportationOrderIdIdCreatePickingListPost()**](TransportationOrderApi.md#transportationOrderIdIdCreatePickingListPost) | **POST** /transportationOrder/id/{id}/createPickingList |  |
| [**transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost()**](TransportationOrderApi.md#transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost) | **POST** /transportationOrder/id/{id}/createTransportationOrderFromUnpickedRecords |  |
| [**transportationOrderIdIdDelete()**](TransportationOrderApi.md#transportationOrderIdIdDelete) | **DELETE** /transportationOrder/id/{id} | delete a transportationOrder |
| [**transportationOrderIdIdGet()**](TransportationOrderApi.md#transportationOrderIdIdGet) | **GET** /transportationOrder/id/{id} | query a specific transportationOrder |
| [**transportationOrderIdIdInternalTransportReferencesForPickUpGet()**](TransportationOrderApi.md#transportationOrderIdIdInternalTransportReferencesForPickUpGet) | **GET** /transportationOrder/id/{id}/internalTransportReferencesForPickUp |  |
| [**transportationOrderIdIdPickPickPost()**](TransportationOrderApi.md#transportationOrderIdIdPickPickPost) | **POST** /transportationOrder/id/{id}/pickPick |  |
| [**transportationOrderIdIdPut()**](TransportationOrderApi.md#transportationOrderIdIdPut) | **PUT** /transportationOrder/id/{id} | update a transportationOrder |
| [**transportationOrderIdIdPutDownInternalTransportReferencePost()**](TransportationOrderApi.md#transportationOrderIdIdPutDownInternalTransportReferencePost) | **POST** /transportationOrder/id/{id}/putDownInternalTransportReference |  |
| [**transportationOrderPost()**](TransportationOrderApi.md#transportationOrderPost) | **POST** /transportationOrder | create a transportationOrder |


## `transportationOrderCountGet()`

```php
transportationOrderCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count transportationOrder

count transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->transportationOrderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `transportationOrderGet()`

```php
transportationOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\TransportationOrderGet200Response
```

query transportationOrder

query transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
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
    $result = $apiInstance->transportationOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\TransportationOrderGet200Response**](../Model/TransportationOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdCreatePickPost()`

```php
transportationOrderIdIdCreatePickPost($id, $transportation_order_id_id_create_pick_post_request): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



create a pick for a transportationOrder  # Endpoint for creating picks  ## Explanation of the `existingReservations` parameter The existingReservations parameter can be used to specify other reserved picks, that need to be part of the transportationOrder. These picks will not be directly linked to the transportationOrder, but considered as parts of the single pick that is created by this endpoint. Processing the transportationOrder will also update the storagePlace and internalTransportReference of the specified picks and editing these picks manually is not possible, while the transportationOrder is still in progress.  The pickId of an existingReservations element must refer to a pick with the exact same * storagePlaceId * internalTransportReferenceId * packagingUnitBaseArticleId * batchNumber * orderItemId  as the remaining parameters. The referenced pick will be split into two picks, if the given quantity does not match its own quantity.  The quantity parameter of this endpoint specifies the total quantity of the transportationOrder pick, the quantity of an existingReservations element is already included in it. The same applies for the serialNumbers parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$transportation_order_id_id_create_pick_post_request = new \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPostRequest

try {
    $result = $apiInstance->transportationOrderIdIdCreatePickPost($id, $transportation_order_id_id_create_pick_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdCreatePickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **transportation_order_id_id_create_pick_post_request** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPostRequest**](../Model/TransportationOrderIdIdCreatePickPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdCreatePickingListPost()`

```php
transportationOrderIdIdCreatePickingListPost($id, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->transportationOrderIdIdCreatePickingListPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdCreatePickingListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

**\SplFileObject**

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/pdf`, `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost()`

```php
transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost($id, $transportation_order_id_id_create_transportation_order_from_unpicked_records_post_request): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$transportation_order_id_id_create_transportation_order_from_unpicked_records_post_request = new \kruegge82\weclapp\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest

try {
    $result = $apiInstance->transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost($id, $transportation_order_id_id_create_transportation_order_from_unpicked_records_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **transportation_order_id_id_create_transportation_order_from_unpicked_records_post_request** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest**](../Model/TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdDelete()`

```php
transportationOrderIdIdDelete($id, $dry_run)
```

delete a transportationOrder

delete a transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->transportationOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `transportationOrderIdIdGet()`

```php
transportationOrderIdIdGet($id): \kruegge82\weclapp\Model\TransportationOrder
```

query a specific transportationOrder

query a specific transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->transportationOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdInternalTransportReferencesForPickUpGet()`

```php
transportationOrderIdIdInternalTransportReferencesForPickUpGet($id, $ignore_current_loading_equipment): \kruegge82\weclapp\Model\InternalTransportReferenceGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ignore_current_loading_equipment = True; // bool

try {
    $result = $apiInstance->transportationOrderIdIdInternalTransportReferencesForPickUpGet($id, $ignore_current_loading_equipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdInternalTransportReferencesForPickUpGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ignore_current_loading_equipment** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReferenceGet200Response**](../Model/InternalTransportReferenceGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdPickPickPost()`

```php
transportationOrderIdIdPickPickPost($id, $transportation_order_id_id_pick_pick_post_request): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$transportation_order_id_id_pick_pick_post_request = new \kruegge82\weclapp\Model\TransportationOrderIdIdPickPickPostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdPickPickPostRequest

try {
    $result = $apiInstance->transportationOrderIdIdPickPickPost($id, $transportation_order_id_id_pick_pick_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdPickPickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **transportation_order_id_id_pick_pick_post_request** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdPickPickPostRequest**](../Model/TransportationOrderIdIdPickPickPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdPut()`

```php
transportationOrderIdIdPut($id, $transportation_order, $dry_run): \kruegge82\weclapp\Model\TransportationOrder
```

update a transportationOrder

update transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$transportation_order = new \kruegge82\weclapp\Model\TransportationOrder(); // \kruegge82\weclapp\Model\TransportationOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->transportationOrderIdIdPut($id, $transportation_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **transportation_order** | [**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdPutDownInternalTransportReferencePost()`

```php
transportationOrderIdIdPutDownInternalTransportReferencePost($id, $transportation_order_id_id_put_down_internal_transport_reference_post_request): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$transportation_order_id_id_put_down_internal_transport_reference_post_request = new \kruegge82\weclapp\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostRequest

try {
    $result = $apiInstance->transportationOrderIdIdPutDownInternalTransportReferencePost($id, $transportation_order_id_id_put_down_internal_transport_reference_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdPutDownInternalTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **transportation_order_id_id_put_down_internal_transport_reference_post_request** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostRequest**](../Model/TransportationOrderIdIdPutDownInternalTransportReferencePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderPost()`

```php
transportationOrderPost($transportation_order, $dry_run): \kruegge82\weclapp\Model\TransportationOrder
```

create a transportationOrder

create a transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transportation_order = new \kruegge82\weclapp\Model\TransportationOrder(); // \kruegge82\weclapp\Model\TransportationOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->transportationOrderPost($transportation_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transportation_order** | [**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
