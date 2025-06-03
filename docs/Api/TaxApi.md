# kruegge82\weclapp\TaxApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**taxConfigurePurchaseTaxesPost()**](TaxApi.md#taxConfigurePurchaseTaxesPost) | **POST** /tax/configurePurchaseTaxes |  |
| [**taxConfigureSalesTaxesPost()**](TaxApi.md#taxConfigureSalesTaxesPost) | **POST** /tax/configureSalesTaxes |  |
| [**taxCountGet()**](TaxApi.md#taxCountGet) | **GET** /tax/count |  |
| [**taxFindPurchaseTaxGet()**](TaxApi.md#taxFindPurchaseTaxGet) | **GET** /tax/findPurchaseTax |  |
| [**taxFindSalesTaxGet()**](TaxApi.md#taxFindSalesTaxGet) | **GET** /tax/findSalesTax |  |
| [**taxGet()**](TaxApi.md#taxGet) | **GET** /tax |  |
| [**taxIdIdDelete()**](TaxApi.md#taxIdIdDelete) | **DELETE** /tax/id/{id} |  |
| [**taxIdIdGet()**](TaxApi.md#taxIdIdGet) | **GET** /tax/id/{id} |  |
| [**taxIdIdPut()**](TaxApi.md#taxIdIdPut) | **PUT** /tax/id/{id} |  |
| [**taxPost()**](TaxApi.md#taxPost) | **POST** /tax |  |
| [**taxResetSystemTaxesPost()**](TaxApi.md#taxResetSystemTaxesPost) | **POST** /tax/resetSystemTaxes |  |


## `taxConfigurePurchaseTaxesPost()`

```php
taxConfigurePurchaseTaxesPost($body): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\TaxConfigurePurchaseTaxesPostRequest(); // \kruegge82\weclapp\Model\TaxConfigurePurchaseTaxesPostRequest

try {
    $result = $apiInstance->taxConfigurePurchaseTaxesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxConfigurePurchaseTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\TaxConfigurePurchaseTaxesPostRequest**](../Model/TaxConfigurePurchaseTaxesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxConfigureSalesTaxesPost()`

```php
taxConfigureSalesTaxesPost($body): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\TaxConfigureSalesTaxesPostRequest(); // \kruegge82\weclapp\Model\TaxConfigureSalesTaxesPostRequest

try {
    $result = $apiInstance->taxConfigureSalesTaxesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxConfigureSalesTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\TaxConfigureSalesTaxesPostRequest**](../Model/TaxConfigureSalesTaxesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxCountGet()`

```php
taxCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taxCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxFindPurchaseTaxGet()`

```php
taxFindPurchaseTaxGet($recipient_country_code, $dispatch_country_code, $tax_rate_type, $party_type, $debtor_creditor_code_id, $product_code_id, $date): \kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipient_country_code = 'recipient_country_code_example'; // string
$dispatch_country_code = 'dispatch_country_code_example'; // string
$tax_rate_type = 'tax_rate_type_example'; // string
$party_type = 'party_type_example'; // string
$debtor_creditor_code_id = 'debtor_creditor_code_id_example'; // string
$product_code_id = 'product_code_id_example'; // string
$date = 56; // int

try {
    $result = $apiInstance->taxFindPurchaseTaxGet($recipient_country_code, $dispatch_country_code, $tax_rate_type, $party_type, $debtor_creditor_code_id, $product_code_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxFindPurchaseTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recipient_country_code** | **string**|  | |
| **dispatch_country_code** | **string**|  | [optional] |
| **tax_rate_type** | **string**|  | [optional] |
| **party_type** | **string**|  | [optional] |
| **debtor_creditor_code_id** | **string**|  | [optional] |
| **product_code_id** | **string**|  | [optional] |
| **date** | **int**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response**](../Model/TaxFindPurchaseTaxGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxFindSalesTaxGet()`

```php
taxFindSalesTaxGet($dispatch_country_code, $recipient_country_code, $tax_rate_type, $party_type, $debtor_creditor_code_id, $product_code_id, $valid_vat_id, $date): \kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispatch_country_code = 'dispatch_country_code_example'; // string
$recipient_country_code = 'recipient_country_code_example'; // string
$tax_rate_type = 'tax_rate_type_example'; // string
$party_type = 'party_type_example'; // string
$debtor_creditor_code_id = 'debtor_creditor_code_id_example'; // string
$product_code_id = 'product_code_id_example'; // string
$valid_vat_id = True; // bool
$date = 56; // int

try {
    $result = $apiInstance->taxFindSalesTaxGet($dispatch_country_code, $recipient_country_code, $tax_rate_type, $party_type, $debtor_creditor_code_id, $product_code_id, $valid_vat_id, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxFindSalesTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dispatch_country_code** | **string**|  | |
| **recipient_country_code** | **string**|  | [optional] |
| **tax_rate_type** | **string**|  | [optional] |
| **party_type** | **string**|  | [optional] |
| **debtor_creditor_code_id** | **string**|  | [optional] |
| **product_code_id** | **string**|  | [optional] |
| **valid_vat_id** | **bool**|  | [optional] |
| **date** | **int**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response**](../Model/TaxFindPurchaseTaxGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxGet()`

```php
taxGet($page, $page_size, $sort): \kruegge82\weclapp\Model\TaxGet200Response
```



query tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->taxGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxGet200Response**](../Model/TaxGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxIdIdDelete()`

```php
taxIdIdDelete($id, $dry_run)
```



delete a tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->taxIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxIdIdGet()`

```php
taxIdIdGet($id): \kruegge82\weclapp\Model\Tax
```



query tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->taxIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxIdIdPut()`

```php
taxIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\Tax
```



update tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\Tax(); // \kruegge82\weclapp\Model\Tax
$dry_run = True; // bool

try {
    $result = $apiInstance->taxIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxPost()`

```php
taxPost($body, $dry_run): \kruegge82\weclapp\Model\Tax
```



create a tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\Tax(); // \kruegge82\weclapp\Model\Tax
$dry_run = True; // bool

try {
    $result = $apiInstance->taxPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxResetSystemTaxesPost()`

```php
taxResetSystemTaxesPost($body): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\TaxResetSystemTaxesPostRequest(); // \kruegge82\weclapp\Model\TaxResetSystemTaxesPostRequest

try {
    $result = $apiInstance->taxResetSystemTaxesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxResetSystemTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\TaxResetSystemTaxesPostRequest**](../Model/TaxResetSystemTaxesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
