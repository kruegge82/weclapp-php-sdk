# # ProductionOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional] [readonly]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**article_id** | **string** |  | [optional]
**note** | **string** |  | [optional]
**position_number** | **int** |  | [optional]
**quantity** | **float** |  | [optional]
**actual_pick_date** | **int** |  | [optional] [readonly]
**actual_quantity** | **float** |  | [optional] [readonly]
**availability** | [**\kruegge82\weclapp\Model\DispositionInfoAvailabilityType**](DispositionInfoAvailabilityType.md) |  | [optional]
**availability_for_all_warehouses** | [**\kruegge82\weclapp\Model\DispositionInfoAvailabilityType**](DispositionInfoAvailabilityType.md) |  | [optional]
**picks** | [**\kruegge82\weclapp\Model\ItemPick[]**](ItemPick.md) |  | [optional]
**target_pick_date** | **int** |  | [optional]
**target_quantity** | **float** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
