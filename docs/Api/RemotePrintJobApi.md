# kruegge82\weclapp\RemotePrintJobApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**remotePrintJobCountGet()**](RemotePrintJobApi.md#remotePrintJobCountGet) | **GET** /remotePrintJob/count | count remotePrintJob |
| [**remotePrintJobCreatePrintJobWithDocumentPost()**](RemotePrintJobApi.md#remotePrintJobCreatePrintJobWithDocumentPost) | **POST** /remotePrintJob/createPrintJobWithDocument |  |
| [**remotePrintJobGet()**](RemotePrintJobApi.md#remotePrintJobGet) | **GET** /remotePrintJob | query remotePrintJob |
| [**remotePrintJobIdIdDelete()**](RemotePrintJobApi.md#remotePrintJobIdIdDelete) | **DELETE** /remotePrintJob/id/{id} | delete a remotePrintJob |
| [**remotePrintJobIdIdGet()**](RemotePrintJobApi.md#remotePrintJobIdIdGet) | **GET** /remotePrintJob/id/{id} | query a specific remotePrintJob |
| [**remotePrintJobIdIdPut()**](RemotePrintJobApi.md#remotePrintJobIdIdPut) | **PUT** /remotePrintJob/id/{id} | update a remotePrintJob |
| [**remotePrintJobPost()**](RemotePrintJobApi.md#remotePrintJobPost) | **POST** /remotePrintJob | create a remotePrintJob |


## `remotePrintJobCountGet()`

```php
remotePrintJobCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count remotePrintJob

count remotePrintJob

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->remotePrintJobCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobCountGet: ', $e->getMessage(), PHP_EOL;
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

## `remotePrintJobCreatePrintJobWithDocumentPost()`

```php
remotePrintJobCreatePrintJobWithDocumentPost($weclapp_os_id, $printer_name, $quantity, $document_name, $body, $document_description): \kruegge82\weclapp\Model\RemotePrintJobCreatePrintJobWithDocumentPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$weclapp_os_id = 'weclapp_os_id_example'; // string
$printer_name = 'printer_name_example'; // string
$quantity = 56; // int
$document_name = 'document_name_example'; // string
$body = '/path/to/file.txt'; // \SplFileObject
$document_description = 'document_description_example'; // string

try {
    $result = $apiInstance->remotePrintJobCreatePrintJobWithDocumentPost($weclapp_os_id, $printer_name, $quantity, $document_name, $body, $document_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobCreatePrintJobWithDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **weclapp_os_id** | **string**|  | |
| **printer_name** | **string**|  | |
| **quantity** | **int**|  | |
| **document_name** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | |
| **document_description** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\RemotePrintJobCreatePrintJobWithDocumentPost200Response**](../Model/RemotePrintJobCreatePrintJobWithDocumentPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remotePrintJobGet()`

```php
remotePrintJobGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\RemotePrintJobGet200Response
```

query remotePrintJob

query remotePrintJob

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
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
    $result = $apiInstance->remotePrintJobGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\RemotePrintJobGet200Response**](../Model/RemotePrintJobGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remotePrintJobIdIdDelete()`

```php
remotePrintJobIdIdDelete($id, $dry_run)
```

delete a remotePrintJob

delete a remotePrintJob

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->remotePrintJobIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `remotePrintJobIdIdGet()`

```php
remotePrintJobIdIdGet($id): \kruegge82\weclapp\Model\RemotePrintJob
```

query a specific remotePrintJob

query a specific remotePrintJob

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->remotePrintJobIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\RemotePrintJob**](../Model/RemotePrintJob.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remotePrintJobIdIdPut()`

```php
remotePrintJobIdIdPut($id, $remote_print_job, $dry_run): \kruegge82\weclapp\Model\RemotePrintJob
```

update a remotePrintJob

update remotePrintJob

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$remote_print_job = new \kruegge82\weclapp\Model\RemotePrintJob(); // \kruegge82\weclapp\Model\RemotePrintJob
$dry_run = True; // bool

try {
    $result = $apiInstance->remotePrintJobIdIdPut($id, $remote_print_job, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **remote_print_job** | [**\kruegge82\weclapp\Model\RemotePrintJob**](../Model/RemotePrintJob.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\RemotePrintJob**](../Model/RemotePrintJob.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remotePrintJobPost()`

```php
remotePrintJobPost($remote_print_job, $dry_run): \kruegge82\weclapp\Model\RemotePrintJob
```

create a remotePrintJob

create a remotePrintJob

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\RemotePrintJobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remote_print_job = new \kruegge82\weclapp\Model\RemotePrintJob(); // \kruegge82\weclapp\Model\RemotePrintJob
$dry_run = True; // bool

try {
    $result = $apiInstance->remotePrintJobPost($remote_print_job, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemotePrintJobApi->remotePrintJobPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remote_print_job** | [**\kruegge82\weclapp\Model\RemotePrintJob**](../Model/RemotePrintJob.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\RemotePrintJob**](../Model/RemotePrintJob.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
