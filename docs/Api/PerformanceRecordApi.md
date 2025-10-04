# kruegge82\weclapp\PerformanceRecordApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**performanceRecordCountGet()**](PerformanceRecordApi.md#performanceRecordCountGet) | **GET** /performanceRecord/count | count performanceRecord |
| [**performanceRecordGet()**](PerformanceRecordApi.md#performanceRecordGet) | **GET** /performanceRecord | query performanceRecord |
| [**performanceRecordIdIdAddToPerformanceRecordPost()**](PerformanceRecordApi.md#performanceRecordIdIdAddToPerformanceRecordPost) | **POST** /performanceRecord/id/{id}/addToPerformanceRecord |  |
| [**performanceRecordIdIdCreateInvoicePost()**](PerformanceRecordApi.md#performanceRecordIdIdCreateInvoicePost) | **POST** /performanceRecord/id/{id}/createInvoice |  |
| [**performanceRecordIdIdDelete()**](PerformanceRecordApi.md#performanceRecordIdIdDelete) | **DELETE** /performanceRecord/id/{id} | delete a performanceRecord |
| [**performanceRecordIdIdDownloadLatestPerformanceRecordPdfGet()**](PerformanceRecordApi.md#performanceRecordIdIdDownloadLatestPerformanceRecordPdfGet) | **GET** /performanceRecord/id/{id}/downloadLatestPerformanceRecordPdf |  |
| [**performanceRecordIdIdDownloadSignatureGet()**](PerformanceRecordApi.md#performanceRecordIdIdDownloadSignatureGet) | **GET** /performanceRecord/id/{id}/downloadSignature |  |
| [**performanceRecordIdIdGet()**](PerformanceRecordApi.md#performanceRecordIdIdGet) | **GET** /performanceRecord/id/{id} | query a specific performanceRecord |
| [**performanceRecordIdIdPut()**](PerformanceRecordApi.md#performanceRecordIdIdPut) | **PUT** /performanceRecord/id/{id} | update a performanceRecord |
| [**performanceRecordIdIdRecalculateQuantitiesPost()**](PerformanceRecordApi.md#performanceRecordIdIdRecalculateQuantitiesPost) | **POST** /performanceRecord/id/{id}/recalculateQuantities |  |
| [**performanceRecordIdIdRemoveSignaturePost()**](PerformanceRecordApi.md#performanceRecordIdIdRemoveSignaturePost) | **POST** /performanceRecord/id/{id}/removeSignature |  |
| [**performanceRecordIdIdUploadSignaturePost()**](PerformanceRecordApi.md#performanceRecordIdIdUploadSignaturePost) | **POST** /performanceRecord/id/{id}/uploadSignature |  |
| [**performanceRecordPost()**](PerformanceRecordApi.md#performanceRecordPost) | **POST** /performanceRecord | create a performanceRecord |


## `performanceRecordCountGet()`

```php
performanceRecordCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count performanceRecord

count performanceRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->performanceRecordCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordCountGet: ', $e->getMessage(), PHP_EOL;
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

## `performanceRecordGet()`

```php
performanceRecordGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties): \kruegge82\weclapp\Model\PerformanceRecordGet200Response
```

query performanceRecord

query performanceRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
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
$additional_properties = 'additional_properties_example'; // string

try {
    $result = $apiInstance->performanceRecordGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordGet: ', $e->getMessage(), PHP_EOL;
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
| **additional_properties** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PerformanceRecordGet200Response**](../Model/PerformanceRecordGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdAddToPerformanceRecordPost()`

```php
performanceRecordIdIdAddToPerformanceRecordPost($id, $performance_record_id_id_add_to_performance_record_post_request): \kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$performance_record_id_id_add_to_performance_record_post_request = new \kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPostRequest(); // \kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPostRequest

try {
    $result = $apiInstance->performanceRecordIdIdAddToPerformanceRecordPost($id, $performance_record_id_id_add_to_performance_record_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdAddToPerformanceRecordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **performance_record_id_id_add_to_performance_record_post_request** | [**\kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPostRequest**](../Model/PerformanceRecordIdIdAddToPerformanceRecordPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPost200Response**](../Model/PerformanceRecordIdIdAddToPerformanceRecordPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdCreateInvoicePost()`

```php
performanceRecordIdIdCreateInvoicePost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->performanceRecordIdIdCreateInvoicePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdCreateInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response**](../Model/IncomingGoodsIdIdCreateCreditNotePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdDelete()`

```php
performanceRecordIdIdDelete($id, $dry_run)
```

delete a performanceRecord

delete a performanceRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->performanceRecordIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `performanceRecordIdIdDownloadLatestPerformanceRecordPdfGet()`

```php
performanceRecordIdIdDownloadLatestPerformanceRecordPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->performanceRecordIdIdDownloadLatestPerformanceRecordPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdDownloadLatestPerformanceRecordPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/pdf`, `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdDownloadSignatureGet()`

```php
performanceRecordIdIdDownloadSignatureGet($id, $customer_signature, $scale_width, $scale_height): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$customer_signature = True; // bool
$scale_width = 56; // int
$scale_height = 56; // int

try {
    $result = $apiInstance->performanceRecordIdIdDownloadSignatureGet($id, $customer_signature, $scale_width, $scale_height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdDownloadSignatureGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **customer_signature** | **bool**|  | |
| **scale_width** | **int**|  | [optional] |
| **scale_height** | **int**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/pdf`, `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdGet()`

```php
performanceRecordIdIdGet($id): \kruegge82\weclapp\Model\PerformanceRecord
```

query a specific performanceRecord

query a specific performanceRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->performanceRecordIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PerformanceRecord**](../Model/PerformanceRecord.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdPut()`

```php
performanceRecordIdIdPut($id, $performance_record, $dry_run): \kruegge82\weclapp\Model\PerformanceRecord
```

update a performanceRecord

update performanceRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$performance_record = new \kruegge82\weclapp\Model\PerformanceRecord(); // \kruegge82\weclapp\Model\PerformanceRecord
$dry_run = True; // bool

try {
    $result = $apiInstance->performanceRecordIdIdPut($id, $performance_record, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **performance_record** | [**\kruegge82\weclapp\Model\PerformanceRecord**](../Model/PerformanceRecord.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PerformanceRecord**](../Model/PerformanceRecord.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdRecalculateQuantitiesPost()`

```php
performanceRecordIdIdRecalculateQuantitiesPost($id, $body): \kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->performanceRecordIdIdRecalculateQuantitiesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdRecalculateQuantitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\PerformanceRecordIdIdAddToPerformanceRecordPost200Response**](../Model/PerformanceRecordIdIdAddToPerformanceRecordPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdRemoveSignaturePost()`

```php
performanceRecordIdIdRemoveSignaturePost($id, $performance_record_id_id_remove_signature_post_request): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$performance_record_id_id_remove_signature_post_request = new \kruegge82\weclapp\Model\PerformanceRecordIdIdRemoveSignaturePostRequest(); // \kruegge82\weclapp\Model\PerformanceRecordIdIdRemoveSignaturePostRequest

try {
    $result = $apiInstance->performanceRecordIdIdRemoveSignaturePost($id, $performance_record_id_id_remove_signature_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdRemoveSignaturePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **performance_record_id_id_remove_signature_post_request** | [**\kruegge82\weclapp\Model\PerformanceRecordIdIdRemoveSignaturePostRequest**](../Model/PerformanceRecordIdIdRemoveSignaturePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordIdIdUploadSignaturePost()`

```php
performanceRecordIdIdUploadSignaturePost($id, $customer_signature, $body): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$customer_signature = True; // bool
$body = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->performanceRecordIdIdUploadSignaturePost($id, $customer_signature, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordIdIdUploadSignaturePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **customer_signature** | **bool**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `performanceRecordPost()`

```php
performanceRecordPost($performance_record, $dry_run): \kruegge82\weclapp\Model\PerformanceRecord
```

create a performanceRecord

create a performanceRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PerformanceRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$performance_record = new \kruegge82\weclapp\Model\PerformanceRecord(); // \kruegge82\weclapp\Model\PerformanceRecord
$dry_run = True; // bool

try {
    $result = $apiInstance->performanceRecordPost($performance_record, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PerformanceRecordApi->performanceRecordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **performance_record** | [**\kruegge82\weclapp\Model\PerformanceRecord**](../Model/PerformanceRecord.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PerformanceRecord**](../Model/PerformanceRecord.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
