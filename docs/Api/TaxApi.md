# kruegge82\weclapp\TaxApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**taxConfigurePurchaseTaxesPost()**](TaxApi.md#taxConfigurePurchaseTaxesPost) | **POST** /tax/configurePurchaseTaxes |  |
| [**taxConfigureSalesTaxesPost()**](TaxApi.md#taxConfigureSalesTaxesPost) | **POST** /tax/configureSalesTaxes |  |
| [**taxCountGet()**](TaxApi.md#taxCountGet) | **GET** /tax/count | count tax |
| [**taxFindPurchaseTaxGet()**](TaxApi.md#taxFindPurchaseTaxGet) | **GET** /tax/findPurchaseTax |  |
| [**taxFindSalesTaxGet()**](TaxApi.md#taxFindSalesTaxGet) | **GET** /tax/findSalesTax |  |
| [**taxGet()**](TaxApi.md#taxGet) | **GET** /tax | query tax |
| [**taxIdIdDelete()**](TaxApi.md#taxIdIdDelete) | **DELETE** /tax/id/{id} | delete a tax |
| [**taxIdIdGet()**](TaxApi.md#taxIdIdGet) | **GET** /tax/id/{id} | query a specific tax |
| [**taxIdIdPut()**](TaxApi.md#taxIdIdPut) | **PUT** /tax/id/{id} | update a tax |
| [**taxPost()**](TaxApi.md#taxPost) | **POST** /tax | create a tax |
| [**taxResetSystemTaxesPost()**](TaxApi.md#taxResetSystemTaxesPost) | **POST** /tax/resetSystemTaxes |  |


## `taxConfigurePurchaseTaxesPost()`

```php
taxConfigurePurchaseTaxesPost($tax_configure_purchase_taxes_post_request): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_configure_purchase_taxes_post_request = new \kruegge82\weclapp\Model\TaxConfigurePurchaseTaxesPostRequest(); // \kruegge82\weclapp\Model\TaxConfigurePurchaseTaxesPostRequest

try {
    $result = $apiInstance->taxConfigurePurchaseTaxesPost($tax_configure_purchase_taxes_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxConfigurePurchaseTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_configure_purchase_taxes_post_request** | [**\kruegge82\weclapp\Model\TaxConfigurePurchaseTaxesPostRequest**](../Model/TaxConfigurePurchaseTaxesPostRequest.md)|  | |

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

## `taxConfigureSalesTaxesPost()`

```php
taxConfigureSalesTaxesPost($tax_configure_sales_taxes_post_request): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_configure_sales_taxes_post_request = new \kruegge82\weclapp\Model\TaxConfigureSalesTaxesPostRequest(); // \kruegge82\weclapp\Model\TaxConfigureSalesTaxesPostRequest

try {
    $result = $apiInstance->taxConfigureSalesTaxesPost($tax_configure_sales_taxes_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxConfigureSalesTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_configure_sales_taxes_post_request** | [**\kruegge82\weclapp\Model\TaxConfigureSalesTaxesPostRequest**](../Model/TaxConfigureSalesTaxesPostRequest.md)|  | |

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

## `taxCountGet()`

```php
taxCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count tax

count tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->taxCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxCountGet: ', $e->getMessage(), PHP_EOL;
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

## `taxFindPurchaseTaxGet()`

```php
taxFindPurchaseTaxGet($recipient_country_code, $dispatch_country_code, $tax_rate_type, $party_type, $debtor_creditor_code_id, $product_code_id, $date): \kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$tax_rate_type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\TaxRateType(); // \kruegge82\weclapp\Model\TaxRateType
$party_type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\PartyType(); // \kruegge82\weclapp\Model\PartyType
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
| **tax_rate_type** | [**\kruegge82\weclapp\Model\TaxRateType**](../Model/.md)|  | [optional] |
| **party_type** | [**\kruegge82\weclapp\Model\PartyType**](../Model/.md)|  | [optional] |
| **debtor_creditor_code_id** | **string**|  | [optional] |
| **product_code_id** | **string**|  | [optional] |
| **date** | **int**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response**](../Model/TaxFindPurchaseTaxGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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


// Configure API key authorization: api-token
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
$tax_rate_type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\TaxRateType(); // \kruegge82\weclapp\Model\TaxRateType
$party_type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\PartyType(); // \kruegge82\weclapp\Model\PartyType
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
| **tax_rate_type** | [**\kruegge82\weclapp\Model\TaxRateType**](../Model/.md)|  | [optional] |
| **party_type** | [**\kruegge82\weclapp\Model\PartyType**](../Model/.md)|  | [optional] |
| **debtor_creditor_code_id** | **string**|  | [optional] |
| **product_code_id** | **string**|  | [optional] |
| **valid_vat_id** | **bool**|  | [optional] |
| **date** | **int**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxFindPurchaseTaxGet200Response**](../Model/TaxFindPurchaseTaxGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxGet()`

```php
taxGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\TaxGet200Response
```

query tax

query tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->taxGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
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
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxGet200Response**](../Model/TaxGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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

delete a tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

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

query a specific tax

query a specific tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxIdIdPut()`

```php
taxIdIdPut($id, $tax, $dry_run): \kruegge82\weclapp\Model\Tax
```

update a tax

update tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$tax = new \kruegge82\weclapp\Model\Tax(); // \kruegge82\weclapp\Model\Tax
$dry_run = True; // bool

try {
    $result = $apiInstance->taxIdIdPut($id, $tax, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **tax** | [**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxPost()`

```php
taxPost($tax, $dry_run): \kruegge82\weclapp\Model\Tax
```

create a tax

create a tax

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax = new \kruegge82\weclapp\Model\Tax(); // \kruegge82\weclapp\Model\Tax
$dry_run = True; // bool

try {
    $result = $apiInstance->taxPost($tax, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax** | [**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Tax**](../Model/Tax.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxResetSystemTaxesPost()`

```php
taxResetSystemTaxesPost($tax_reset_system_taxes_post_request): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_reset_system_taxes_post_request = new \kruegge82\weclapp\Model\TaxResetSystemTaxesPostRequest(); // \kruegge82\weclapp\Model\TaxResetSystemTaxesPostRequest

try {
    $result = $apiInstance->taxResetSystemTaxesPost($tax_reset_system_taxes_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->taxResetSystemTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_reset_system_taxes_post_request** | [**\kruegge82\weclapp\Model\TaxResetSystemTaxesPostRequest**](../Model/TaxResetSystemTaxesPostRequest.md)|  | |

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
