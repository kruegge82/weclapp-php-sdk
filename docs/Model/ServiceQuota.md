# ServiceQuota

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional] [readonly]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**article_id** | **string** |  | [optional] [readonly]
**billable_quantity_seconds** | **int** |  | [optional] [readonly]
**customer_id** | **string** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**name** | **string** |  | [optional]
**quantity_seconds** | **int** |  | [optional] [readonly]
**service_quota_number** | **string** |  | [optional] [readonly]
**service_quota_relationships** | [**\kruegge82\weclapp\Model\ServiceQuotaRelationship[]**](ServiceQuotaRelationship.md) |  | [optional] [readonly]
**status** | [**\kruegge82\weclapp\Model\ServiceQuotaStatusType**](ServiceQuotaStatusType.md) |  | [optional] [readonly]
**status_history** | [**\kruegge82\weclapp\Model\ServiceQuotaStatusHistory[]**](ServiceQuotaStatusHistory.md) |  | [optional] [readonly]
**valid_from_date** | **int** |  | [optional] [readonly]
**valid_until_date** | **int** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
