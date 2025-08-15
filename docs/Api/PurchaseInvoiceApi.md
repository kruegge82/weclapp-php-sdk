# kruegge82\weclapp\PurchaseInvoiceApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseInvoiceCountGet()**](PurchaseInvoiceApi.md#purchaseInvoiceCountGet) | **GET** /purchaseInvoice/count | count purchaseInvoice |
| [**purchaseInvoiceGet()**](PurchaseInvoiceApi.md#purchaseInvoiceGet) | **GET** /purchaseInvoice | query purchaseInvoice |
| [**purchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePost()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePost) | **POST** /purchaseInvoice/id/{id}/convertPurchaseInvoiceToCreditNote |  |
| [**purchaseInvoiceIdIdCreateContractPost()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdCreateContractPost) | **POST** /purchaseInvoice/id/{id}/createContract |  |
| [**purchaseInvoiceIdIdCreateCreditNotePost()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdCreateCreditNotePost) | **POST** /purchaseInvoice/id/{id}/createCreditNote |  |
| [**purchaseInvoiceIdIdDelete()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdDelete) | **DELETE** /purchaseInvoice/id/{id} | delete a purchaseInvoice |
| [**purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet) | **GET** /purchaseInvoice/id/{id}/downloadLatestPurchaseInvoiceDocument |  |
| [**purchaseInvoiceIdIdGet()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdGet) | **GET** /purchaseInvoice/id/{id} | query a specific purchaseInvoice |
| [**purchaseInvoiceIdIdPrintLabelPost()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdPrintLabelPost) | **POST** /purchaseInvoice/id/{id}/printLabel |  |
| [**purchaseInvoiceIdIdPut()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdPut) | **PUT** /purchaseInvoice/id/{id} | update a purchaseInvoice |
| [**purchaseInvoiceIdIdResetTaxesPost()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdResetTaxesPost) | **POST** /purchaseInvoice/id/{id}/resetTaxes |  |
| [**purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost()**](PurchaseInvoiceApi.md#purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost) | **POST** /purchaseInvoice/id/{id}/saveDuplicateInvoiceAsOriginal |  |
| [**purchaseInvoicePost()**](PurchaseInvoiceApi.md#purchaseInvoicePost) | **POST** /purchaseInvoice | create a purchaseInvoice |
| [**purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost()**](PurchaseInvoiceApi.md#purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost) | **POST** /purchaseInvoice/startInvoiceDocumentProcessing/multipartUpload |  |


## `purchaseInvoiceCountGet()`

```php
purchaseInvoiceCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count purchaseInvoice

count purchaseInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->purchaseInvoiceCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseInvoiceGet()`

```php
purchaseInvoiceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PurchaseInvoiceGet200Response
```

query purchaseInvoice

query purchaseInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
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
    $result = $apiInstance->purchaseInvoiceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\PurchaseInvoiceGet200Response**](../Model/PurchaseInvoiceGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePost()`

```php
purchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdConvertPurchaseInvoiceToCreditNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response**](../Model/IncomingGoodsIdIdCreatePurchaseInvoicePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdCreateContractPost()`

```php
purchaseInvoiceIdIdCreateContractPost($id, $body): \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseInvoiceIdIdCreateContractPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdCreateContractPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response**](../Model/PurchaseInvoiceIdIdCreateContractPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdCreateCreditNotePost()`

```php
purchaseInvoiceIdIdCreateCreditNotePost($id, $purchase_invoice_id_id_create_credit_note_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_invoice_id_id_create_credit_note_post_request = new \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest(); // \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest

try {
    $result = $apiInstance->purchaseInvoiceIdIdCreateCreditNotePost($id, $purchase_invoice_id_id_create_credit_note_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdCreateCreditNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_invoice_id_id_create_credit_note_post_request** | [**\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest**](../Model/PurchaseInvoiceIdIdCreateCreditNotePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response**](../Model/IncomingGoodsIdIdCreatePurchaseInvoicePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdDelete()`

```php
purchaseInvoiceIdIdDelete($id, $dry_run)
```

delete a purchaseInvoice

delete a purchaseInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->purchaseInvoiceIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet()`

```php
purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdDownloadLatestPurchaseInvoiceDocumentGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseInvoiceIdIdGet()`

```php
purchaseInvoiceIdIdGet($id): \kruegge82\weclapp\Model\PurchaseInvoice
```

query a specific purchaseInvoice

query a specific purchaseInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseInvoiceIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdPrintLabelPost()`

```php
purchaseInvoiceIdIdPrintLabelPost($id, $purchase_invoice_id_id_print_label_post_request): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_invoice_id_id_print_label_post_request = new \kruegge82\weclapp\Model\PurchaseInvoiceIdIdPrintLabelPostRequest(); // \kruegge82\weclapp\Model\PurchaseInvoiceIdIdPrintLabelPostRequest

try {
    $result = $apiInstance->purchaseInvoiceIdIdPrintLabelPost($id, $purchase_invoice_id_id_print_label_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdPrintLabelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_invoice_id_id_print_label_post_request** | [**\kruegge82\weclapp\Model\PurchaseInvoiceIdIdPrintLabelPostRequest**](../Model/PurchaseInvoiceIdIdPrintLabelPostRequest.md)|  | |

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

## `purchaseInvoiceIdIdPut()`

```php
purchaseInvoiceIdIdPut($id, $purchase_invoice, $dry_run): \kruegge82\weclapp\Model\PurchaseInvoice
```

update a purchaseInvoice

update purchaseInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_invoice = new \kruegge82\weclapp\Model\PurchaseInvoice(); // \kruegge82\weclapp\Model\PurchaseInvoice
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseInvoiceIdIdPut($id, $purchase_invoice, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_invoice** | [**\kruegge82\weclapp\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdResetTaxesPost()`

```php
purchaseInvoiceIdIdResetTaxesPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseInvoiceIdIdResetTaxesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdResetTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response**](../Model/IncomingGoodsIdIdCreatePurchaseInvoicePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost()`

```php
purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceIdIdSaveDuplicateInvoiceAsOriginalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response**](../Model/IncomingGoodsIdIdCreatePurchaseInvoicePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoicePost()`

```php
purchaseInvoicePost($purchase_invoice, $dry_run): \kruegge82\weclapp\Model\PurchaseInvoice
```

create a purchaseInvoice

create a purchaseInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_invoice = new \kruegge82\weclapp\Model\PurchaseInvoice(); // \kruegge82\weclapp\Model\PurchaseInvoice
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseInvoicePost($purchase_invoice, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_invoice** | [**\kruegge82\weclapp\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost()`

```php
purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost($filename): \kruegge82\weclapp\Model\JobAbortGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = array('/path/to/file.txt'); // \SplFileObject[]

try {
    $result = $apiInstance->purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost($filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoiceApi->purchaseInvoiceStartInvoiceDocumentProcessingMultipartUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **\SplFileObject[]**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\JobAbortGet200Response**](../Model/JobAbortGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
