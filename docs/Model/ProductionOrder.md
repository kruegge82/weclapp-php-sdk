# # ProductionOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**actual_end_date** | **int** |  | [optional]
**actual_quantity** | **float** |  | [optional]
**actual_start_date** | **int** |  | [optional]
**article_id** | **string** |  | [optional]
**article_number** | **string** |  | [optional]
**assembly_storage_place_id** | **string** |  | [optional]
**availability** | [**\kruegge82\weclapp\Model\DispositionInfoAvailabilityType**](DispositionInfoAvailabilityType.md) |  | [optional]
**availability_for_all_warehouses** | [**\kruegge82\weclapp\Model\DispositionInfoAvailabilityType**](DispositionInfoAvailabilityType.md) |  | [optional]
**picking_instructions** | **string** |  | [optional]
**picks_complete** | **bool** |  | [optional]
**production_order_items** | [**\kruegge82\weclapp\Model\ProductionOrderItem[]**](ProductionOrderItem.md) |  | [optional]
**production_order_number** | **string** |  | [optional]
**status** | [**\kruegge82\weclapp\Model\ProductionOrderStatusType**](ProductionOrderStatusType.md) |  | [optional]
**status_history** | [**\kruegge82\weclapp\Model\ProductionOrderStatusHistory[]**](ProductionOrderStatusHistory.md) |  | [optional]
**target_end_date** | **int** |  | [optional]
**target_quantity** | **float** |  | [optional]
**target_start_date** | **int** |  | [optional]
**warehouse_id** | **string** |  | [optional]
**warehouse_name** | **string** |  | [optional]
**work_items** | [**\kruegge82\weclapp\Model\ProductionOrderWorkItem[]**](ProductionOrderWorkItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
