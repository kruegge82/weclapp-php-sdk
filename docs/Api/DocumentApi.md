# kruegge82\weclapp\DocumentApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentCopyPost()**](DocumentApi.md#documentCopyPost) | **POST** /document/copy |  |
| [**documentCountGet()**](DocumentApi.md#documentCountGet) | **GET** /document/count | count document |
| [**documentGet()**](DocumentApi.md#documentGet) | **GET** /document | query document |
| [**documentIdIdCopyPost()**](DocumentApi.md#documentIdIdCopyPost) | **POST** /document/id/{id}/copy |  |
| [**documentIdIdDelete()**](DocumentApi.md#documentIdIdDelete) | **DELETE** /document/id/{id} | delete a document |
| [**documentIdIdDownloadDocumentVersionGet()**](DocumentApi.md#documentIdIdDownloadDocumentVersionGet) | **GET** /document/id/{id}/downloadDocumentVersion |  |
| [**documentIdIdDownloadDocumentVersionsZippedGet()**](DocumentApi.md#documentIdIdDownloadDocumentVersionsZippedGet) | **GET** /document/id/{id}/downloadDocumentVersionsZipped |  |
| [**documentIdIdDownloadGet()**](DocumentApi.md#documentIdIdDownloadGet) | **GET** /document/id/{id}/download |  |
| [**documentIdIdGet()**](DocumentApi.md#documentIdIdGet) | **GET** /document/id/{id} | query a specific document |
| [**documentIdIdPut()**](DocumentApi.md#documentIdIdPut) | **PUT** /document/id/{id} | update a document |
| [**documentIdIdUploadPost()**](DocumentApi.md#documentIdIdUploadPost) | **POST** /document/id/{id}/upload |  |
| [**documentUploadPost()**](DocumentApi.md#documentUploadPost) | **POST** /document/upload |  |


## `documentCopyPost()`

```php
documentCopyPost($document_copy_post_request): \kruegge82\weclapp\Model\DocumentCopyPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_copy_post_request = new \kruegge82\weclapp\Model\DocumentCopyPostRequest(); // \kruegge82\weclapp\Model\DocumentCopyPostRequest

try {
    $result = $apiInstance->documentCopyPost($document_copy_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentCopyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_copy_post_request** | [**\kruegge82\weclapp\Model\DocumentCopyPostRequest**](../Model/DocumentCopyPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\DocumentCopyPost200Response**](../Model/DocumentCopyPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentCountGet()`

```php
documentCountGet($entity_id, $entity_name, $filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count document

count document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string
$entity_name = 'entity_name_example'; // string
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->documentCountGet($entity_id, $entity_name, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**|  | |
| **entity_name** | **string**|  | |
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

## `documentGet()`

```php
documentGet($entity_id, $entity_name, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\DocumentGet200Response
```

query document

query document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_id = 'entity_id_example'; // string
$entity_name = 'entity_name_example'; // string
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->documentGet($entity_id, $entity_name, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_id** | **string**|  | |
| **entity_name** | **string**|  | |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\DocumentGet200Response**](../Model/DocumentGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentIdIdCopyPost()`

```php
documentIdIdCopyPost($id, $document_id_id_copy_post_request): \kruegge82\weclapp\Model\DocumentCopyPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$document_id_id_copy_post_request = new \kruegge82\weclapp\Model\DocumentIdIdCopyPostRequest(); // \kruegge82\weclapp\Model\DocumentIdIdCopyPostRequest

try {
    $result = $apiInstance->documentIdIdCopyPost($id, $document_id_id_copy_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdCopyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **document_id_id_copy_post_request** | [**\kruegge82\weclapp\Model\DocumentIdIdCopyPostRequest**](../Model/DocumentIdIdCopyPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\DocumentCopyPost200Response**](../Model/DocumentCopyPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentIdIdDelete()`

```php
documentIdIdDelete($id, $dry_run)
```

delete a document

delete a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->documentIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `documentIdIdDownloadDocumentVersionGet()`

```php
documentIdIdDownloadDocumentVersionGet($id, $version_id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$version_id = 'version_id_example'; // string

try {
    $result = $apiInstance->documentIdIdDownloadDocumentVersionGet($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdDownloadDocumentVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **version_id** | **string**|  | [optional] |

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

## `documentIdIdDownloadDocumentVersionsZippedGet()`

```php
documentIdIdDownloadDocumentVersionsZippedGet($id, $filename, $ids): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$filename = 'filename_example'; // string
$ids = array('ids_example'); // string[]

try {
    $result = $apiInstance->documentIdIdDownloadDocumentVersionsZippedGet($id, $filename, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdDownloadDocumentVersionsZippedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **filename** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `documentIdIdDownloadGet()`

```php
documentIdIdDownloadGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->documentIdIdDownloadGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdDownloadGet: ', $e->getMessage(), PHP_EOL;
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

## `documentIdIdGet()`

```php
documentIdIdGet($id): \kruegge82\weclapp\Model\Document
```

query a specific document

query a specific document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->documentIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\Document**](../Model/Document.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentIdIdPut()`

```php
documentIdIdPut($id, $document, $dry_run): \kruegge82\weclapp\Model\Document
```

update a document

update document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$document = new \kruegge82\weclapp\Model\Document(); // \kruegge82\weclapp\Model\Document
$dry_run = True; // bool

try {
    $result = $apiInstance->documentIdIdPut($id, $document, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **document** | [**\kruegge82\weclapp\Model\Document**](../Model/Document.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Document**](../Model/Document.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentIdIdUploadPost()`

```php
documentIdIdUploadPost($id, $body, $comment): \kruegge82\weclapp\Model\DocumentCopyPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = '/path/to/file.txt'; // \SplFileObject
$comment = 'comment_example'; // string

try {
    $result = $apiInstance->documentIdIdUploadPost($id, $body, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentIdIdUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | |
| **comment** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\DocumentCopyPost200Response**](../Model/DocumentCopyPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentUploadPost()`

```php
documentUploadPost($entity_name, $entity_id, $name, $body, $description, $document_type): \kruegge82\weclapp\Model\DocumentCopyPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_name = 'entity_name_example'; // string
$entity_id = 'entity_id_example'; // string
$name = 'name_example'; // string
$body = '/path/to/file.txt'; // \SplFileObject
$description = 'description_example'; // string
$document_type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\DocumentType(); // \kruegge82\weclapp\Model\DocumentType

try {
    $result = $apiInstance->documentUploadPost($entity_name, $entity_id, $name, $body, $description, $document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_name** | **string**|  | |
| **entity_id** | **string**|  | |
| **name** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | |
| **description** | **string**|  | [optional] |
| **document_type** | [**\kruegge82\weclapp\Model\DocumentType**](../Model/.md)|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\DocumentCopyPost200Response**](../Model/DocumentCopyPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
