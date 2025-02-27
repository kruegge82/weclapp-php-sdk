<?php
/**
 * PermissionString
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * weclapp API
 *
 * # Getting Started   API Version:     [v1](v1.html)   The weclapp REST API lets you integrate weclapp with other applications or services.  The specification for this version can be downloaded here:  | Format                          | Public                                                                           | |---------------------------------|----------------------------------------------------------------------------------| | swagger JSON                    | <a href=\"swagger.json\" download=\"weclapp-swagger.json\">Download</a> | | OpenApi 3 JSON                  | <a href=\"openapi_v2.json\" download=\"weclapp-openapi.json\">Download</a> | | OpenApi 3 YAML (with user docs) | <a href=\"openapi_v2.yaml\" download=\"weclapp-openapi.yaml\">Download</a> |    ## What should I know before starting?  Our API is continuously being developed and improved, but we are still trying to keep it as stable as possible. We try to only have changes that are backwards compatible: usually the changes are only additions, e.g. new resources are implemented or new properties are added to existing resources. Sometimes breaking changes cannot be avoided, e.g. when a new feature requires an incompatible change to the underlying data model, all those changes will be documented in the change log.  ## Security and Authentication  You must be a verified user to make API requests. You can authorize against the API with an API token. The token is configurable in your weclapp account under **My settings > API**. Authentication is possible in multiple ways: If the request contains the session cookies of a logged in weclapp session then the user and permissions of that session are used. This is useful when testing the API in a web browser, because then requests are “automatically” authenticated if weclapp is used in another tab. But generally the API is not used from a browser or with session cookies, instead there is an API token for each user that can be used to authenticate requests. Each user can find his/her token on the \"My Settings page\". The token should be kept secret like a password. A user can also generate a new token at any time, doing that invalidates all previous tokens. Authenticating using a token is possible in two ways:  * the token can be sent using the AuthenticationToken header `AuthenticationToken: {api_token}` * the standard HTTP Basic authentication can be used: the username needs to be `“*”` and the password is the token  ## Using curl  ```bash curl --compressed -H \"AuthenticationToken:{api_token}\" \"https://<TENANT>.weclapp.com/webapp/api/v2\" ... ```  Examples of how to use curl will be shown in each section of this API.  ## Headers  This is a JSON-only API. You must supply a `Content-Type: application/json` header on PUT and POST operations. You must set a `Accept: application/json` header on all requests. You may get a `text/plain` response in case of error, e.g. in case of a bad request, you should treat this as an error you need to take action on.  To reduce traffic the weclapp API works with [compression](https://developer.mozilla.org/en-US/docs/Web/HTTP/Compression#end-to-end_compression). This means, a client should always submit the header “Accept-Encoding: gzip”. If this header is not set, the API will enforce compression and respond with \"Content-Encoding: gzip\".  Please also make sure to set a `User-Agent` header for all automated requests, as that makes it much easier to identify misbehaving clients.  ## URLs  The base URL for the API is `https://<TENANT>.weclapp.com/webapp/api/v2/` where `<TENANT>.weclapp.com` is the domain of the specific weclapp instance. So each weclapp instance has its own API endpoints which allow accessing data for that particular instance. The API provides access to various resources like customers, sales orders, articles etc.. Each of those resources implements a common set of operations. The URLs and HTTP methods for the different resource operations use the same pattern for all resources:  | Operation                     | HTTP Method | URL pattern                                                           | |-------------------------------|-------------|-----------------------------------------------------------------------| | Query/list instances          | GET         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>`       | | total number of instances     | GET         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/count` | | Get a specific instance by id | GET         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>` | | Create a new instance         | POST        | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>`       | | Update a specific instance    | PUT         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>` | | Delete a specific instance    | DELETE      | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>` |  Not all resources support all of those operations. A general description for each operation can be found in API operations by example, and details for each resource are described on the page for that resource.  ## Additional operations  Some resources allow further operations or actions. Those operations can be executed with a POST request, for some operations that only read data it is also possible to use a GET request (this is documented for each operation). For general operations for a resource the URL pattern is `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/<operation>`. Some operations are instance specific, those use the following URL pattern: `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>/<operation>`.      ## JSON  | Type                 | Representation in JSON                                                                                                                                                                                                                                                                                                                                                                         | |----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | string               | Serialized as JSON string, empty strings (length 0 or only whitespace) are always interpreted as null, it is not possible to have a property with an empty string value.                                                                                                                                                                                                                       | | boolean              | Serialized as `true` / `false`.                                                                                                                                                                                                                                                                                                                                                                | | decimal number       | Most numbers in weclapp are decimal numbers with a fixed precision and scale (e.g. quantities or prices), they are serialized as JSON strings and not as JSON numbers to prevent accidental loss of precision when the JSON is deserialized with a JSON library that uses doubles to represent JSON numbers. The serialized numbers always use a “.” as the decimal mark (if one is required). | | integers             | Integer numbers (that can safely be represented as a double) are serialized as JSON numbers.                                                                                                                                                                                                                                                                                                   | | floats/doubles       | Serialized as JSON numbers.                                                                                                                                                                                                                                                                                                                                                                    | | dates and timestamps | Serialized as the milliseconds since 1970-01-01T00:00:00Z (as a JSON number).                                                                                                                                                                                                                                                                                                                  | | enums                | Sometimes a property value can be one of a fixed number of named options. Those enum properties are serialized as a JSON string with the name of the option.                                                                                                                                                                                                                                   |  The deserialization of data sent to the API is relatively lenient, for example when a string is expected, but a number is given then that number is used as the string and the other way around (if possible). Properties with the value null are not serialized by default and when sending data to the API it is also not necessary to include properties whose value is null: all properties that are missing from the JSON object but are expected are assumed to be `null`. To get all properties including those with the value null the query parameter `serializeNulls` can be added to the request URL, in that case null values are included in the response.    ## Error Responses  Any request on the weclapp API may return an error response, with a structure conforming to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807). See the [API error reference](#errors) section for details.      ## Change Policy  weclapp may modify the attributes and resources available to the API and our policies related to access and use of the API from time to time without advance notice. weclapp will use commercially reasonable efforts to notify you of any modifications to the API or policies through notifications or posts on the weclapp Developer Website. weclapp also tracks deprecation of attributes of the API on its Changelog. Modification of the API may have an adverse effect on weclapp Applications, including but not limited to changing the manner in which weclapp Applications communicate with the API and display or transmit Your Data. weclapp will not be liable to you or any third party for such modifications or any adverse effects resulting from such modifications    # API newsletter  Sign up here for our [API newsletter](https://340d89eb.sibforms.com/serve/MUIEAEREP3buQMWpwPwuVohmsPBikdVQIilNQeZ2DJBE5NZePFYqyp_62WSheCC5t_Q7eJ6SVpZBauqRY93L8L8Iquik5gaH40Bi0uOtPioS7U7k4JvemqVuSdvEV0A3DgygC5LOAv-kjuN4Ij5MUqzm5DSHYbmKvGucHMXpZMFGGA5Lwi5VUv6ZZbROGqZJCrGfYFxGttzVBqc_). We will inform you regularly about planned API changes.   # API operations sample  As mentioned previously all resources implement common operations in the same way. In the following all the common operations are explained for the `customer` resource. The operations work in the same way for all other resources (some resources don’t support all the operations), the differences between the resources are mostly the data and the properties that are required and used.  ## Querying  The most common operation is querying or listing the existing entity instances. This is possible with a `GET` request to the base URL of a resource:    ### `GET /customer`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"primeAddress\": true,           \"street1\": \"Mustergasse 7\",           \"zipcode\": \"80331 \"         }       ],       \"blocked\": false,       \"company\": \"Muster GmbH\",       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"primeAddress\": true,               \"street1\": \"Fasanenweg 15\",               \"zipcode\": \"80331\"             }           ],           \"createdDate\": 1496828882837,           \"email\": \"mustermann@beispiel.de\",           \"firstName\": \"Max\",           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1496828973904,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1006\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496828996212,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  In this case there is one sales order with one order item. By default, all null values are omitted, to include them the query parameter serializeNulls can be used:    ### `GET /customer?serializeNulls`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?serializeNulls\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"company\": null,           \"company2\": null,           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"globalLocationNumber\": null,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"postOfficeBoxCity\": null,           \"postOfficeBoxNumber\": null,           \"postOfficeBoxZipCode\": null,           \"primeAddress\": true,           \"state\": null,           \"street1\": \"Mustergasse 7\",           \"street2\": null,           \"zipcode\": \"80331 \"         }       ],       \"amountInsured\": null,       \"annualRevenue\": null,       \"birthDate\": null,       \"blockNotice\": null,       \"blocked\": false,       \"commercialLanguageId\": null,       \"company\": \"Muster GmbH\",       \"company2\": null,       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"company\": null,               \"company2\": null,               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"globalLocationNumber\": null,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"postOfficeBoxCity\": null,               \"postOfficeBoxNumber\": null,               \"postOfficeBoxZipCode\": null,               \"primeAddress\": true,               \"state\": null,               \"street1\": \"Fasanenweg 15\",               \"street2\": null,               \"zipcode\": \"80331\"             }           ],           \"birthDate\": null,           \"company\": null,           \"company2\": null,           \"createdDate\": 1496828882837,           \"customAttributes\": null,           \"description\": null,           \"email\": \"mustermann@beispiel.de\",           \"fax\": null,           \"firstName\": \"Max\",           \"fixPhone2\": null,           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"middleName\": null,           \"mobilePhone1\": null,           \"mobilePhone2\": null,           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"personDepartment\": null,           \"personRole\": null,           \"phone\": null,           \"phoneHome\": null,           \"salutation\": \"MR\",           \"title\": null,           \"website\": null         }       ],       \"createdDate\": 1496828973904,       \"creditLimit\": null,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\",           \"booleanValue\": null,           \"dateValue\": null,           \"numberValue\": null,           \"selectedValueId\": null,           \"selectedValues\": null,           \"stringValue\": null         }       ],       \"customerCategoryId\": null,       \"customerCategoryName\": null,       \"customerNumber\": \"C1006\",       \"customerRating\": null,       \"customerTopics\": [],       \"defaultHeaderDiscount\": null,       \"defaultHeaderSurcharge\": null,       \"deliveryBlock\": false,       \"description\": null,       \"email\": null,       \"fax\": null,       \"firstName\": null,       \"insolvent\": false,       \"insured\": false,       \"invoiceContactId\": null,       \"lastModifiedDate\": 1496828996212,       \"lastName\": null,       \"leadSourceId\": null,       \"leadSourceName\": null,       \"middleName\": null,       \"mobilePhone1\": null,       \"oldCustomerNumber\": null,       \"optIn\": false,       \"parentPartyId\": null,       \"partyType\": \"ORGANIZATION\",       \"paymentMethodId\": null,       \"paymentMethodName\": null,       \"personCompany\": null,       \"personDepartment\": null,       \"personRole\": null,       \"phone\": null,       \"primaryContactId\": null,       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"salutation\": null,       \"satisfaction\": null,       \"sectorId\": null,       \"sectorName\": null,       \"shipmentMethodId\": null,       \"shipmentMethodName\": null,       \"termOfPaymentId\": null,       \"termOfPaymentName\": null,       \"title\": null,       \"useCustomsTariffNumber\": false,       \"vatRegistrationNumber\": null,       \"website\": null     }   ] } ```  ## Pagination By default the operation will not return all entity instances but only the first 100, this can be changed by using the `pageSize` query parameter with the number of desired results. But `pageSize` cannot be arbitrarily high it is usually limited 1000 (exceptions to the default limits of 100 and 1000 are noted in the documentation for the specific resources). To get further results it is necessary to skip entity instances, this is done using the `page` query parameter. Examples:    ### `GET /customer?pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?pageSize=10\" ```  returns at most 10 instances  ### `GET /customer?page=2&pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?page=2&pageSize=10\" ```  returns the second page of results (the `page` parameter is one based, so `page=1` is the first page, which is also the default). Using those two parameters it is possible to implement pagination.  ## Sorting  It is also possible to change the order of the returned results using the `sort` parameter:  ### `GET /customer?sort=lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?sort=lastModifiedDate\" ```  sort by `lastModifiedDate` (ascending).  ### `GET /customer?sort=-lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?sort=-lastModifiedDate\" ```  sort by `lastModifiedDate` descending.  ### `GET /customer?sort=lastModifiedDate,-salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?sort=lastModifiedDate,-salesChannel\" ```  sort by `lastModifiedDate` (ascending) and then `salesChannel` descending.   It is generally possible to sort by most of the simple properties of an entity. It is possible to combine multiple sort orders by combining the property names with a comma. To sort in descending order just prepend a minus to the property name. If an unsupported or unknown property is specified then an error response is returned.  ## Filtering  It is often desired to get just a subset of the data, for example just the orders of a specific customer or created after a specific date. This is possible using filtering query parameters:    ### `GET /customer?salesChannel-eq=NET1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?salesChannel-eq=NET1\" ```  customers for `salesChannel` `NET1`.  ### `GET /customer?createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?createdDate-gt=1398436281262\" ```  customers created after the specified timestamp.  ### `GET /customer?salesChannel-eq=NET1&createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?salesChannel-eq=NET1&createdDate-gt=1398436281262\" ```  customers for `salesChannel` `NET1` and created after the specified timestamp.  ### `GET /customer?customAttribute4587-eq=NEW`  ```bash curl --compressed -H \"\"\"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?customAttribute4587-eq=NEW\" ```  customers with the value `NEW` for `customAttribute` with id 4587.  ### `GET /customer?customAttribute4587.entityReferences.entityId-eq=1234`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\"   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?customAttribute4587.entityReferences.entityId-eq=1234\" ```  customers with an entity reference to an entity with the id 1234 for the `customAttribute` with the id 4587.  ### `GET /customAttributeDefinitions`  All attributeTypes are supported except `MULTISELECT_LIST`. CustomAttributes of attributeType `LIST` could be filtered by `customAttribute{customAttributeId}.id` or `customAttribute{customAttributeId}.value`.  ### `GET /customer?customAttribute3387.value-eq=OPTION1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?customAttribute3387.value-eq=OPTION1\" ```  customers with value `OPTION1` for `customAttribute` with id 3387.  A filtering query parameter consists of a property name and a filter operator joined together with a minus. If multiple filtering query parameter are specified then they are combined and the returned results match all of them. Filtering query parameters for unknown properties or properties that don’t support filtering are silently ignored.  The following filtering operators are supported (not all of them work for all property types):  | Operator | Meaning                                                                                                                                                                                     | |----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | eq       | equal                                                                                                                                                                                       | | ne       | not equal                                                                                                                                                                                   | | lt       | less than                                                                                                                                                                                   | | gt       | greater than                                                                                                                                                                                | | le       | less equal                                                                                                                                                                                  | | ge       | greater equal                                                                                                                                                                               | | null     | property is null (the query parameter value is ignored and can be omitted)                                                                                                                  | | notnull  | property is not null (the query parameter value is ignored and can be omitted)                                                                                                              | | like     | like expression (supports `%` and `_` as placeholders, similar to SQL LIKE)                                                                                                                 | | notlike  | not like expression                                                                                                                                                                         | | ilike    | like expression, ignoring case                                                                                                                                                              | | notilike | not like expression, ignoring case                                                                                                                                                          | | in       | the property value is in the specified list of values, the query parameter value must be a JSON array with the values in the correct type, for example `?customerNumber-in=[\"1006\",\"1007\"]` | | notin    | the property value is not in the specified list of values                                                                                                                                   |  ## \"Or\" condition filtering  In addition to the default behavior of linking filter expressions via \"and\" you can also link individual filter expressions via \"or\" by prefixing their parameter name with \"or-\":   ### `GET /customer?or-name-eq=charlie&or-name-eq=chaplin`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?or-name-eq=charlie&or-name-eq=chaplin\" ```  The above example is the equivalent of the expression `(name equals \"charlie\") or (name equals \"chaplin\")`   For combining `or` and `and` clauses you may also group `or` expressions by using `or<groupname>-` instead of the plain `or-` prefix:   ### `GET /customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12\" ```  The above example is the equivalent of the expression  ``` ((name equals charlie) or (name equals chaplin)) and ((responsibleUserUsername equals \"mrtest\") or (referenceNumber equals \"4711\")) and (commercialLanguageId equals \"12\") ```  Technically, the default \"or-\" variant is just a special case of this, using the empty String as group name.  ## Filter Expressions  **Warning: This is still a beta feature.**  In addition to individual filter properties it is also possible to specify complex filter expressions that can combine multiple conditions and express relations between properties. Example:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   https://<TENANT>.weclapp.com/webapp/api/v2/party \\   --get \\   --data-urlencode 'filter=(lower(contacts.firstName + \" \" + contacts.lastName) = \"Ertan Özdil\") and (lastModifiedDate >= \"2022-01-01T00:00:00Z\")' ```  * \"filter\" parameters are ANDed with other filter parameters * Property references in filter expressions have exactly the same form and semantics as for the individual filter parameters. * Multiple \"filter\" parameters may be used if needed.  ### Examples  Some more example filter expressions:  ```sql -- enum literals are specified as string literals (salesChannel in [\"NET1\", \"NET4\", \"NET5\"]) and (partyType = \"ORGANIZATION\")  -- normal arithmetic operations are supported. (unitPrice + unitPrice * salesTax) <= 49.99  -- elementary functions length(trim(notes)) <= 140  -- conditions can be combined with logical operators (not (contacts.firstName null)) or (currencyId = 4711) ```  ### Availabe Operations   ### arihmetic  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  addition | + | integer, float, string | integer, float, string | Addition of two numerical values or concatenation of two strings | |  subtraction | - | integer, float | integer, float |  | |  multiplication | * | integer, float | integer, float |  | |  division | / | integer, float | integer, float |  | |  negation | - | --- | integer, float |  |   ### comparison  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  equals | = | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  not equals | != | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  less than | < | integer, float, date | integer, float, date |  | |  greater than | > | integer, float, date | integer, float, date |  | |  Less than or equals | <= | integer, float, date | integer, float, date |  | |  Greater than or equals | >= | integer, float, date | integer, float, date |  | |  Pattern matching | ~ | string | string | Supports % and _ as placeholders, similar to SQL LIKE | |  Alternatives match | in | integer, float, string, boolean, date, enum | list | Value is one of the given alternatives | |  Property is null | null | integer, float, string, boolean, date, enum | --- |  |   ### logical  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  and | and | boolean | boolean |  | |  or | or | boolean | boolean |  | |  not | not | --- | boolean |  |   ### function  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  trim | trim | --- | string | Remove whitespace from both ends of a string | |  length | length | --- | string | Get the number of characters in a string | |  lower | lower | --- | string | Convert a string to lower case |   ### Type Coercion  Literals in the expression are interpreted as different types depending on their context:  * An `integer` literal being compared to a `date` property is interpreted as milliseconds since Epoch * A `string` literal being compared to a `date` property is interpreted as [ISO-8601 point in time](https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations) with optional milliseconds and required time zone. Examples:   * `2024-10-13T10:39:12+02:00`   * `2024-10-13T10:39:12.443+02:00`   * `2024-10-13T10:39:12Z`   * `2024-10-13T10:39:12+02:00` * A `string` literal being compared to an `enum` property is interpreted as enum constant * ID properties (i.e. properties named `id` or `<something>Id`) can be compared to both integer and string literals  ## Return only specific properties  Sometimes it is desirable to only fetch a subset of all properties, for example to save bandwidth. This is possible by specifying the desired properties using the `properties` query parameter:  ### `GET /customer?properties=id,customerNumber,salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?properties=id,customerNumber,salesChannel\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```  It is also possible to specify property paths:  ### `GET /customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName\" ```  If an unknown property or property path is specified then an error response is returned.  ```json {   \"result\": [     {       \"id\": \"3346\",       \"contacts\": [         {           \"id\": \"3731\",           \"lastName\": \"Mustermann\"         }       ],       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```   ## Combinations  The query parameters for pagination, sorting, filtering and returning only specific properties can be combined to perform queries.   ## Counting  To determine the total number of entity instances the count operation can be used:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/count\" ```  It is possible to use the filtering query parameters from the querying operation with the count operation:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/count?salesChannel-eq=NET1\" ```  returns the number of customers for `salesChannel` `NET1`.   ## Referenced entities  The API offers the possibility to get the referenced entities for a query result in the same request. This way you can save subsequent requests and get all necessary and referenced data in one request. This feature can be used by simply specifying the parameter `includeReferencedEntities` and the primary key references as comma separated list. The API response will contain an additional object `referencedEntities`.   ### `GET /article?includeReferencedEntities=unitId,articleCategoryId`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/article?includeReferencedEntities=unitId,articleCategoryId&properties=id,name,unitId,articleCategoryId\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3235\",       \"name\": \"Testartikel 1\",       \"unitId\": \"2770\"     },     {       \"id\": \"3236\",       \"name\": \"Testartikel 2\",       \"unitId\": \"2770\"     },     {       \"id\": \"3237\",       \"articleCategoryId\": \"7035\",       \"name\": \"Testartikel 3\",       \"unitId\": \"2770\"     }   ],   \"referencedEntities\": {     \"unit\": [       {         \"id\": \"2770\",         \"version\": \"0\",         \"createdDate\": 1597915605986,         \"description\": \"Stück\",         \"lastModifiedDate\": 1597915605985,         \"name\": \"Stk.\"       }     ],     \"articleCategory\": [       {         \"id\": \"7035\",         \"version\": \"0\",         \"createdDate\": 1619778730348,         \"lastModifiedDate\": 1619778730348,         \"name\": \"Demo-Gruppe\"       }     ]   } } ```  ## Additional properties  In addition to the common properties, there are additional properties that can be optionally queried. These are calculated or complexly determined and must therefore be explicitly queried.  To use this function, only the parameter `additionalProperties` and the names of the additional properties must be specified as a comma-separated list. The response then contains the additional object `additionalProperties` with the property and an array of values. The index of the value object in this list also represents the reference to the respective entity.   ### `GET /article?additionalProperties=currentSalesPrice`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/article?additionalProperties=currentSalesPrice\" ```  **Output:**  ```json {   \"additionalProperties\": {     \"currentSalesPrice\": [       {         \"articleUnitPrice\": \"39.95\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       },       {         \"articleUnitPrice\": \"479.4\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       }     ]   } } ```   ## Dry-Run  Generic `PUT`, `POST` and `DELETE` endpoints support to perform operations in a \"dry-run-mode\". Where possible, business logic is executed and the data submitted by the requester is validated. To use this functionality the requester can set the optional query parameter \"`dryRun`\" (boolean, default: `false`). The return is as far as possible as with a productive execution, except that 200 \"ok\" is returned in case of success. The meta properties (id, version, createdDate, lastModifiedDate) are not included in \"dry-run-responses\".  ### `POST /salesOrder?dryRun=true`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v2/salesOrder?dryRun=true\" \\   -d   '{ \"customerNumber\": \"4799\" }' ```  **Error Output:**  ```json {   \"detail\": \"customer not found\",   \"error\": \"customer not found\",   \"status\": 400,   \"title\": \"entity validation failed\",   \"type\": \"/webapp/view/api/errors.html#!/errors/validation\",   \"validationErrors\": [     {       \"detail\": \"referenced entity not found\",       \"instance\": \"salesOrder\",       \"location\": \"customerId\",       \"title\": \"referenced entity not found\",       \"type\": \"/webapp/view/api/errors.html#!/validation/reference\"     }   ] } ```  The response status will be 400 (Bad Request).  **Successful Output:**  ```json {   \"availability\": \"NOT_CHECKED\",   \"availabilityForAllWarehouses\": \"NOT_CHECKED\",   \"commissionSalesPartners\": [],   \"creatorId\": \"4451\",   \"currencyConversionDate\": 1699375721469,   \"currencyConversionRate\": \"1\",   \"customAttributes\": [],   \"customerId\": \"4799\",   \"customerNumber\": \"10000\",   \"deliveryAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"deliveryEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"disableEmailTemplate\": false,   \"dispatchCountryCode\": \"DE\",   \"factoring\": false,   \"fulfillmentProviderId\": \"3335\",   \"grossAmount\": \"0\",   \"grossAmountInCompanyCurrency\": \"0\",   \"headerDiscount\": \"0\",   \"headerSurcharge\": \"0\",   \"invoiceAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"invoiced\": false,   \"netAmount\": \"0\",   \"netAmountInCompanyCurrency\": \"0\",   \"nonStandardTaxId\": \"3492\",   \"nonStandardTaxName\": \"DE Steuerfrei Drittland (VK)\",   \"onlyServices\": false,   \"orderDate\": 1699311600000,   \"orderItems\": [],   \"paid\": false,   \"plannedShippingDate\": 1699311600000,   \"pricingDate\": 1699311600000,   \"projectMembers\": [],   \"projectModeActive\": false,   \"recordAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"recordCurrencyId\": \"256\",   \"recordCurrencyName\": \"EUR\",   \"recordEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"responsibleUserId\": \"4748\",   \"responsibleUserUsername\": \"karsten.kunde@example.com\",   \"salesChannel\": \"NET1\",   \"salesInvoiceEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"salesOrderPaymentType\": \"STANDARD\",   \"sentToRecipient\": false,   \"servicesFinished\": false,   \"shipped\": false,   \"shippingCostItems\": [],   \"shippingLabelsCount\": 1,   \"status\": \"ORDER_ENTRY_IN_PROGRESS\",   \"statusHistory\": [     {       \"status\": \"ORDER_ENTRY_IN_PROGRESS\",       \"statusDate\": 1699375721472,       \"userId\": \"4451\"     }   ],   \"tags\": [],   \"warehouseId\": \"4191\",   \"warehouseName\": \"Hauptlager\" } ```  The response status will be 200 (OK).   ## Optimistic locking  For the update operation the resources usually also support optimistic locking using the `version` property: if the `version` property is in the request body and it does not match the current `version`, then the request fails with an optimistic lock error. In that case the caller should again get the latest `version`, apply the changes and try the request again.   ## Basic Operations  The following entries will show you how to use the different basic operations (`GET`, `POST`, `PUT`, `DELETE`) and what an exemplary response they will give whether the operation was successful or not.   The following table will show you the HTTP status codes of the basic operations if the operation was successful:  | Operation | HTTP status code | |-----------|------------------| | GET       | 200 (OK)         | | POST      | 201 (Created)    | | PUT       | 200 (OK)         | | DELETE    | 204 (No Content) |  If you are not currently logged in to weclapp, you are using another browser or the AuthenticationToken was wrong you will get a response of `401 (Unauthorized)`. If you have insufficient privileges for the operation you will get a `403 (Forbidden)`. It is possible to disable the optimistic locking check by just omitting the `version` property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Get a specific entity instance  Each entity instance has its own URL where it can be retrieved. The URL is based on the entity id.  Performing a GET request on that URL returns the entity instance:  ### `GET /customer/id/3346`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/3346\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"version\": \"2\",       \"addresses\": [         {           \"id\": \"3348\",           \"version\": \"0\",           \"countryCode\": \"DE\",           \"createdDate\": 1487765943229,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1487765943229,           \"primeAddress\": true         },         {           \"id\": \"3976\",           \"version\": \"0\",           \"company\": \"11111\",           \"company2\": \"22222\",           \"countryCode\": \"DE\",           \"createdDate\": 1496040807652,           \"deliveryAddress\": false,           \"globalLocationNumber\": \"gln\",           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496040807648,           \"primeAddress\": false         }       ],       \"blocked\": false,       \"company\": \"Musterdaten GmbH\",       \"contacts\": [         {           \"id\": \"3377\",           \"version\": \"0\",           \"addresses\": [             {               \"id\": \"3379\",               \"version\": \"0\",               \"countryCode\": \"DE\",               \"createdDate\": 1487767121646,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1487767121645,               \"primeAddress\": true             }           ],           \"createdDate\": 1487767121649,           \"firstName\": \"Max\",           \"lastModifiedDate\": 1487767121642,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Musterdaten GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1487765943230,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1002\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496040807672,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  ## Create a new instance  Creating new instances is done by performing a POST request to the base URL of a resource.  The body for that request must have the same structure as the result of the \"get by id\" request, but usually not all properties need to be specified and there are defaults for some properties. Here are some general notes:  * id, version, createdDate and lastModifiedDate can usually not be set by the client, so those values are ignored if they are specified * references to other entities are often represented by two properties (usually id and some other more or less unique property of the referenced entity),   for example customer has currencyId and currencyName to reference the currency, when creating a new customer then it is not necessary   to specify both properties, one of them is usually enough as long as it specifies the referenced entity uniquely, if both are given then they   must not contradict each other * usually some required properties have sensible defaults, so if those are not given or null then the default will be used * boolean properties can be optional (default value would be set) or mandatory   ### `POST /customer`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v2/customer\" \\   -d   '{ \"customerNumber\": \"C1013\", \"partyType\": \"ORGANIZATION\", \"company\": \"Firma\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"Firma\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  The response status will be 201 (Created) and the response will have a `Location` header pointing to the URL of the created instance.   ## Update a specific instance  Updating an instances is done by performing a `PUT` request to the URL of the instance.  A successful response will have the status 200 (OK) and the response body will contain the updated entity.  Some special aspects must be considered when updating:  * the read-only properties like `createdDate` are ignored anyway, so they do not need to be given * `id` and `version` are processed as follows: if the `id` is given it must match the `id` of the updated instance and if the `version` is given then optimistic locking is enabled (see below) * for the references that use two properties it is again possible to specify only one of them, if both are given then they must not contradict each other * for complete entity updates boolean properties are always mandatory and need to be passed  ### Updating the complete entity  When updating it is generally necessary to specify all properties that are not `null`, all unspecified properties will be interpreted as `null`.  Since sometimes new properties are added to entities, it is strongly recommended that an API client always first gets the latest version using `GET/customer/id/{id}`, then modifies that JSON and finally performs the `PUT` request. Doing this ensures that new properties that the client does not know about are not accidentally overwritten with `null`.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/4391\" \\   -d  @- <<JSON {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } JSON ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  ### Updating only specific properties  It is also possible to update only specific properties. For this you only have to set the parameter `ignoreMissingProperties=true`. We recommend to always include `version` here as well to activate optimistic locking.  If you want to change lists (add, update or delete an item) stored in the entity, it is sufficient to specify the id for existing item entities.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/4391?ignoreMissingProperties=true\" \\   -d '{ \"version\": \"0\", \"company\": \"NEUER FIRMENNAME!!!\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```   ### Optimistic locking   For the update operation the resources usually also support optimistic locking using the version property: if the version property is in the request body and it does not match the current version, then the request fails with an optimistic lock error. In that case the caller should again get the latest version, apply the changes and try the request again. It is possible to disable the optimistic locking check by just omitting the version property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Delete a specific instance  Deleting an instances is done by performing a `DELETE` request to the URL of the instance.  ### `DELETE /customer/id/{id}`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" -X DELETE \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/4391\" ```  If the deletion is possible it is performed and the response status will be 204 (No Content), otherwise an error response will be returned.  <span id=\"errors\"> </span>  # API error reference  weclapp API errors are basically conformant to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with some notable differences:  * The migration to the RFC 7807 structure is an ongoing process, so some compatibility mechanisms are in place for now:   * The responses come with \"`Content-Type: application/json`\" instead of \"`Content-Type: application/problem+json`\"   * The \"unstructured\" error responses that have been in use until now are still part of the response JSON, so existing code should work without changes.   * Detail information that _should_ be there according to the new structure may be still missing. This applies especially to all kinds of validation errors. * Two custom fields have been added to the response structure: \"location\" and \"validationErrors\". See the general description below and the individual error descriptions for details on these.  ## Error JSON structure  The error JSON is structured as described in [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with two additional properties:  | Property         | Datatype         | Description                                                                                                                                                                                                                                       | |------------------|------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type             | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.              | | title            | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4).      | | status           | integer          | (RFC7807) The HTTP status code (RFC7231, Section 6) generated by the origin server for this occurrence of the problem.                                                                                                                            | | detail           | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem. This may be missing when the actual detail information either would be security sensitive (e.g. on unexpected errors) or is contained in the validationErrors. | | instance         | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this typically is the URI to the affected entity.                                      | | validationErrors | array of objects | List of found validation errors, with a structure modeled after RFC 7807 as well (see below).                                                                                                                                                     |  Validation errors have a similar structure:  | Property  | Datatype         | Description                                                                                                                                                                                                                                  | |-----------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type      | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.         | | title     | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4). | | detail    | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem.                                                                                                                                                           | | errorCode | string           | Unique identifier of the concrete business error                                                                                                                                                                                             | | instance  | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this is the name of the affected parameter or the URI to the affected entity.     | | location  | string           | The JsonPath location of the affected property.                                                                                                                                                                                              | | allowed   | array of strings | List of allowed values, with semantics dependent on the concrete validation error.                                                                                                                                                           |   ## Error reference   <span id=\"!/errors/context\"></span>  ### \"context\": operation not possible in this context  |            |                                       | |------------|---------------------------------------| | description | The operation is not possible in this context or with the current state of the data                  | | type       | [/webapp/view/api/errors.html#!/errors/context](/webapp/view/api/errors.html#!/errors/context)        | | status     | 409 (Conflict)|  <span id=\"!/errors/conversation\"></span>  ### \"conversation\": existing conversation (parameter 'cid') is not allowed  |            |                                       | |------------|---------------------------------------| | description | The request was sent in the context of a running session, which is not allowed for the (stateless) API                  | | type       | [/webapp/view/api/errors.html#!/errors/conversation](/webapp/view/api/errors.html#!/errors/conversation)        | | status     | 400 (Bad Request)| | detail | human readable information on the conversation |  <span id=\"!/errors/entity_not_found\"></span>  ### \"entity_not_found\": (sub)entity not found  |            |                                       | |------------|---------------------------------------| | description | The specified entity or (more likely) a referenced sub-entity could not be found.                  | | type       | [/webapp/view/api/errors.html#!/errors/entity_not_found](/webapp/view/api/errors.html#!/errors/entity_not_found)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/forbidden\"></span>  ### \"forbidden\": insufficient privileges  |            |                                       | |------------|---------------------------------------| | description | The provided credentials are not sufficient to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/forbidden](/webapp/view/api/errors.html#!/errors/forbidden)        | | status     | 403 (Forbidden)|  <span id=\"!/errors/invalid_json\"></span>  ### \"invalid_json\": invalid json  |            |                                       | |------------|---------------------------------------| | description | The JSON passed in the request body could not be parsed or the body is not JSON at all.                  | | type       | [/webapp/view/api/errors.html#!/errors/invalid_json](/webapp/view/api/errors.html#!/errors/invalid_json)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/not_found\"></span>  ### \"not_found\": resource not found  |            |                                       | |------------|---------------------------------------| | description | The API endpoint / method / entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/errors/not_found](/webapp/view/api/errors.html#!/errors/not_found)        | | status     | 404 (Not Found)|  <span id=\"!/errors/optimistic_lock\"></span>  ### \"optimistic_lock\": optimistic lock error  |            |                                       | |------------|---------------------------------------| | description | Optimistic Lock error. This appears if an entity you tried to modify has been modified by someone else in the meantime. See 'Optimistic Locking' in the 'API operations sample' section of the docs.                  | | type       | [/webapp/view/api/errors.html#!/errors/optimistic_lock](/webapp/view/api/errors.html#!/errors/optimistic_lock)        | | status     | 409 (Conflict)| | instance | URI to affected entity if available |  <span id=\"!/errors/persistence\"></span>  ### \"persistence\": persistence error  |            |                                       | |------------|---------------------------------------| | description | Catchall for persistence related problems that are not covered by more specific errors. In some cases it is sufficient to try again after a short time, but if the problem persists please contact support.                  | | type       | [/webapp/view/api/errors.html#!/errors/persistence](/webapp/view/api/errors.html#!/errors/persistence)        | | status     | 409 (Conflict)|  <span id=\"!/errors/unauthorized\"></span>  ### \"unauthorized\": missing permission  |            |                                       | |------------|---------------------------------------| | description | Authorization or authentication problem                  | | type       | [/webapp/view/api/errors.html#!/errors/unauthorized](/webapp/view/api/errors.html#!/errors/unauthorized)        | | status     | 401 (Unauthorized)|  <span id=\"!/errors/unexpected\"></span>  ### \"unexpected\": unexpected error  |            |                                       | |------------|---------------------------------------| | description | Catchall error for everything that is not covered by more specific errors. This is typically caused by a bug in weclapp.                  | | type       | [/webapp/view/api/errors.html#!/errors/unexpected](/webapp/view/api/errors.html#!/errors/unexpected)        | | status     | 500 (Internal Server Error)|  <span id=\"!/errors/unsupported_mime_type\"></span>  ### \"unsupported_mime_type\": unsupported mime type  |            |                                       | |------------|---------------------------------------| | description | The provided file type is not supported to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/unsupported_mime_type](/webapp/view/api/errors.html#!/errors/unsupported_mime_type)        | | status     | 415 (Unsupported Media Type)|  <span id=\"!/errors/validation\"></span>  ### \"validation\": validation failed  |            |                                       | |------------|---------------------------------------| | description | The input (entity properties / URL parameters) is malformed or not allowed in this context                  | | type       | [/webapp/view/api/errors.html#!/errors/validation](/webapp/view/api/errors.html#!/errors/validation)        | | status     | 400 (Bad Request)| | validationErrors | validation errors |  ## Validation error reference   <span id=\"!/validation/authorization\"></span>  ### \"authorization\": no authorization to access property or referenced entity  |            |                                       | |------------|---------------------------------------| | description | The client lacks authorization to access the property or referenced entity                  | | type       | [/webapp/view/api/errors.html#!/validation/authorization](/webapp/view/api/errors.html#!/validation/authorization)        |  <span id=\"!/validation/blocked\"></span>  ### \"blocked\": operation was blocked  |            |                                       | |------------|---------------------------------------| | description | The operation was blocked by referenced entities                  | | type       | [/webapp/view/api/errors.html#!/validation/blocked](/webapp/view/api/errors.html#!/validation/blocked)        |  <span id=\"!/validation/consistency\"></span>  ### \"consistency\": values are inconsistent  |            |                                       | |------------|---------------------------------------| | description | The given values are inconsistent (general, unspecific error)                  | | type       | [/webapp/view/api/errors.html#!/validation/consistency](/webapp/view/api/errors.html#!/validation/consistency)        |  <span id=\"!/validation/digits\"></span>  ### \"digits\": maximum number of digits exceeded  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has more than the allowed maximum number of integer and/or fractional digits                  | | type       | [/webapp/view/api/errors.html#!/validation/digits](/webapp/view/api/errors.html#!/validation/digits)        | | allowed | maximum allowed integer digits, maximum allowed fraction digits |  <span id=\"!/validation/duplicate\"></span>  ### \"duplicate\": entity is a duplicate  |            |                                       | |------------|---------------------------------------| | description | The given (sub-)entity is a duplicate                  | | type       | [/webapp/view/api/errors.html#!/validation/duplicate](/webapp/view/api/errors.html#!/validation/duplicate)        |  <span id=\"!/validation/email\"></span>  ### \"email\": not a well-formed email  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address                  | | type       | [/webapp/view/api/errors.html#!/validation/email](/webapp/view/api/errors.html#!/validation/email)        |  <span id=\"!/validation/email_or_domain\"></span>  ### \"email_or_domain\": not a well-formed email or domain  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address or internet domain name                  | | type       | [/webapp/view/api/errors.html#!/validation/email_or_domain](/webapp/view/api/errors.html#!/validation/email_or_domain)        |  <span id=\"!/validation/empty\"></span>  ### \"empty\": value must be empty  |            |                                       | |------------|---------------------------------------| | description | The value given must be left blank in this context, but is present                  | | type       | [/webapp/view/api/errors.html#!/validation/empty](/webapp/view/api/errors.html#!/validation/empty)        |  <span id=\"!/validation/enum\"></span>  ### \"enum\": unsupported enum value  |            |                                       | |------------|---------------------------------------| | description | The given enum value is unknown or unsupported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/enum](/webapp/view/api/errors.html#!/validation/enum)        | | allowed | all known / allowed (enum) values |  <span id=\"!/validation/future\"></span>  ### \"future\": timestamp has to be in the future  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the future but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/future](/webapp/view/api/errors.html#!/validation/future)        |  <span id=\"!/validation/greater_than\"></span>  ### \"greater_than\": value has to be above allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be larger than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/greater_than](/webapp/view/api/errors.html#!/validation/greater_than)        | | allowed | lower limit (excluded) |  <span id=\"!/validation/less_than\"></span>  ### \"less_than\": value has to be below allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be smaller than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/less_than](/webapp/view/api/errors.html#!/validation/less_than)        | | allowed | upper limit (excluded) |  <span id=\"!/validation/max\"></span>  ### \"max\": value is above allowed maximum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is larger than the allowed maximum                  | | type       | [/webapp/view/api/errors.html#!/validation/max](/webapp/view/api/errors.html#!/validation/max)        | | allowed | maximum allowed value |  <span id=\"!/validation/min\"></span>  ### \"min\": value is below allowed minimum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is smaller than the allowed minimum                  | | type       | [/webapp/view/api/errors.html#!/validation/min](/webapp/view/api/errors.html#!/validation/min)        | | allowed | minimum allowed value |  <span id=\"!/validation/not_empty\"></span>  ### \"not_empty\": value must not be empty  |            |                                       | |------------|---------------------------------------| | description | The value given is required, but is missing or blank                  | | type       | [/webapp/view/api/errors.html#!/validation/not_empty](/webapp/view/api/errors.html#!/validation/not_empty)        |  <span id=\"!/validation/past\"></span>  ### \"past\": timestamp has to be in the past  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the past but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/past](/webapp/view/api/errors.html#!/validation/past)        |  <span id=\"!/validation/pattern\"></span>  ### \"pattern\": value has to conform to a specific pattern  |            |                                       | |------------|---------------------------------------| | description | The text given does not conform to the allowed pattern                  | | type       | [/webapp/view/api/errors.html#!/validation/pattern](/webapp/view/api/errors.html#!/validation/pattern)        | | allowed | the pattern (regular expression) |  <span id=\"!/validation/reference\"></span>  ### \"reference\": referenced entity not found  |            |                                       | |------------|---------------------------------------| | description | The referenced entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/validation/reference](/webapp/view/api/errors.html#!/validation/reference)        |  <span id=\"!/validation/size\"></span>  ### \"size\": size is outside allowed range  |            |                                       | |------------|---------------------------------------| | description | The text or collection given has not enough or too many characters or elements                  | | type       | [/webapp/view/api/errors.html#!/validation/size](/webapp/view/api/errors.html#!/validation/size)        | | allowed | minimum size, maximum size |  <span id=\"!/validation/syntax\"></span>  ### \"syntax\": expression cannot be interpreted  |            |                                       | |------------|---------------------------------------| | description | The given expression does not conform to the expression syntax                  | | type       | [/webapp/view/api/errors.html#!/validation/syntax](/webapp/view/api/errors.html#!/validation/syntax)        |  <span id=\"!/validation/type\"></span>  ### \"type\": unexpected data type  |            |                                       | |------------|---------------------------------------| | description | The given value is of a data type that's not supported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/type](/webapp/view/api/errors.html#!/validation/type)        |
 *
 * The version of the OpenAPI document: 2
 * Contact: support@weclapp.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\weclapp\Model;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * PermissionString Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PermissionString
{
    /**
     * Possible values of this enum
     */
    public const ENTITY_ACCOUNT_DETERMINATION_DELETE = 'entity-accountDetermination-delete';

    public const ENTITY_ACCOUNT_DETERMINATION_READ = 'entity-accountDetermination-read';

    public const ENTITY_ACCOUNT_DETERMINATION_UPDATE = 'entity-accountDetermination-update';

    public const ENTITY_ACCOUNTING_TRANSACTION_DELETE = 'entity-accountingTransaction-delete';

    public const ENTITY_ACCOUNTING_TRANSACTION_IMPORT = 'entity-accountingTransaction-import';

    public const ENTITY_ACCOUNTING_TRANSACTION_READ = 'entity-accountingTransaction-read';

    public const ENTITY_ACCOUNTING_TRANSACTION_UPDATE = 'entity-accountingTransaction-update';

    public const ENTITY_APP_SETTINGS_DELETE = 'entity-appSettings-delete';

    public const ENTITY_APP_SETTINGS_READ = 'entity-appSettings-read';

    public const ENTITY_APP_SETTINGS_UPDATE = 'entity-appSettings-update';

    public const ENTITY_ARCHIVED_EMAIL_DELETE = 'entity-archivedEmail-delete';

    public const ENTITY_ARCHIVED_EMAIL_READ = 'entity-archivedEmail-read';

    public const ENTITY_ARCHIVED_EMAIL_UPDATE = 'entity-archivedEmail-update';

    public const ENTITY_ARTICLE_BATCH_NUMBER = 'entity-article-batchNumber';

    public const ENTITY_ARTICLE_BILL_OF_MATERIAL = 'entity-article-billOfMaterial';

    public const ENTITY_ARTICLE_COST = 'entity-article-cost';

    public const ENTITY_ARTICLE_DELETE = 'entity-article-delete';

    public const ENTITY_ARTICLE_DELETE_PRICE = 'entity-article-deletePrice';

    public const ENTITY_ARTICLE_EXPORT = 'entity-article-export';

    public const ENTITY_ARTICLE_EXPORT_PRICE = 'entity-article-exportPrice';

    public const ENTITY_ARTICLE_IMPORT = 'entity-article-import';

    public const ENTITY_ARTICLE_IMPORT_PRICE = 'entity-article-importPrice';

    public const ENTITY_ARTICLE_READ = 'entity-article-read';

    public const ENTITY_ARTICLE_READ_BARCODE = 'entity-article-readBarcode';

    public const ENTITY_ARTICLE_READ_INVENTORY_VALUATION = 'entity-article-readInventoryValuation';

    public const ENTITY_ARTICLE_READ_PRICE = 'entity-article-readPrice';

    public const ENTITY_ARTICLE_SERIAL_NUMBER = 'entity-article-serialNumber';

    public const ENTITY_ARTICLE_SETTINGS = 'entity-article-settings';

    public const ENTITY_ARTICLE_UPDATE = 'entity-article-update';

    public const ENTITY_ARTICLE_UPDATE_ACCOUNTING_DATA = 'entity-article-updateAccountingData';

    public const ENTITY_ARTICLE_UPDATE_ACTIVE = 'entity-article-updateActive';

    public const ENTITY_ARTICLE_UPDATE_ARTICLE_TYPE = 'entity-article-updateArticleType';

    public const ENTITY_ARTICLE_UPDATE_CONVERSION_RATE = 'entity-article-updateConversionRate';

    public const ENTITY_ARTICLE_UPDATE_CUSTOMS_TARIFF_NUMBER = 'entity-article-updateCustomsTariffNumber';

    public const ENTITY_ARTICLE_UPDATE_IMAGE = 'entity-article-updateImage';

    public const ENTITY_ARTICLE_UPDATE_INVENTORY_VALUATION = 'entity-article-updateInventoryValuation';

    public const ENTITY_ARTICLE_UPDATE_MARKET_VALUE = 'entity-article-updateMarketValue';

    public const ENTITY_ARTICLE_UPDATE_MASS_PRICE_CALCULATION = 'entity-article-updateMassPriceCalculation';

    public const ENTITY_ARTICLE_UPDATE_NUMBER = 'entity-article-updateNumber';

    public const ENTITY_ARTICLE_UPDATE_PRICE = 'entity-article-updatePrice';

    public const ENTITY_ARTICLE_UPDATE_PRINT_DATASHEET = 'entity-article-updatePrintDatasheet';

    public const ENTITY_ARTICLE_UPDATE_PRINT_LABELS = 'entity-article-updatePrintLabels';

    public const ENTITY_ARTICLE_UPDATE_SHIPMENT_INFO = 'entity-article-updateShipmentInfo';

    public const ENTITY_ARTICLE_ACCOUNTING_CODE_DELETE = 'entity-articleAccountingCode-delete';

    public const ENTITY_ARTICLE_ACCOUNTING_CODE_READ = 'entity-articleAccountingCode-read';

    public const ENTITY_ARTICLE_ACCOUNTING_CODE_UPDATE = 'entity-articleAccountingCode-update';

    public const ENTITY_ARTICLE_CATEGORY_DELETE = 'entity-articleCategory-delete';

    public const ENTITY_ARTICLE_CATEGORY_EXPORT = 'entity-articleCategory-export';

    public const ENTITY_ARTICLE_CATEGORY_IMPORT = 'entity-articleCategory-import';

    public const ENTITY_ARTICLE_CATEGORY_READ = 'entity-articleCategory-read';

    public const ENTITY_ARTICLE_CATEGORY_UPDATE = 'entity-articleCategory-update';

    public const ENTITY_ARTICLE_CATEGORY_UPDATE_ACCOUNTING_DATA = 'entity-articleCategory-updateAccountingData';

    public const ENTITY_ARTICLE_ITEM_GROUP_DELETE = 'entity-articleItemGroup-delete';

    public const ENTITY_ARTICLE_ITEM_GROUP_READ = 'entity-articleItemGroup-read';

    public const ENTITY_ARTICLE_ITEM_GROUP_UPDATE = 'entity-articleItemGroup-update';

    public const ENTITY_ARTICLE_RATING_DELETE = 'entity-articleRating-delete';

    public const ENTITY_ARTICLE_RATING_READ = 'entity-articleRating-read';

    public const ENTITY_ARTICLE_RATING_UPDATE = 'entity-articleRating-update';

    public const ENTITY_ARTICLE_STATUS_DELETE = 'entity-articleStatus-delete';

    public const ENTITY_ARTICLE_STATUS_READ = 'entity-articleStatus-read';

    public const ENTITY_ARTICLE_STATUS_UPDATE = 'entity-articleStatus-update';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_DELETE = 'entity-articleSupplySource-delete';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_DELETE_PRICE = 'entity-articleSupplySource-deletePrice';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_EXPORT = 'entity-articleSupplySource-export';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_IMPORT = 'entity-articleSupplySource-import';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_READ = 'entity-articleSupplySource-read';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_READ_PRICE = 'entity-articleSupplySource-readPrice';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_UPDATE = 'entity-articleSupplySource-update';

    public const ENTITY_ARTICLE_SUPPLY_SOURCE_UPDATE_PRICE = 'entity-articleSupplySource-updatePrice';

    public const ENTITY_ATTENDANCE_DELETE = 'entity-attendance-delete';

    public const ENTITY_ATTENDANCE_READ_ALL = 'entity-attendance-readAll';

    public const ENTITY_ATTENDANCE_SETTINGS = 'entity-attendance-settings';

    public const ENTITY_ATTENDANCE_UPDATE = 'entity-attendance-update';

    public const ENTITY_AUTHENTICATION_TOKEN_READ = 'entity-authenticationToken-read';

    public const ENTITY_AUTHENTICATION_TOKEN_UPDATE = 'entity-authenticationToken-update';

    public const ENTITY_BANK_ACCOUNT_DELETE = 'entity-bankAccount-delete';

    public const ENTITY_BANK_ACCOUNT_READ = 'entity-bankAccount-read';

    public const ENTITY_BANK_ACCOUNT_UPDATE = 'entity-bankAccount-update';

    public const ENTITY_BLANKET_PURCHASE_ORDER_DELETE = 'entity-blanketPurchaseOrder-delete';

    public const ENTITY_BLANKET_PURCHASE_ORDER_READ = 'entity-blanketPurchaseOrder-read';

    public const ENTITY_BLANKET_PURCHASE_ORDER_UPDATE = 'entity-blanketPurchaseOrder-update';

    public const ENTITY_BOOKING_TEMPLATE_DELETE = 'entity-bookingTemplate-delete';

    public const ENTITY_BOOKING_TEMPLATE_READ = 'entity-bookingTemplate-read';

    public const ENTITY_BOOKING_TEMPLATE_UPDATE = 'entity-bookingTemplate-update';

    public const ENTITY_BUSINESS_HOLIDAYS_DELETE = 'entity-businessHolidays-delete';

    public const ENTITY_BUSINESS_HOLIDAYS_READ = 'entity-businessHolidays-read';

    public const ENTITY_BUSINESS_HOLIDAYS_UPDATE = 'entity-businessHolidays-update';

    public const ENTITY_BUSINESS_HOURS_DELETE = 'entity-businessHours-delete';

    public const ENTITY_BUSINESS_HOURS_READ = 'entity-businessHours-read';

    public const ENTITY_BUSINESS_HOURS_UPDATE = 'entity-businessHours-update';

    public const ENTITY_CALENDAR_DELETE = 'entity-calendar-delete';

    public const ENTITY_CALENDAR_READ = 'entity-calendar-read';

    public const ENTITY_CALENDAR_UPDATE = 'entity-calendar-update';

    public const ENTITY_CAMPAIGN_DELETE = 'entity-campaign-delete';

    public const ENTITY_CAMPAIGN_READ = 'entity-campaign-read';

    public const ENTITY_CAMPAIGN_UPDATE = 'entity-campaign-update';

    public const ENTITY_CASH_ACCOUNT_DELETE = 'entity-cashAccount-delete';

    public const ENTITY_CASH_ACCOUNT_READ = 'entity-cashAccount-read';

    public const ENTITY_CASH_ACCOUNT_UPDATE = 'entity-cashAccount-update';

    public const ENTITY_CASH_ACCOUNT_SHEET_DELETE = 'entity-cashAccountSheet-delete';

    public const ENTITY_CASH_ACCOUNT_SHEET_READ = 'entity-cashAccountSheet-read';

    public const ENTITY_CASH_ACCOUNT_SHEET_UPDATE = 'entity-cashAccountSheet-update';

    public const ENTITY_CASH_ACCOUNT_SHEET_UPDATE_CLOSE = 'entity-cashAccountSheet-updateClose';

    public const ENTITY_COMMERCIAL_LANGUAGE_DELETE = 'entity-commercialLanguage-delete';

    public const ENTITY_COMMERCIAL_LANGUAGE_READ = 'entity-commercialLanguage-read';

    public const ENTITY_COMMERCIAL_LANGUAGE_UPDATE = 'entity-commercialLanguage-update';

    public const ENTITY_COMPANY_SIZE_DELETE = 'entity-companySize-delete';

    public const ENTITY_COMPANY_SIZE_READ = 'entity-companySize-read';

    public const ENTITY_COMPANY_SIZE_UPDATE = 'entity-companySize-update';

    public const ENTITY_CONTRACT_BILLING = 'entity-contract-billing';

    public const ENTITY_CONTRACT_CREATE_DOCUMENTS = 'entity-contract-createDocuments';

    public const ENTITY_CONTRACT_DELETE = 'entity-contract-delete';

    public const ENTITY_CONTRACT_IMPORT = 'entity-contract-import';

    public const ENTITY_CONTRACT_READ = 'entity-contract-read';

    public const ENTITY_CONTRACT_READ_ALL = 'entity-contract-readAll';

    public const ENTITY_CONTRACT_SETTINGS = 'entity-contract-settings';

    public const ENTITY_CONTRACT_UPDATE = 'entity-contract-update';

    public const ENTITY_CONTRACT_AUTHORIZATION_UNIT_DELETE = 'entity-contractAuthorizationUnit-delete';

    public const ENTITY_CONTRACT_AUTHORIZATION_UNIT_READ = 'entity-contractAuthorizationUnit-read';

    public const ENTITY_CONTRACT_AUTHORIZATION_UNIT_UPDATE = 'entity-contractAuthorizationUnit-update';

    public const ENTITY_CONTRACT_BILLING_GROUP_DELETE = 'entity-contractBillingGroup-delete';

    public const ENTITY_CONTRACT_BILLING_GROUP_READ = 'entity-contractBillingGroup-read';

    public const ENTITY_CONTRACT_BILLING_GROUP_UPDATE = 'entity-contractBillingGroup-update';

    public const ENTITY_CONTRACT_TERMINATION_REASON_DELETE = 'entity-contractTerminationReason-delete';

    public const ENTITY_CONTRACT_TERMINATION_REASON_READ = 'entity-contractTerminationReason-read';

    public const ENTITY_CONTRACT_TERMINATION_REASON_UPDATE = 'entity-contractTerminationReason-update';

    public const ENTITY_CONTRACT_TYPE_DELETE = 'entity-contractType-delete';

    public const ENTITY_CONTRACT_TYPE_READ = 'entity-contractType-read';

    public const ENTITY_CONTRACT_TYPE_UPDATE = 'entity-contractType-update';

    public const ENTITY_COST_CENTER_DELETE = 'entity-costCenter-delete';

    public const ENTITY_COST_CENTER_EXPORT = 'entity-costCenter-export';

    public const ENTITY_COST_CENTER_IMPORT = 'entity-costCenter-import';

    public const ENTITY_COST_CENTER_READ = 'entity-costCenter-read';

    public const ENTITY_COST_CENTER_UPDATE = 'entity-costCenter-update';

    public const ENTITY_COST_CENTER_GROUP_DELETE = 'entity-costCenterGroup-delete';

    public const ENTITY_COST_CENTER_GROUP_READ = 'entity-costCenterGroup-read';

    public const ENTITY_COST_CENTER_GROUP_UPDATE = 'entity-costCenterGroup-update';

    public const ENTITY_COST_TYPE_DELETE = 'entity-costType-delete';

    public const ENTITY_COST_TYPE_READ = 'entity-costType-read';

    public const ENTITY_COST_TYPE_UPDATE = 'entity-costType-update';

    public const ENTITY_CURRENCY_DELETE = 'entity-currency-delete';

    public const ENTITY_CURRENCY_READ = 'entity-currency-read';

    public const ENTITY_CURRENCY_UPDATE = 'entity-currency-update';

    public const ENTITY_CUSTOM_ATTRIBUTE_DEFINITION_DELETE = 'entity-customAttributeDefinition-delete';

    public const ENTITY_CUSTOM_ATTRIBUTE_DEFINITION_UPDATE = 'entity-customAttributeDefinition-update';

    public const ENTITY_CUSTOM_FONT_DELETE = 'entity-customFont-delete';

    public const ENTITY_CUSTOM_FONT_READ = 'entity-customFont-read';

    public const ENTITY_CUSTOM_FONT_UPDATE = 'entity-customFont-update';

    public const ENTITY_CUSTOM_LABEL_FORMAT_DELETE = 'entity-customLabelFormat-delete';

    public const ENTITY_CUSTOM_LABEL_FORMAT_READ = 'entity-customLabelFormat-read';

    public const ENTITY_CUSTOM_LABEL_FORMAT_UPDATE = 'entity-customLabelFormat-update';

    public const ENTITY_CUSTOMER_CATEGORY_DELETE = 'entity-customerCategory-delete';

    public const ENTITY_CUSTOMER_CATEGORY_READ = 'entity-customerCategory-read';

    public const ENTITY_CUSTOMER_CATEGORY_UPDATE = 'entity-customerCategory-update';

    public const ENTITY_CUSTOMER_LEAD_LOSS_REASON_DELETE = 'entity-customerLeadLossReason-delete';

    public const ENTITY_CUSTOMER_LEAD_LOSS_REASON_READ = 'entity-customerLeadLossReason-read';

    public const ENTITY_CUSTOMER_LEAD_LOSS_REASON_UPDATE = 'entity-customerLeadLossReason-update';

    public const ENTITY_CUSTOMER_TOPIC_DELETE = 'entity-customerTopic-delete';

    public const ENTITY_CUSTOMER_TOPIC_READ = 'entity-customerTopic-read';

    public const ENTITY_CUSTOMER_TOPIC_UPDATE = 'entity-customerTopic-update';

    public const ENTITY_CUSTOMS_TARIFF_NUMBER_DELETE = 'entity-customsTariffNumber-delete';

    public const ENTITY_CUSTOMS_TARIFF_NUMBER_READ = 'entity-customsTariffNumber-read';

    public const ENTITY_CUSTOMS_TARIFF_NUMBER_UPDATE = 'entity-customsTariffNumber-update';

    public const ENTITY_DEFAULT_INTEREST_CONFIG_DELETE = 'entity-defaultInterestConfig-delete';

    public const ENTITY_DEFAULT_INTEREST_CONFIG_READ = 'entity-defaultInterestConfig-read';

    public const ENTITY_DEFAULT_INTEREST_CONFIG_UPDATE = 'entity-defaultInterestConfig-update';

    public const ENTITY_DOCUMENT_FOLDER_DELETE = 'entity-documentFolder-delete';

    public const ENTITY_DOCUMENT_FOLDER_READ = 'entity-documentFolder-read';

    public const ENTITY_DOCUMENT_FOLDER_UPDATE = 'entity-documentFolder-update';

    public const ENTITY_DOCUMENT_FOLDER_UPDATE_PUBLIC_PAGE_UUID = 'entity-documentFolder-updatePublicPageUuid';

    public const ENTITY_DUNNING_LEVEL_DELETE = 'entity-dunningLevel-delete';

    public const ENTITY_DUNNING_LEVEL_READ = 'entity-dunningLevel-read';

    public const ENTITY_DUNNING_LEVEL_UPDATE = 'entity-dunningLevel-update';

    public const ENTITY_DUNNING_RUN_DELETE = 'entity-dunningRun-delete';

    public const ENTITY_DUNNING_RUN_READ = 'entity-dunningRun-read';

    public const ENTITY_DUNNING_RUN_SETTINGS = 'entity-dunningRun-settings';

    public const ENTITY_DUNNING_RUN_UPDATE = 'entity-dunningRun-update';

    public const ENTITY_ERIC_TRANSFER_LOG_READ = 'entity-ericTransferLog-read';

    public const ENTITY_ERIC_TRANSFER_LOG_UPDATE = 'entity-ericTransferLog-update';

    public const ENTITY_EXTERNAL_CONNECTION_DELETE = 'entity-externalConnection-delete';

    public const ENTITY_EXTERNAL_CONNECTION_READ = 'entity-externalConnection-read';

    public const ENTITY_EXTERNAL_CONNECTION_UPDATE = 'entity-externalConnection-update';

    public const ENTITY_FINANCIAL_YEAR_DELETE = 'entity-financialYear-delete';

    public const ENTITY_FINANCIAL_YEAR_READ = 'entity-financialYear-read';

    public const ENTITY_FINANCIAL_YEAR_UPDATE = 'entity-financialYear-update';

    public const ENTITY_FINANCIAL_YEAR_UPDATE_POSTING_PERIOD = 'entity-financialYear-updatePostingPeriod';

    public const ENTITY_FORM_TEXT_BLOCK_DELETE = 'entity-formTextBlock-delete';

    public const ENTITY_FORM_TEXT_BLOCK_READ = 'entity-formTextBlock-read';

    public const ENTITY_FORM_TEXT_BLOCK_UPDATE = 'entity-formTextBlock-update';

    public const ENTITY_FORM_VARIANT_DELETE = 'entity-formVariant-delete';

    public const ENTITY_FORM_VARIANT_READ = 'entity-formVariant-read';

    public const ENTITY_FORM_VARIANT_UPDATE = 'entity-formVariant-update';

    public const ENTITY_FULFILLMENT_PROVIDER_DELETE = 'entity-fulfillmentProvider-delete';

    public const ENTITY_FULFILLMENT_PROVIDER_READ = 'entity-fulfillmentProvider-read';

    public const ENTITY_FULFILLMENT_PROVIDER_UPDATE = 'entity-fulfillmentProvider-update';

    public const ENTITY_GROUPWARE_CONTACT_DELETE = 'entity-groupwareContact-delete';

    public const ENTITY_GROUPWARE_CONTACT_READ = 'entity-groupwareContact-read';

    public const ENTITY_GROUPWARE_CONTACT_UPDATE = 'entity-groupwareContact-update';

    public const ENTITY_HELPDESK_CUSTOMER_ORGANIZATION_READ = 'entity-helpdeskCustomerOrganization-read';

    public const ENTITY_HELPDESK_CUSTOMER_ORGANIZATION_UPDATE = 'entity-helpdeskCustomerOrganization-update';

    public const ENTITY_INCOMING_GOODS_CREATE_WITHOUT_PURCHASE_ORDER = 'entity-incomingGoods-createWithoutPurchaseOrder';

    public const ENTITY_INCOMING_GOODS_DELETE = 'entity-incomingGoods-delete';

    public const ENTITY_INCOMING_GOODS_READ = 'entity-incomingGoods-read';

    public const ENTITY_INCOMING_GOODS_SETTINGS = 'entity-incomingGoods-settings';

    public const ENTITY_INCOMING_GOODS_UPDATE = 'entity-incomingGoods-update';

    public const ENTITY_INTERNAL_TRANSPORT_REFERENCE_CREATE_PERMANENT_TRANSPORT_REFERENCE = 'entity-internalTransportReference-createPermanentTransportReference';

    public const ENTITY_INTERNAL_TRANSPORT_REFERENCE_DELETE = 'entity-internalTransportReference-delete';

    public const ENTITY_INTERNAL_TRANSPORT_REFERENCE_READ = 'entity-internalTransportReference-read';

    public const ENTITY_INTERNAL_TRANSPORT_REFERENCE_UPDATE = 'entity-internalTransportReference-update';

    public const ENTITY_INVENTORY_CREATE_DOCUMENTS = 'entity-inventory-createDocuments';

    public const ENTITY_INVENTORY_IMPORT = 'entity-inventory-import';

    public const ENTITY_INVENTORY_READ = 'entity-inventory-read';

    public const ENTITY_INVENTORY_UPDATE = 'entity-inventory-update';

    public const ENTITY_LABEL_VARIANT_DELETE = 'entity-labelVariant-delete';

    public const ENTITY_LABEL_VARIANT_READ = 'entity-labelVariant-read';

    public const ENTITY_LABEL_VARIANT_UPDATE = 'entity-labelVariant-update';

    public const ENTITY_LEAD_RATING_DELETE = 'entity-leadRating-delete';

    public const ENTITY_LEAD_RATING_READ = 'entity-leadRating-read';

    public const ENTITY_LEAD_RATING_UPDATE = 'entity-leadRating-update';

    public const ENTITY_LEAD_SOURCE_DELETE = 'entity-leadSource-delete';

    public const ENTITY_LEAD_SOURCE_READ = 'entity-leadSource-read';

    public const ENTITY_LEAD_SOURCE_UPDATE = 'entity-leadSource-update';

    public const ENTITY_LEDGER_ACCOUNT_DELETE = 'entity-ledgerAccount-delete';

    public const ENTITY_LEDGER_ACCOUNT_READ = 'entity-ledgerAccount-read';

    public const ENTITY_LEDGER_ACCOUNT_UPDATE = 'entity-ledgerAccount-update';

    public const ENTITY_LEGAL_FORM_DELETE = 'entity-legalForm-delete';

    public const ENTITY_LEGAL_FORM_READ = 'entity-legalForm-read';

    public const ENTITY_LEGAL_FORM_UPDATE = 'entity-legalForm-update';

    public const ENTITY_LOADING_EQUIPMENT_IDENTIFIER_DELETE = 'entity-loadingEquipmentIdentifier-delete';

    public const ENTITY_LOADING_EQUIPMENT_IDENTIFIER_READ = 'entity-loadingEquipmentIdentifier-read';

    public const ENTITY_LOADING_EQUIPMENT_IDENTIFIER_UPDATE = 'entity-loadingEquipmentIdentifier-update';

    public const ENTITY_MAIL_ACCOUNT_DELETE = 'entity-mailAccount-delete';

    public const ENTITY_MAIL_ACCOUNT_READ = 'entity-mailAccount-read';

    public const ENTITY_MAIL_ACCOUNT_UPDATE = 'entity-mailAccount-update';

    public const ENTITY_MAIL_MESSAGE_DELETE = 'entity-mailMessage-delete';

    public const ENTITY_MAIL_MESSAGE_READ = 'entity-mailMessage-read';

    public const ENTITY_MAIL_MESSAGE_UPDATE = 'entity-mailMessage-update';

    public const ENTITY_MAIL_TEMPLATE_DELETE = 'entity-mailTemplate-delete';

    public const ENTITY_MAIL_TEMPLATE_READ = 'entity-mailTemplate-read';

    public const ENTITY_MAIL_TEMPLATE_UPDATE = 'entity-mailTemplate-update';

    public const ENTITY_MANUFACTURER_DELETE = 'entity-manufacturer-delete';

    public const ENTITY_MANUFACTURER_READ = 'entity-manufacturer-read';

    public const ENTITY_MANUFACTURER_UPDATE = 'entity-manufacturer-update';

    public const ENTITY_MONEY_TRANSACTION_DELETE = 'entity-moneyTransaction-delete';

    public const ENTITY_MONEY_TRANSACTION_READ = 'entity-moneyTransaction-read';

    public const ENTITY_MONEY_TRANSACTION_UPDATE = 'entity-moneyTransaction-update';

    public const ENTITY_NUMBER_RANGE_DELETE = 'entity-numberRange-delete';

    public const ENTITY_NUMBER_RANGE_READ = 'entity-numberRange-read';

    public const ENTITY_NUMBER_RANGE_UPDATE = 'entity-numberRange-update';

    public const ENTITY_OPPORTUNITY_DELETE = 'entity-opportunity-delete';

    public const ENTITY_OPPORTUNITY_IMPORT = 'entity-opportunity-import';

    public const ENTITY_OPPORTUNITY_READ = 'entity-opportunity-read';

    public const ENTITY_OPPORTUNITY_SETTINGS = 'entity-opportunity-settings';

    public const ENTITY_OPPORTUNITY_UPDATE = 'entity-opportunity-update';

    public const ENTITY_OPPORTUNITY_UPDATE_SALES_STAGE_TO_WON_OR_LOST = 'entity-opportunity-updateSalesStageToWonOrLost';

    public const ENTITY_OPPORTUNITY_TOPIC_DELETE = 'entity-opportunityTopic-delete';

    public const ENTITY_OPPORTUNITY_TOPIC_READ = 'entity-opportunityTopic-read';

    public const ENTITY_OPPORTUNITY_TOPIC_UPDATE = 'entity-opportunityTopic-update';

    public const ENTITY_OPPORTUNITY_WIN_LOSS_REASON_DELETE = 'entity-opportunityWinLossReason-delete';

    public const ENTITY_OPPORTUNITY_WIN_LOSS_REASON_READ = 'entity-opportunityWinLossReason-read';

    public const ENTITY_OPPORTUNITY_WIN_LOSS_REASON_UPDATE = 'entity-opportunityWinLossReason-update';

    public const ENTITY_PARTY_DELETE = 'entity-party-delete';

    public const ENTITY_PARTY_EXPORT = 'entity-party-export';

    public const ENTITY_PARTY_FEATURE_COMPETITOR = 'entity-party-featureCompetitor';

    public const ENTITY_PARTY_FEATURE_SUPPLIER = 'entity-party-featureSupplier';

    public const ENTITY_PARTY_FINANCIAL_DATA = 'entity-party-financialData';

    public const ENTITY_PARTY_IMPORT = 'entity-party-import';

    public const ENTITY_PARTY_READ = 'entity-party-read';

    public const ENTITY_PARTY_READ_ALL = 'entity-party-readAll';

    public const ENTITY_PARTY_SETTINGS = 'entity-party-settings';

    public const ENTITY_PARTY_SETTINGS_HIDE_CONTACTS = 'entity-party-settingsHideContacts';

    public const ENTITY_PARTY_SYNC_ADDRESSES_TO_OPEN_RECORDS = 'entity-party-syncAddressesToOpenRecords';

    public const ENTITY_PARTY_UPDATE = 'entity-party-update';

    public const ENTITY_PARTY_UPDATE_ACCOUNTING_DATA = 'entity-party-updateAccountingData';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_BLOCKED = 'entity-party-updateCustomerBlocked';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_CREDIT_LIMIT = 'entity-party-updateCustomerCreditLimit';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_DELIVERY_BLOCK = 'entity-party-updateCustomerDeliveryBlock';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_DUNNING_BLOCK = 'entity-party-updateCustomerDunningBlock';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_INSURED = 'entity-party-updateCustomerInsured';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_NON_STANDARD_TAX = 'entity-party-updateCustomerNonStandardTax';

    public const ENTITY_PARTY_UPDATE_CUSTOMER_OR_SUPPLIER_NUMBER = 'entity-party-updateCustomerOrSupplierNumber';

    public const ENTITY_PARTY_UPDATE_INVOICE_BLOCK = 'entity-party-updateInvoiceBlock';

    public const ENTITY_PARTY_UPDATE_PUBLIC_PAGE_UUID = 'entity-party-updatePublicPageUuid';

    public const ENTITY_PARTY_WIDGET_CLEVER_REACH = 'entity-party-widgetCleverReach';

    public const ENTITY_PARTY_OPEN_ITEM_REFERENCE_DELETE = 'entity-partyOpenItemReference-delete';

    public const ENTITY_PARTY_OPEN_ITEM_REFERENCE_READ = 'entity-partyOpenItemReference-read';

    public const ENTITY_PARTY_OPEN_ITEM_REFERENCE_UPDATE = 'entity-partyOpenItemReference-update';

    public const ENTITY_PARTY_RATING_DELETE = 'entity-partyRating-delete';

    public const ENTITY_PARTY_RATING_READ = 'entity-partyRating-read';

    public const ENTITY_PARTY_RATING_UPDATE = 'entity-partyRating-update';

    public const ENTITY_PAYMENT_APPLICATION_READ = 'entity-paymentApplication-read';

    public const ENTITY_PAYMENT_METHOD_DELETE = 'entity-paymentMethod-delete';

    public const ENTITY_PAYMENT_METHOD_READ = 'entity-paymentMethod-read';

    public const ENTITY_PAYMENT_METHOD_UPDATE = 'entity-paymentMethod-update';

    public const ENTITY_PAYMENT_PROVIDER_CREDENTIAL_DELETE = 'entity-paymentProviderCredential-delete';

    public const ENTITY_PAYMENT_PROVIDER_CREDENTIAL_READ = 'entity-paymentProviderCredential-read';

    public const ENTITY_PAYMENT_PROVIDER_CREDENTIAL_UPDATE = 'entity-paymentProviderCredential-update';

    public const ENTITY_PAYMENT_RUN_CREATE_PAYMENT_ADVICE = 'entity-paymentRun-createPaymentAdvice';

    public const ENTITY_PAYMENT_RUN_DELETE = 'entity-paymentRun-delete';

    public const ENTITY_PAYMENT_RUN_READ = 'entity-paymentRun-read';

    public const ENTITY_PAYMENT_RUN_SETTINGS = 'entity-paymentRun-settings';

    public const ENTITY_PAYMENT_RUN_UPDATE = 'entity-paymentRun-update';

    public const ENTITY_PERFORMANCE_RECORD_DELETE = 'entity-performanceRecord-delete';

    public const ENTITY_PERFORMANCE_RECORD_READ = 'entity-performanceRecord-read';

    public const ENTITY_PERFORMANCE_RECORD_SETTINGS = 'entity-performanceRecord-settings';

    public const ENTITY_PERFORMANCE_RECORD_UPDATE = 'entity-performanceRecord-update';

    public const ENTITY_PERSON_DEPARTMENT_DELETE = 'entity-personDepartment-delete';

    public const ENTITY_PERSON_DEPARTMENT_READ = 'entity-personDepartment-read';

    public const ENTITY_PERSON_DEPARTMENT_UPDATE = 'entity-personDepartment-update';

    public const ENTITY_PERSON_ROLE_DELETE = 'entity-personRole-delete';

    public const ENTITY_PERSON_ROLE_READ = 'entity-personRole-read';

    public const ENTITY_PERSON_ROLE_UPDATE = 'entity-personRole-update';

    public const ENTITY_PERSONAL_ACCOUNTING_CODE_DELETE = 'entity-personalAccountingCode-delete';

    public const ENTITY_PERSONAL_ACCOUNTING_CODE_READ = 'entity-personalAccountingCode-read';

    public const ENTITY_PERSONAL_ACCOUNTING_CODE_UPDATE = 'entity-personalAccountingCode-update';

    public const ENTITY_PICK_READ = 'entity-pick-read';

    public const ENTITY_PICK_UPDATE = 'entity-pick-update';

    public const ENTITY_PICK_CHECK_REASON_DELETE = 'entity-pickCheckReason-delete';

    public const ENTITY_PICK_CHECK_REASON_READ = 'entity-pickCheckReason-read';

    public const ENTITY_PICK_CHECK_REASON_UPDATE = 'entity-pickCheckReason-update';

    public const ENTITY_PLACE_OF_SERVICE_DELETE = 'entity-placeOfService-delete';

    public const ENTITY_PLACE_OF_SERVICE_READ = 'entity-placeOfService-read';

    public const ENTITY_PLACE_OF_SERVICE_UPDATE = 'entity-placeOfService-update';

    public const ENTITY_PRICE_CALCULATION_PARAMETER_DELETE = 'entity-priceCalculationParameter-delete';

    public const ENTITY_PRICE_CALCULATION_PARAMETER_READ = 'entity-priceCalculationParameter-read';

    public const ENTITY_PRICE_CALCULATION_PARAMETER_UPDATE = 'entity-priceCalculationParameter-update';

    public const ENTITY_PRODUCTION_ORDER_CREATE_DOCUMENTS = 'entity-productionOrder-createDocuments';

    public const ENTITY_PRODUCTION_ORDER_DELETE = 'entity-productionOrder-delete';

    public const ENTITY_PRODUCTION_ORDER_IMPORT = 'entity-productionOrder-import';

    public const ENTITY_PRODUCTION_ORDER_READ = 'entity-productionOrder-read';

    public const ENTITY_PRODUCTION_ORDER_SETTINGS = 'entity-productionOrder-settings';

    public const ENTITY_PRODUCTION_ORDER_UPDATE = 'entity-productionOrder-update';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_DELETE = 'entity-productionWorkSchedule-delete';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_IMPORT = 'entity-productionWorkSchedule-import';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_READ = 'entity-productionWorkSchedule-read';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_UPDATE = 'entity-productionWorkSchedule-update';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_DELETE = 'entity-productionWorkScheduleAssignment-delete';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_IMPORT = 'entity-productionWorkScheduleAssignment-import';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_READ = 'entity-productionWorkScheduleAssignment-read';

    public const ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_UPDATE = 'entity-productionWorkScheduleAssignment-update';

    public const ENTITY_PROJECT_DELETE = 'entity-project-delete';

    public const ENTITY_PROJECT_READ = 'entity-project-read';

    public const ENTITY_PROJECT_READ_ALL = 'entity-project-readAll';

    public const ENTITY_PROJECT_UPDATE = 'entity-project-update';

    public const ENTITY_PROJECT_UPDATE_PUBLIC_PAGE_UUID = 'entity-project-updatePublicPageUuid';

    public const ENTITY_PURCHASE_INVOICE_CANCEL = 'entity-purchaseInvoice-cancel';

    public const ENTITY_PURCHASE_INVOICE_DELETE = 'entity-purchaseInvoice-delete';

    public const ENTITY_PURCHASE_INVOICE_DELETE_DOCUMENTS = 'entity-purchaseInvoice-deleteDocuments';

    public const ENTITY_PURCHASE_INVOICE_IMPORT = 'entity-purchaseInvoice-import';

    public const ENTITY_PURCHASE_INVOICE_READ = 'entity-purchaseInvoice-read';

    public const ENTITY_PURCHASE_INVOICE_SETTINGS = 'entity-purchaseInvoice-settings';

    public const ENTITY_PURCHASE_INVOICE_UPDATE = 'entity-purchaseInvoice-update';

    public const ENTITY_PURCHASE_OPEN_ITEM_CREATE = 'entity-purchaseOpenItem-create';

    public const ENTITY_PURCHASE_OPEN_ITEM_CREATE_DOCUMENTS = 'entity-purchaseOpenItem-createDocuments';

    public const ENTITY_PURCHASE_OPEN_ITEM_DELETE = 'entity-purchaseOpenItem-delete';

    public const ENTITY_PURCHASE_OPEN_ITEM_EXPORT = 'entity-purchaseOpenItem-export';

    public const ENTITY_PURCHASE_OPEN_ITEM_READ = 'entity-purchaseOpenItem-read';

    public const ENTITY_PURCHASE_OPEN_ITEM_UPDATE = 'entity-purchaseOpenItem-update';

    public const ENTITY_PURCHASE_ORDER_CREATE_DOCUMENTS = 'entity-purchaseOrder-createDocuments';

    public const ENTITY_PURCHASE_ORDER_DELETE = 'entity-purchaseOrder-delete';

    public const ENTITY_PURCHASE_ORDER_READ = 'entity-purchaseOrder-read';

    public const ENTITY_PURCHASE_ORDER_SETTINGS = 'entity-purchaseOrder-settings';

    public const ENTITY_PURCHASE_ORDER_UPDATE = 'entity-purchaseOrder-update';

    public const ENTITY_PURCHASE_ORDER_UPDATE_PURCHASE_ORDER_TYPE_TRIANGULAR = 'entity-purchaseOrder-updatePurchaseOrderTypeTriangular';

    public const ENTITY_PURCHASE_ORDER_REQUEST_CREATE_DOCUMENTS = 'entity-purchaseOrderRequest-createDocuments';

    public const ENTITY_PURCHASE_ORDER_REQUEST_DELETE = 'entity-purchaseOrderRequest-delete';

    public const ENTITY_PURCHASE_ORDER_REQUEST_READ = 'entity-purchaseOrderRequest-read';

    public const ENTITY_PURCHASE_ORDER_REQUEST_SETTINGS = 'entity-purchaseOrderRequest-settings';

    public const ENTITY_PURCHASE_ORDER_REQUEST_UPDATE = 'entity-purchaseOrderRequest-update';

    public const ENTITY_PURCHASE_ORDER_REQUEST_UPDATE_PUBLIC_PAGE_UUID = 'entity-purchaseOrderRequest-updatePublicPageUuid';

    public const ENTITY_PURCHASE_REQUISITION_DELETE = 'entity-purchaseRequisition-delete';

    public const ENTITY_PURCHASE_REQUISITION_READ = 'entity-purchaseRequisition-read';

    public const ENTITY_PURCHASE_REQUISITION_SETTINGS = 'entity-purchaseRequisition-settings';

    public const ENTITY_PURCHASE_REQUISITION_UPDATE = 'entity-purchaseRequisition-update';

    public const ENTITY_QUOTATION_CREATE_DOCUMENTS = 'entity-quotation-createDocuments';

    public const ENTITY_QUOTATION_DELETE = 'entity-quotation-delete';

    public const ENTITY_QUOTATION_IMPORT = 'entity-quotation-import';

    public const ENTITY_QUOTATION_READ = 'entity-quotation-read';

    public const ENTITY_QUOTATION_SETTINGS = 'entity-quotation-settings';

    public const ENTITY_QUOTATION_UPDATE = 'entity-quotation-update';

    public const ENTITY_QUOTATION_UPDATE_PUBLIC_PAGE_UUID = 'entity-quotation-updatePublicPageUuid';

    public const ENTITY_REASON_OF_ABSENCE_DELETE = 'entity-reasonOfAbsence-delete';

    public const ENTITY_REASON_OF_ABSENCE_READ = 'entity-reasonOfAbsence-read';

    public const ENTITY_REASON_OF_ABSENCE_UPDATE = 'entity-reasonOfAbsence-update';

    public const ENTITY_RECORD_EMAILING_RULE_DELETE = 'entity-recordEmailingRule-delete';

    public const ENTITY_RECORD_EMAILING_RULE_READ = 'entity-recordEmailingRule-read';

    public const ENTITY_RECORD_EMAILING_RULE_UPDATE = 'entity-recordEmailingRule-update';

    public const ENTITY_RECURRING_INVOICE_DELETE = 'entity-recurringInvoice-delete';

    public const ENTITY_RECURRING_INVOICE_DELETE_DOCUMENTS = 'entity-recurringInvoice-deleteDocuments';

    public const ENTITY_RECURRING_INVOICE_READ = 'entity-recurringInvoice-read';

    public const ENTITY_RECURRING_INVOICE_SETTINGS = 'entity-recurringInvoice-settings';

    public const ENTITY_RECURRING_INVOICE_UPDATE = 'entity-recurringInvoice-update';

    public const ENTITY_REGION_DELETE = 'entity-region-delete';

    public const ENTITY_REGION_READ = 'entity-region-read';

    public const ENTITY_REGION_UPDATE = 'entity-region-update';

    public const ENTITY_REMOTE_PRINT_CONFIGURATION_DELETE = 'entity-remotePrintConfiguration-delete';

    public const ENTITY_REMOTE_PRINT_CONFIGURATION_READ = 'entity-remotePrintConfiguration-read';

    public const ENTITY_REMOTE_PRINT_CONFIGURATION_UPDATE = 'entity-remotePrintConfiguration-update';

    public const ENTITY_REMOTE_PRINT_JOB_DELETE = 'entity-remotePrintJob-delete';

    public const ENTITY_REMOTE_PRINT_JOB_READ = 'entity-remotePrintJob-read';

    public const ENTITY_REMOTE_PRINT_JOB_READ_ALL = 'entity-remotePrintJob-readAll';

    public const ENTITY_REMOTE_PRINT_JOB_UPDATE = 'entity-remotePrintJob-update';

    public const ENTITY_SALES_INVOICE_CANCEL = 'entity-salesInvoice-cancel';

    public const ENTITY_SALES_INVOICE_CREATE_DOCUMENTS = 'entity-salesInvoice-createDocuments';

    public const ENTITY_SALES_INVOICE_DELETE = 'entity-salesInvoice-delete';

    public const ENTITY_SALES_INVOICE_DELETE_DOCUMENTS = 'entity-salesInvoice-deleteDocuments';

    public const ENTITY_SALES_INVOICE_EXPORT = 'entity-salesInvoice-export';

    public const ENTITY_SALES_INVOICE_IMPORT = 'entity-salesInvoice-import';

    public const ENTITY_SALES_INVOICE_READ = 'entity-salesInvoice-read';

    public const ENTITY_SALES_INVOICE_RECREATE_DOCUMENTS = 'entity-salesInvoice-recreateDocuments';

    public const ENTITY_SALES_INVOICE_SETTINGS = 'entity-salesInvoice-settings';

    public const ENTITY_SALES_INVOICE_UPDATE = 'entity-salesInvoice-update';

    public const ENTITY_SALES_OPEN_ITEM_CREATE = 'entity-salesOpenItem-create';

    public const ENTITY_SALES_OPEN_ITEM_CREATE_DOCUMENTS = 'entity-salesOpenItem-createDocuments';

    public const ENTITY_SALES_OPEN_ITEM_DELETE = 'entity-salesOpenItem-delete';

    public const ENTITY_SALES_OPEN_ITEM_EXPORT = 'entity-salesOpenItem-export';

    public const ENTITY_SALES_OPEN_ITEM_READ = 'entity-salesOpenItem-read';

    public const ENTITY_SALES_OPEN_ITEM_UPDATE = 'entity-salesOpenItem-update';

    public const ENTITY_SALES_ORDER_CREATE_ORDER_CONFIRMATION = 'entity-salesOrder-createOrderConfirmation';

    public const ENTITY_SALES_ORDER_DELETE = 'entity-salesOrder-delete';

    public const ENTITY_SALES_ORDER_IMPORT = 'entity-salesOrder-import';

    public const ENTITY_SALES_ORDER_MANAGE_ALL_PROJECT_ORDER_TASKS = 'entity-salesOrder-manageAllProjectOrderTasks';

    public const ENTITY_SALES_ORDER_READ = 'entity-salesOrder-read';

    public const ENTITY_SALES_ORDER_READ_SHIPPED_QUANTITY = 'entity-salesOrder-readShippedQuantity';

    public const ENTITY_SALES_ORDER_SETTINGS = 'entity-salesOrder-settings';

    public const ENTITY_SALES_ORDER_UPDATE = 'entity-salesOrder-update';

    public const ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_ADVANCE_PAYMENT = 'entity-salesOrder-updatePaymentTypeAdvancePayment';

    public const ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_COUNTER_SALES = 'entity-salesOrder-updatePaymentTypeCounterSales';

    public const ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_PART_PAYMENT = 'entity-salesOrder-updatePaymentTypePartPayment';

    public const ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_PREPAYMENT = 'entity-salesOrder-updatePaymentTypePrepayment';

    public const ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_STANDARD = 'entity-salesOrder-updatePaymentTypeStandard';

    public const ENTITY_SALES_STAGE_DELETE = 'entity-salesStage-delete';

    public const ENTITY_SALES_STAGE_READ = 'entity-salesStage-read';

    public const ENTITY_SALES_STAGE_UPDATE = 'entity-salesStage-update';

    public const ENTITY_SALES_TEAM_DELETE = 'entity-salesTeam-delete';

    public const ENTITY_SALES_TEAM_READ = 'entity-salesTeam-read';

    public const ENTITY_SALES_TEAM_UPDATE = 'entity-salesTeam-update';

    public const ENTITY_SECTOR_DELETE = 'entity-sector-delete';

    public const ENTITY_SECTOR_READ = 'entity-sector-read';

    public const ENTITY_SECTOR_UPDATE = 'entity-sector-update';

    public const ENTITY_SEPA_DIRECT_DEBIT_MANDATE_DELETE = 'entity-sepaDirectDebitMandate-delete';

    public const ENTITY_SEPA_DIRECT_DEBIT_MANDATE_EXPORT = 'entity-sepaDirectDebitMandate-export';

    public const ENTITY_SEPA_DIRECT_DEBIT_MANDATE_IMPORT = 'entity-sepaDirectDebitMandate-import';

    public const ENTITY_SEPA_DIRECT_DEBIT_MANDATE_READ = 'entity-sepaDirectDebitMandate-read';

    public const ENTITY_SEPA_DIRECT_DEBIT_MANDATE_SETTINGS = 'entity-sepaDirectDebitMandate-settings';

    public const ENTITY_SEPA_DIRECT_DEBIT_MANDATE_UPDATE = 'entity-sepaDirectDebitMandate-update';

    public const ENTITY_SHIPMENT_CREATE_LABEL = 'entity-shipment-createLabel';

    public const ENTITY_SHIPMENT_CREATE_WITHOUT_SALES_ORDER = 'entity-shipment-createWithoutSalesOrder';

    public const ENTITY_SHIPMENT_DELETE = 'entity-shipment-delete';

    public const ENTITY_SHIPMENT_EXPORT = 'entity-shipment-export';

    public const ENTITY_SHIPMENT_READ = 'entity-shipment-read';

    public const ENTITY_SHIPMENT_SETTINGS = 'entity-shipment-settings';

    public const ENTITY_SHIPMENT_UPDATE = 'entity-shipment-update';

    public const ENTITY_SHIPMENT_METHOD_DELETE = 'entity-shipmentMethod-delete';

    public const ENTITY_SHIPMENT_METHOD_READ = 'entity-shipmentMethod-read';

    public const ENTITY_SHIPMENT_METHOD_UPDATE = 'entity-shipmentMethod-update';

    public const ENTITY_SHIPPING_CARRIER_DELETE = 'entity-shippingCarrier-delete';

    public const ENTITY_SHIPPING_CARRIER_READ = 'entity-shippingCarrier-read';

    public const ENTITY_SHIPPING_CARRIER_UPDATE = 'entity-shippingCarrier-update';

    public const ENTITY_SHOUTBOX_TEMPLATE_DELETE = 'entity-shoutboxTemplate-delete';

    public const ENTITY_SHOUTBOX_TEMPLATE_READ = 'entity-shoutboxTemplate-read';

    public const ENTITY_SHOUTBOX_TEMPLATE_UPDATE = 'entity-shoutboxTemplate-update';

    public const ENTITY_STAGED_MONEY_TRANSACTION_DELETE = 'entity-stagedMoneyTransaction-delete';

    public const ENTITY_STAGED_MONEY_TRANSACTION_READ = 'entity-stagedMoneyTransaction-read';

    public const ENTITY_STAGED_MONEY_TRANSACTION_UPDATE = 'entity-stagedMoneyTransaction-update';

    public const ENTITY_STORAGE_PLACE_BLOCKING_REASON_DELETE = 'entity-storagePlaceBlockingReason-delete';

    public const ENTITY_STORAGE_PLACE_BLOCKING_REASON_READ = 'entity-storagePlaceBlockingReason-read';

    public const ENTITY_STORAGE_PLACE_BLOCKING_REASON_UPDATE = 'entity-storagePlaceBlockingReason-update';

    public const ENTITY_STORAGE_PLACE_SIZE_DELETE = 'entity-storagePlaceSize-delete';

    public const ENTITY_STORAGE_PLACE_SIZE_READ = 'entity-storagePlaceSize-read';

    public const ENTITY_STORAGE_PLACE_SIZE_UPDATE = 'entity-storagePlaceSize-update';

    public const ENTITY_TAG_CREATE = 'entity-tag-create';

    public const ENTITY_TAG_DELETE = 'entity-tag-delete';

    public const ENTITY_TAG_READ = 'entity-tag-read';

    public const ENTITY_TAG_UPDATE = 'entity-tag-update';

    public const ENTITY_TASK_DELETE = 'entity-task-delete';

    public const ENTITY_TASK_DELETE_PRIVATE_AS_WATCHER = 'entity-task-deletePrivateAsWatcher';

    public const ENTITY_TASK_READ = 'entity-task-read';

    public const ENTITY_TASK_UPDATE = 'entity-task-update';

    public const ENTITY_TASK_UPDATE_PRIVATE_AS_WATCHER = 'entity-task-updatePrivateAsWatcher';

    public const ENTITY_TASK_TEMPLATE_DELETE = 'entity-taskTemplate-delete';

    public const ENTITY_TASK_TEMPLATE_READ = 'entity-taskTemplate-read';

    public const ENTITY_TASK_TEMPLATE_UPDATE = 'entity-taskTemplate-update';

    public const ENTITY_TASK_TOPIC_DELETE = 'entity-taskTopic-delete';

    public const ENTITY_TASK_TOPIC_READ = 'entity-taskTopic-read';

    public const ENTITY_TASK_TOPIC_UPDATE = 'entity-taskTopic-update';

    public const ENTITY_TASK_TYPE_DELETE = 'entity-taskType-delete';

    public const ENTITY_TASK_TYPE_READ = 'entity-taskType-read';

    public const ENTITY_TASK_TYPE_UPDATE = 'entity-taskType-update';

    public const ENTITY_TAX_DELETE = 'entity-tax-delete';

    public const ENTITY_TAX_READ = 'entity-tax-read';

    public const ENTITY_TAX_UPDATE = 'entity-tax-update';

    public const ENTITY_TAX_DETERMINATION_RULE_DELETE = 'entity-taxDeterminationRule-delete';

    public const ENTITY_TAX_DETERMINATION_RULE_READ = 'entity-taxDeterminationRule-read';

    public const ENTITY_TAX_DETERMINATION_RULE_UPDATE = 'entity-taxDeterminationRule-update';

    public const ENTITY_TERM_OF_PAYMENT_DELETE = 'entity-termOfPayment-delete';

    public const ENTITY_TERM_OF_PAYMENT_READ = 'entity-termOfPayment-read';

    public const ENTITY_TERM_OF_PAYMENT_UPDATE = 'entity-termOfPayment-update';

    public const ENTITY_TICKET_DELETE = 'entity-ticket-delete';

    public const ENTITY_TICKET_READ = 'entity-ticket-read';

    public const ENTITY_TICKET_READ_ALL = 'entity-ticket-readAll';

    public const ENTITY_TICKET_SETTINGS = 'entity-ticket-settings';

    public const ENTITY_TICKET_UPDATE = 'entity-ticket-update';

    public const ENTITY_TICKET_UPDATE_ADVANCED = 'entity-ticket-updateAdvanced';

    public const ENTITY_TICKET_UPDATE_DELETE_TICKET_RATING = 'entity-ticket-updateDeleteTicketRating';

    public const ENTITY_TICKET_UPDATE_PRINT = 'entity-ticket-updatePrint';

    public const ENTITY_TICKET_UPDATE_PUBLIC_PAGE_UUID = 'entity-ticket-updatePublicPageUuid';

    public const ENTITY_TICKET_ASSIGNMENT_RULE_DELETE = 'entity-ticketAssignmentRule-delete';

    public const ENTITY_TICKET_ASSIGNMENT_RULE_READ = 'entity-ticketAssignmentRule-read';

    public const ENTITY_TICKET_ASSIGNMENT_RULE_UPDATE = 'entity-ticketAssignmentRule-update';

    public const ENTITY_TICKET_CATEGORY_IMPORT = 'entity-ticketCategory-import';

    public const ENTITY_TICKET_CATEGORY_READ = 'entity-ticketCategory-read';

    public const ENTITY_TICKET_CATEGORY_UPDATE = 'entity-ticketCategory-update';

    public const ENTITY_TICKET_CHANNEL_DELETE = 'entity-ticketChannel-delete';

    public const ENTITY_TICKET_CHANNEL_READ = 'entity-ticketChannel-read';

    public const ENTITY_TICKET_CHANNEL_UPDATE = 'entity-ticketChannel-update';

    public const ENTITY_TICKET_FAQ_DELETE = 'entity-ticketFaq-delete';

    public const ENTITY_TICKET_FAQ_READ = 'entity-ticketFaq-read';

    public const ENTITY_TICKET_FAQ_UPDATE = 'entity-ticketFaq-update';

    public const ENTITY_TICKET_MAIL_TEMPLATE_DELETE = 'entity-ticketMailTemplate-delete';

    public const ENTITY_TICKET_MAIL_TEMPLATE_READ = 'entity-ticketMailTemplate-read';

    public const ENTITY_TICKET_MAIL_TEMPLATE_UPDATE = 'entity-ticketMailTemplate-update';

    public const ENTITY_TICKET_POOLING_GROUP_DELETE = 'entity-ticketPoolingGroup-delete';

    public const ENTITY_TICKET_POOLING_GROUP_READ = 'entity-ticketPoolingGroup-read';

    public const ENTITY_TICKET_POOLING_GROUP_UPDATE = 'entity-ticketPoolingGroup-update';

    public const ENTITY_TICKET_PRIORITY_DELETE = 'entity-ticketPriority-delete';

    public const ENTITY_TICKET_PRIORITY_READ = 'entity-ticketPriority-read';

    public const ENTITY_TICKET_PRIORITY_UPDATE = 'entity-ticketPriority-update';

    public const ENTITY_TICKET_SERVICE_LEVEL_AGREEMENT_DELETE = 'entity-ticketServiceLevelAgreement-delete';

    public const ENTITY_TICKET_SERVICE_LEVEL_AGREEMENT_READ = 'entity-ticketServiceLevelAgreement-read';

    public const ENTITY_TICKET_SERVICE_LEVEL_AGREEMENT_UPDATE = 'entity-ticketServiceLevelAgreement-update';

    public const ENTITY_TICKET_STATUS_DELETE = 'entity-ticketStatus-delete';

    public const ENTITY_TICKET_STATUS_READ = 'entity-ticketStatus-read';

    public const ENTITY_TICKET_STATUS_UPDATE = 'entity-ticketStatus-update';

    public const ENTITY_TICKET_TYPE_DELETE = 'entity-ticketType-delete';

    public const ENTITY_TICKET_TYPE_READ = 'entity-ticketType-read';

    public const ENTITY_TICKET_TYPE_UPDATE = 'entity-ticketType-update';

    public const ENTITY_TIME_RECORD_CREATE = 'entity-timeRecord-create';

    public const ENTITY_TIME_RECORD_DELETE = 'entity-timeRecord-delete';

    public const ENTITY_TIME_RECORD_MOVE = 'entity-timeRecord-move';

    public const ENTITY_TIME_RECORD_READ = 'entity-timeRecord-read';

    public const ENTITY_TIME_RECORD_READ_ALL_PROJECT = 'entity-timeRecord-readAllProject';

    public const ENTITY_TIME_RECORD_RESOURCE_CALENDAR = 'entity-timeRecord-resourceCalendar';

    public const ENTITY_TIME_RECORD_SETTINGS = 'entity-timeRecord-settings';

    public const ENTITY_TIME_RECORD_UPDATE = 'entity-timeRecord-update';

    public const ENTITY_TIME_RECORD_UPDATE_HOURLY_RATE_PROJECT = 'entity-timeRecord-updateHourlyRateProject';

    public const ENTITY_TIME_RECORD_UPDATE_HOURLY_RATE_TICKET = 'entity-timeRecord-updateHourlyRateTicket';

    public const ENTITY_TIME_RECORD_UPDATE_USER = 'entity-timeRecord-updateUser';

    public const ENTITY_TRANSLATION_DELETE = 'entity-translation-delete';

    public const ENTITY_TRANSLATION_EXPORT = 'entity-translation-export';

    public const ENTITY_TRANSLATION_IMPORT = 'entity-translation-import';

    public const ENTITY_TRANSLATION_READ = 'entity-translation-read';

    public const ENTITY_TRANSLATION_UPDATE = 'entity-translation-update';

    public const ENTITY_TRANSPORTATION_ORDER_CREATE_PICKING_ORDER = 'entity-transportationOrder-createPickingOrder';

    public const ENTITY_TRANSPORTATION_ORDER_DELETE = 'entity-transportationOrder-delete';

    public const ENTITY_TRANSPORTATION_ORDER_READ = 'entity-transportationOrder-read';

    public const ENTITY_TRANSPORTATION_ORDER_UPDATE = 'entity-transportationOrder-update';

    public const ENTITY_UNIT_DELETE = 'entity-unit-delete';

    public const ENTITY_UNIT_READ = 'entity-unit-read';

    public const ENTITY_UNIT_UPDATE = 'entity-unit-update';

    public const ENTITY_USER_DELETE = 'entity-user-delete';

    public const ENTITY_USER_EXPORT = 'entity-user-export';

    public const ENTITY_USER_IMPORT = 'entity-user-import';

    public const ENTITY_USER_UPDATE = 'entity-user-update';

    public const ENTITY_USER_ROLE_DELETE = 'entity-userRole-delete';

    public const ENTITY_USER_ROLE_READ = 'entity-userRole-read';

    public const ENTITY_USER_ROLE_UPDATE = 'entity-userRole-update';

    public const ENTITY_USER_ROLE_UPDATE_PERMISSIONS = 'entity-userRole-updatePermissions';

    public const ENTITY_VARIANT_ARTICLE_DELETE = 'entity-variantArticle-delete';

    public const ENTITY_VARIANT_ARTICLE_READ = 'entity-variantArticle-read';

    public const ENTITY_VARIANT_ARTICLE_UPDATE = 'entity-variantArticle-update';

    public const ENTITY_VIBRANT_REPORT_DELETE = 'entity-vibrantReport-delete';

    public const ENTITY_VIBRANT_REPORT_READ = 'entity-vibrantReport-read';

    public const ENTITY_VIBRANT_REPORT_UPDATE = 'entity-vibrantReport-update';

    public const ENTITY_WAREHOUSE_DELETE = 'entity-warehouse-delete';

    public const ENTITY_WAREHOUSE_READ = 'entity-warehouse-read';

    public const ENTITY_WAREHOUSE_UPDATE = 'entity-warehouse-update';

    public const ENTITY_WAREHOUSE_STOCK_READ = 'entity-warehouseStock-read';

    public const ENTITY_WAREHOUSE_STOCK_MOVEMENT_READ = 'entity-warehouseStockMovement-read';

    public const ENTITY_WAREHOUSE_STOCK_MOVEMENT_UPDATE = 'entity-warehouseStockMovement-update';

    public const ENTITY_WEB2_LEAD_CONFIG_DELETE = 'entity-web2LeadConfig-delete';

    public const ENTITY_WEB2_LEAD_CONFIG_READ = 'entity-web2LeadConfig-read';

    public const ENTITY_WEB2_LEAD_CONFIG_UPDATE = 'entity-web2LeadConfig-update';

    public const ENTITY_WEB2_TICKET_CONFIG_DELETE = 'entity-web2TicketConfig-delete';

    public const ENTITY_WEB2_TICKET_CONFIG_READ = 'entity-web2TicketConfig-read';

    public const ENTITY_WEB2_TICKET_CONFIG_UPDATE = 'entity-web2TicketConfig-update';

    public const ENTITY_WEBHOOK_DELETE = 'entity-webhook-delete';

    public const ENTITY_WEBHOOK_READ = 'entity-webhook-read';

    public const ENTITY_WEBHOOK_UPDATE = 'entity-webhook-update';

    public const ENTITY_WECLAPP_OS_DELETE = 'entity-weclappOs-delete';

    public const ENTITY_WECLAPP_OS_READ = 'entity-weclappOs-read';

    public const ENTITY_WECLAPP_OS_UPDATE = 'entity-weclappOs-update';

    public const FEATURE_ACCOUNTING_EXPORT_EXECUTE = 'feature-accountingExport-execute';

    public const FEATURE_ACTIVITY_LOG_READ = 'feature-activityLog-read';

    public const FEATURE_AMAZON_BETA_DELIVERY = 'feature-amazon-betaDelivery';

    public const FEATURE_COMMISSION_READ = 'feature-commission-read';

    public const FEATURE_COMMISSION_SETTINGS = 'feature-commission-settings';

    public const FEATURE_COMMISSION_UPDATE = 'feature-commission-update';

    public const FEATURE_CONTRACT_REPORTS_READ = 'feature-contractReports-read';

    public const FEATURE_CUSTOM_REPORT_EXECUTE = 'feature-customReport-execute';

    public const FEATURE_CUSTOM_REPORT_UPDATE = 'feature-customReport-update';

    public const FEATURE_DATA_TRANSFER_EXPORT_FULL_ZIP = 'feature-dataTransfer-exportFullZip';

    public const FEATURE_ECOMMERCE_AMAZON_EXPORT = 'feature-ecommerce-amazonExport';

    public const FEATURE_ECOMMERCE_AMAZON_IMPORT = 'feature-ecommerce-amazonImport';

    public const FEATURE_ECOMMERCE_E_BAY_LISTINGS = 'feature-ecommerce-eBayListings';

    public const FEATURE_ECOMMERCE_ECOMMERCE_CENTER = 'feature-ecommerce-ecommerceCenter';

    public const FEATURE_HELPDESK_REPORTS_READ = 'feature-helpdeskReports-read';

    public const FEATURE_MASTER_DATA_REPORTS_READ = 'feature-masterDataReports-read';

    public const FEATURE_REDUCTION_ADDITION_UPDATE = 'feature-reductionAddition-update';

    public const FEATURE_REPORTS_READ = 'feature-reports-read';

    public const FEATURE_REVENUE_REPORTS_READ = 'feature-revenueReports-read';

    public const FEATURE_SALES_COST_READ = 'feature-salesCost-read';

    public const FEATURE_SALES_COST_UPDATE = 'feature-salesCost-update';

    public const FEATURE_TABLE_EXPORT_EXECUTE = 'feature-tableExport-execute';

    public const FEATURE_TRANSACTION_DATA_REPORTS_READ = 'feature-transactionDataReports-read';

    public const FEATURE_WAREHOUSE_REPORTS_READ = 'feature-warehouseReports-read';

    public const FEATURE_WECLAPP_ADMIN = 'feature-weclapp-admin';

    public const FEATURE_WECLAPP_MASS_ACTIONS = 'feature-weclapp-massActions';

    public const FEATURE_WECLAPP_TO_WECLAPP_BETA_USER = 'feature-weclappToWeclapp-betaUser';

    public const FEATURE_XT_COMMERCE_BETA_USER = 'feature-xtCommerce-betaUser';

    public const SETTINGS_ACCOUNTING_INITIALIZE = 'settings-accounting-initialize';

    public const SETTINGS_ACCOUNTING_RESET = 'settings-accounting-reset';

    public const SETTINGS_ACCOUNTING_UPDATE = 'settings-accounting-update';

    public const SETTINGS_FIELDSET_CONFIGURATION_UPDATE = 'settings-fieldsetConfiguration-update';

    public const SETTINGS_FORM_UPDATE = 'settings-form-update';

    public const SETTINGS_MAIL2_TICKET_UPDATE = 'settings-mail2Ticket-update';

    public const SETTINGS_MENU_ITEM_CONFIGURATION_UPDATE = 'settings-menuItemConfiguration-update';

    public const SETTINGS_ORGANIZER_UPDATE = 'settings-organizer-update';

    public const SETTINGS_PURCHASE_UPDATE = 'settings-purchase-update';

    public const SETTINGS_SALES_UPDATE = 'settings-sales-update';

    public const SETTINGS_SALES_CHANNEL_UPDATE = 'settings-salesChannel-update';

    public const SETTINGS_VIEW_UPDATE = 'settings-view-update';

    public const SETTINGS_WAREHOUSE_UPDATE = 'settings-warehouse-update';

    public const SETTINGS_WAREHOUSE_UPDATE_LOCATION_TYPE_SETTINGS = 'settings-warehouse-updateLocationTypeSettings';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTITY_ACCOUNT_DETERMINATION_DELETE,
            self::ENTITY_ACCOUNT_DETERMINATION_READ,
            self::ENTITY_ACCOUNT_DETERMINATION_UPDATE,
            self::ENTITY_ACCOUNTING_TRANSACTION_DELETE,
            self::ENTITY_ACCOUNTING_TRANSACTION_IMPORT,
            self::ENTITY_ACCOUNTING_TRANSACTION_READ,
            self::ENTITY_ACCOUNTING_TRANSACTION_UPDATE,
            self::ENTITY_APP_SETTINGS_DELETE,
            self::ENTITY_APP_SETTINGS_READ,
            self::ENTITY_APP_SETTINGS_UPDATE,
            self::ENTITY_ARCHIVED_EMAIL_DELETE,
            self::ENTITY_ARCHIVED_EMAIL_READ,
            self::ENTITY_ARCHIVED_EMAIL_UPDATE,
            self::ENTITY_ARTICLE_BATCH_NUMBER,
            self::ENTITY_ARTICLE_BILL_OF_MATERIAL,
            self::ENTITY_ARTICLE_COST,
            self::ENTITY_ARTICLE_DELETE,
            self::ENTITY_ARTICLE_DELETE_PRICE,
            self::ENTITY_ARTICLE_EXPORT,
            self::ENTITY_ARTICLE_EXPORT_PRICE,
            self::ENTITY_ARTICLE_IMPORT,
            self::ENTITY_ARTICLE_IMPORT_PRICE,
            self::ENTITY_ARTICLE_READ,
            self::ENTITY_ARTICLE_READ_BARCODE,
            self::ENTITY_ARTICLE_READ_INVENTORY_VALUATION,
            self::ENTITY_ARTICLE_READ_PRICE,
            self::ENTITY_ARTICLE_SERIAL_NUMBER,
            self::ENTITY_ARTICLE_SETTINGS,
            self::ENTITY_ARTICLE_UPDATE,
            self::ENTITY_ARTICLE_UPDATE_ACCOUNTING_DATA,
            self::ENTITY_ARTICLE_UPDATE_ACTIVE,
            self::ENTITY_ARTICLE_UPDATE_ARTICLE_TYPE,
            self::ENTITY_ARTICLE_UPDATE_CONVERSION_RATE,
            self::ENTITY_ARTICLE_UPDATE_CUSTOMS_TARIFF_NUMBER,
            self::ENTITY_ARTICLE_UPDATE_IMAGE,
            self::ENTITY_ARTICLE_UPDATE_INVENTORY_VALUATION,
            self::ENTITY_ARTICLE_UPDATE_MARKET_VALUE,
            self::ENTITY_ARTICLE_UPDATE_MASS_PRICE_CALCULATION,
            self::ENTITY_ARTICLE_UPDATE_NUMBER,
            self::ENTITY_ARTICLE_UPDATE_PRICE,
            self::ENTITY_ARTICLE_UPDATE_PRINT_DATASHEET,
            self::ENTITY_ARTICLE_UPDATE_PRINT_LABELS,
            self::ENTITY_ARTICLE_UPDATE_SHIPMENT_INFO,
            self::ENTITY_ARTICLE_ACCOUNTING_CODE_DELETE,
            self::ENTITY_ARTICLE_ACCOUNTING_CODE_READ,
            self::ENTITY_ARTICLE_ACCOUNTING_CODE_UPDATE,
            self::ENTITY_ARTICLE_CATEGORY_DELETE,
            self::ENTITY_ARTICLE_CATEGORY_EXPORT,
            self::ENTITY_ARTICLE_CATEGORY_IMPORT,
            self::ENTITY_ARTICLE_CATEGORY_READ,
            self::ENTITY_ARTICLE_CATEGORY_UPDATE,
            self::ENTITY_ARTICLE_CATEGORY_UPDATE_ACCOUNTING_DATA,
            self::ENTITY_ARTICLE_ITEM_GROUP_DELETE,
            self::ENTITY_ARTICLE_ITEM_GROUP_READ,
            self::ENTITY_ARTICLE_ITEM_GROUP_UPDATE,
            self::ENTITY_ARTICLE_RATING_DELETE,
            self::ENTITY_ARTICLE_RATING_READ,
            self::ENTITY_ARTICLE_RATING_UPDATE,
            self::ENTITY_ARTICLE_STATUS_DELETE,
            self::ENTITY_ARTICLE_STATUS_READ,
            self::ENTITY_ARTICLE_STATUS_UPDATE,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_DELETE,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_DELETE_PRICE,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_EXPORT,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_IMPORT,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_READ,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_READ_PRICE,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_UPDATE,
            self::ENTITY_ARTICLE_SUPPLY_SOURCE_UPDATE_PRICE,
            self::ENTITY_ATTENDANCE_DELETE,
            self::ENTITY_ATTENDANCE_READ_ALL,
            self::ENTITY_ATTENDANCE_SETTINGS,
            self::ENTITY_ATTENDANCE_UPDATE,
            self::ENTITY_AUTHENTICATION_TOKEN_READ,
            self::ENTITY_AUTHENTICATION_TOKEN_UPDATE,
            self::ENTITY_BANK_ACCOUNT_DELETE,
            self::ENTITY_BANK_ACCOUNT_READ,
            self::ENTITY_BANK_ACCOUNT_UPDATE,
            self::ENTITY_BLANKET_PURCHASE_ORDER_DELETE,
            self::ENTITY_BLANKET_PURCHASE_ORDER_READ,
            self::ENTITY_BLANKET_PURCHASE_ORDER_UPDATE,
            self::ENTITY_BOOKING_TEMPLATE_DELETE,
            self::ENTITY_BOOKING_TEMPLATE_READ,
            self::ENTITY_BOOKING_TEMPLATE_UPDATE,
            self::ENTITY_BUSINESS_HOLIDAYS_DELETE,
            self::ENTITY_BUSINESS_HOLIDAYS_READ,
            self::ENTITY_BUSINESS_HOLIDAYS_UPDATE,
            self::ENTITY_BUSINESS_HOURS_DELETE,
            self::ENTITY_BUSINESS_HOURS_READ,
            self::ENTITY_BUSINESS_HOURS_UPDATE,
            self::ENTITY_CALENDAR_DELETE,
            self::ENTITY_CALENDAR_READ,
            self::ENTITY_CALENDAR_UPDATE,
            self::ENTITY_CAMPAIGN_DELETE,
            self::ENTITY_CAMPAIGN_READ,
            self::ENTITY_CAMPAIGN_UPDATE,
            self::ENTITY_CASH_ACCOUNT_DELETE,
            self::ENTITY_CASH_ACCOUNT_READ,
            self::ENTITY_CASH_ACCOUNT_UPDATE,
            self::ENTITY_CASH_ACCOUNT_SHEET_DELETE,
            self::ENTITY_CASH_ACCOUNT_SHEET_READ,
            self::ENTITY_CASH_ACCOUNT_SHEET_UPDATE,
            self::ENTITY_CASH_ACCOUNT_SHEET_UPDATE_CLOSE,
            self::ENTITY_COMMERCIAL_LANGUAGE_DELETE,
            self::ENTITY_COMMERCIAL_LANGUAGE_READ,
            self::ENTITY_COMMERCIAL_LANGUAGE_UPDATE,
            self::ENTITY_COMPANY_SIZE_DELETE,
            self::ENTITY_COMPANY_SIZE_READ,
            self::ENTITY_COMPANY_SIZE_UPDATE,
            self::ENTITY_CONTRACT_BILLING,
            self::ENTITY_CONTRACT_CREATE_DOCUMENTS,
            self::ENTITY_CONTRACT_DELETE,
            self::ENTITY_CONTRACT_IMPORT,
            self::ENTITY_CONTRACT_READ,
            self::ENTITY_CONTRACT_READ_ALL,
            self::ENTITY_CONTRACT_SETTINGS,
            self::ENTITY_CONTRACT_UPDATE,
            self::ENTITY_CONTRACT_AUTHORIZATION_UNIT_DELETE,
            self::ENTITY_CONTRACT_AUTHORIZATION_UNIT_READ,
            self::ENTITY_CONTRACT_AUTHORIZATION_UNIT_UPDATE,
            self::ENTITY_CONTRACT_BILLING_GROUP_DELETE,
            self::ENTITY_CONTRACT_BILLING_GROUP_READ,
            self::ENTITY_CONTRACT_BILLING_GROUP_UPDATE,
            self::ENTITY_CONTRACT_TERMINATION_REASON_DELETE,
            self::ENTITY_CONTRACT_TERMINATION_REASON_READ,
            self::ENTITY_CONTRACT_TERMINATION_REASON_UPDATE,
            self::ENTITY_CONTRACT_TYPE_DELETE,
            self::ENTITY_CONTRACT_TYPE_READ,
            self::ENTITY_CONTRACT_TYPE_UPDATE,
            self::ENTITY_COST_CENTER_DELETE,
            self::ENTITY_COST_CENTER_EXPORT,
            self::ENTITY_COST_CENTER_IMPORT,
            self::ENTITY_COST_CENTER_READ,
            self::ENTITY_COST_CENTER_UPDATE,
            self::ENTITY_COST_CENTER_GROUP_DELETE,
            self::ENTITY_COST_CENTER_GROUP_READ,
            self::ENTITY_COST_CENTER_GROUP_UPDATE,
            self::ENTITY_COST_TYPE_DELETE,
            self::ENTITY_COST_TYPE_READ,
            self::ENTITY_COST_TYPE_UPDATE,
            self::ENTITY_CURRENCY_DELETE,
            self::ENTITY_CURRENCY_READ,
            self::ENTITY_CURRENCY_UPDATE,
            self::ENTITY_CUSTOM_ATTRIBUTE_DEFINITION_DELETE,
            self::ENTITY_CUSTOM_ATTRIBUTE_DEFINITION_UPDATE,
            self::ENTITY_CUSTOM_FONT_DELETE,
            self::ENTITY_CUSTOM_FONT_READ,
            self::ENTITY_CUSTOM_FONT_UPDATE,
            self::ENTITY_CUSTOM_LABEL_FORMAT_DELETE,
            self::ENTITY_CUSTOM_LABEL_FORMAT_READ,
            self::ENTITY_CUSTOM_LABEL_FORMAT_UPDATE,
            self::ENTITY_CUSTOMER_CATEGORY_DELETE,
            self::ENTITY_CUSTOMER_CATEGORY_READ,
            self::ENTITY_CUSTOMER_CATEGORY_UPDATE,
            self::ENTITY_CUSTOMER_LEAD_LOSS_REASON_DELETE,
            self::ENTITY_CUSTOMER_LEAD_LOSS_REASON_READ,
            self::ENTITY_CUSTOMER_LEAD_LOSS_REASON_UPDATE,
            self::ENTITY_CUSTOMER_TOPIC_DELETE,
            self::ENTITY_CUSTOMER_TOPIC_READ,
            self::ENTITY_CUSTOMER_TOPIC_UPDATE,
            self::ENTITY_CUSTOMS_TARIFF_NUMBER_DELETE,
            self::ENTITY_CUSTOMS_TARIFF_NUMBER_READ,
            self::ENTITY_CUSTOMS_TARIFF_NUMBER_UPDATE,
            self::ENTITY_DEFAULT_INTEREST_CONFIG_DELETE,
            self::ENTITY_DEFAULT_INTEREST_CONFIG_READ,
            self::ENTITY_DEFAULT_INTEREST_CONFIG_UPDATE,
            self::ENTITY_DOCUMENT_FOLDER_DELETE,
            self::ENTITY_DOCUMENT_FOLDER_READ,
            self::ENTITY_DOCUMENT_FOLDER_UPDATE,
            self::ENTITY_DOCUMENT_FOLDER_UPDATE_PUBLIC_PAGE_UUID,
            self::ENTITY_DUNNING_LEVEL_DELETE,
            self::ENTITY_DUNNING_LEVEL_READ,
            self::ENTITY_DUNNING_LEVEL_UPDATE,
            self::ENTITY_DUNNING_RUN_DELETE,
            self::ENTITY_DUNNING_RUN_READ,
            self::ENTITY_DUNNING_RUN_SETTINGS,
            self::ENTITY_DUNNING_RUN_UPDATE,
            self::ENTITY_ERIC_TRANSFER_LOG_READ,
            self::ENTITY_ERIC_TRANSFER_LOG_UPDATE,
            self::ENTITY_EXTERNAL_CONNECTION_DELETE,
            self::ENTITY_EXTERNAL_CONNECTION_READ,
            self::ENTITY_EXTERNAL_CONNECTION_UPDATE,
            self::ENTITY_FINANCIAL_YEAR_DELETE,
            self::ENTITY_FINANCIAL_YEAR_READ,
            self::ENTITY_FINANCIAL_YEAR_UPDATE,
            self::ENTITY_FINANCIAL_YEAR_UPDATE_POSTING_PERIOD,
            self::ENTITY_FORM_TEXT_BLOCK_DELETE,
            self::ENTITY_FORM_TEXT_BLOCK_READ,
            self::ENTITY_FORM_TEXT_BLOCK_UPDATE,
            self::ENTITY_FORM_VARIANT_DELETE,
            self::ENTITY_FORM_VARIANT_READ,
            self::ENTITY_FORM_VARIANT_UPDATE,
            self::ENTITY_FULFILLMENT_PROVIDER_DELETE,
            self::ENTITY_FULFILLMENT_PROVIDER_READ,
            self::ENTITY_FULFILLMENT_PROVIDER_UPDATE,
            self::ENTITY_GROUPWARE_CONTACT_DELETE,
            self::ENTITY_GROUPWARE_CONTACT_READ,
            self::ENTITY_GROUPWARE_CONTACT_UPDATE,
            self::ENTITY_HELPDESK_CUSTOMER_ORGANIZATION_READ,
            self::ENTITY_HELPDESK_CUSTOMER_ORGANIZATION_UPDATE,
            self::ENTITY_INCOMING_GOODS_CREATE_WITHOUT_PURCHASE_ORDER,
            self::ENTITY_INCOMING_GOODS_DELETE,
            self::ENTITY_INCOMING_GOODS_READ,
            self::ENTITY_INCOMING_GOODS_SETTINGS,
            self::ENTITY_INCOMING_GOODS_UPDATE,
            self::ENTITY_INTERNAL_TRANSPORT_REFERENCE_CREATE_PERMANENT_TRANSPORT_REFERENCE,
            self::ENTITY_INTERNAL_TRANSPORT_REFERENCE_DELETE,
            self::ENTITY_INTERNAL_TRANSPORT_REFERENCE_READ,
            self::ENTITY_INTERNAL_TRANSPORT_REFERENCE_UPDATE,
            self::ENTITY_INVENTORY_CREATE_DOCUMENTS,
            self::ENTITY_INVENTORY_IMPORT,
            self::ENTITY_INVENTORY_READ,
            self::ENTITY_INVENTORY_UPDATE,
            self::ENTITY_LABEL_VARIANT_DELETE,
            self::ENTITY_LABEL_VARIANT_READ,
            self::ENTITY_LABEL_VARIANT_UPDATE,
            self::ENTITY_LEAD_RATING_DELETE,
            self::ENTITY_LEAD_RATING_READ,
            self::ENTITY_LEAD_RATING_UPDATE,
            self::ENTITY_LEAD_SOURCE_DELETE,
            self::ENTITY_LEAD_SOURCE_READ,
            self::ENTITY_LEAD_SOURCE_UPDATE,
            self::ENTITY_LEDGER_ACCOUNT_DELETE,
            self::ENTITY_LEDGER_ACCOUNT_READ,
            self::ENTITY_LEDGER_ACCOUNT_UPDATE,
            self::ENTITY_LEGAL_FORM_DELETE,
            self::ENTITY_LEGAL_FORM_READ,
            self::ENTITY_LEGAL_FORM_UPDATE,
            self::ENTITY_LOADING_EQUIPMENT_IDENTIFIER_DELETE,
            self::ENTITY_LOADING_EQUIPMENT_IDENTIFIER_READ,
            self::ENTITY_LOADING_EQUIPMENT_IDENTIFIER_UPDATE,
            self::ENTITY_MAIL_ACCOUNT_DELETE,
            self::ENTITY_MAIL_ACCOUNT_READ,
            self::ENTITY_MAIL_ACCOUNT_UPDATE,
            self::ENTITY_MAIL_MESSAGE_DELETE,
            self::ENTITY_MAIL_MESSAGE_READ,
            self::ENTITY_MAIL_MESSAGE_UPDATE,
            self::ENTITY_MAIL_TEMPLATE_DELETE,
            self::ENTITY_MAIL_TEMPLATE_READ,
            self::ENTITY_MAIL_TEMPLATE_UPDATE,
            self::ENTITY_MANUFACTURER_DELETE,
            self::ENTITY_MANUFACTURER_READ,
            self::ENTITY_MANUFACTURER_UPDATE,
            self::ENTITY_MONEY_TRANSACTION_DELETE,
            self::ENTITY_MONEY_TRANSACTION_READ,
            self::ENTITY_MONEY_TRANSACTION_UPDATE,
            self::ENTITY_NUMBER_RANGE_DELETE,
            self::ENTITY_NUMBER_RANGE_READ,
            self::ENTITY_NUMBER_RANGE_UPDATE,
            self::ENTITY_OPPORTUNITY_DELETE,
            self::ENTITY_OPPORTUNITY_IMPORT,
            self::ENTITY_OPPORTUNITY_READ,
            self::ENTITY_OPPORTUNITY_SETTINGS,
            self::ENTITY_OPPORTUNITY_UPDATE,
            self::ENTITY_OPPORTUNITY_UPDATE_SALES_STAGE_TO_WON_OR_LOST,
            self::ENTITY_OPPORTUNITY_TOPIC_DELETE,
            self::ENTITY_OPPORTUNITY_TOPIC_READ,
            self::ENTITY_OPPORTUNITY_TOPIC_UPDATE,
            self::ENTITY_OPPORTUNITY_WIN_LOSS_REASON_DELETE,
            self::ENTITY_OPPORTUNITY_WIN_LOSS_REASON_READ,
            self::ENTITY_OPPORTUNITY_WIN_LOSS_REASON_UPDATE,
            self::ENTITY_PARTY_DELETE,
            self::ENTITY_PARTY_EXPORT,
            self::ENTITY_PARTY_FEATURE_COMPETITOR,
            self::ENTITY_PARTY_FEATURE_SUPPLIER,
            self::ENTITY_PARTY_FINANCIAL_DATA,
            self::ENTITY_PARTY_IMPORT,
            self::ENTITY_PARTY_READ,
            self::ENTITY_PARTY_READ_ALL,
            self::ENTITY_PARTY_SETTINGS,
            self::ENTITY_PARTY_SETTINGS_HIDE_CONTACTS,
            self::ENTITY_PARTY_SYNC_ADDRESSES_TO_OPEN_RECORDS,
            self::ENTITY_PARTY_UPDATE,
            self::ENTITY_PARTY_UPDATE_ACCOUNTING_DATA,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_BLOCKED,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_CREDIT_LIMIT,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_DELIVERY_BLOCK,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_DUNNING_BLOCK,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_INSURED,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_NON_STANDARD_TAX,
            self::ENTITY_PARTY_UPDATE_CUSTOMER_OR_SUPPLIER_NUMBER,
            self::ENTITY_PARTY_UPDATE_INVOICE_BLOCK,
            self::ENTITY_PARTY_UPDATE_PUBLIC_PAGE_UUID,
            self::ENTITY_PARTY_WIDGET_CLEVER_REACH,
            self::ENTITY_PARTY_OPEN_ITEM_REFERENCE_DELETE,
            self::ENTITY_PARTY_OPEN_ITEM_REFERENCE_READ,
            self::ENTITY_PARTY_OPEN_ITEM_REFERENCE_UPDATE,
            self::ENTITY_PARTY_RATING_DELETE,
            self::ENTITY_PARTY_RATING_READ,
            self::ENTITY_PARTY_RATING_UPDATE,
            self::ENTITY_PAYMENT_APPLICATION_READ,
            self::ENTITY_PAYMENT_METHOD_DELETE,
            self::ENTITY_PAYMENT_METHOD_READ,
            self::ENTITY_PAYMENT_METHOD_UPDATE,
            self::ENTITY_PAYMENT_PROVIDER_CREDENTIAL_DELETE,
            self::ENTITY_PAYMENT_PROVIDER_CREDENTIAL_READ,
            self::ENTITY_PAYMENT_PROVIDER_CREDENTIAL_UPDATE,
            self::ENTITY_PAYMENT_RUN_CREATE_PAYMENT_ADVICE,
            self::ENTITY_PAYMENT_RUN_DELETE,
            self::ENTITY_PAYMENT_RUN_READ,
            self::ENTITY_PAYMENT_RUN_SETTINGS,
            self::ENTITY_PAYMENT_RUN_UPDATE,
            self::ENTITY_PERFORMANCE_RECORD_DELETE,
            self::ENTITY_PERFORMANCE_RECORD_READ,
            self::ENTITY_PERFORMANCE_RECORD_SETTINGS,
            self::ENTITY_PERFORMANCE_RECORD_UPDATE,
            self::ENTITY_PERSON_DEPARTMENT_DELETE,
            self::ENTITY_PERSON_DEPARTMENT_READ,
            self::ENTITY_PERSON_DEPARTMENT_UPDATE,
            self::ENTITY_PERSON_ROLE_DELETE,
            self::ENTITY_PERSON_ROLE_READ,
            self::ENTITY_PERSON_ROLE_UPDATE,
            self::ENTITY_PERSONAL_ACCOUNTING_CODE_DELETE,
            self::ENTITY_PERSONAL_ACCOUNTING_CODE_READ,
            self::ENTITY_PERSONAL_ACCOUNTING_CODE_UPDATE,
            self::ENTITY_PICK_READ,
            self::ENTITY_PICK_UPDATE,
            self::ENTITY_PICK_CHECK_REASON_DELETE,
            self::ENTITY_PICK_CHECK_REASON_READ,
            self::ENTITY_PICK_CHECK_REASON_UPDATE,
            self::ENTITY_PLACE_OF_SERVICE_DELETE,
            self::ENTITY_PLACE_OF_SERVICE_READ,
            self::ENTITY_PLACE_OF_SERVICE_UPDATE,
            self::ENTITY_PRICE_CALCULATION_PARAMETER_DELETE,
            self::ENTITY_PRICE_CALCULATION_PARAMETER_READ,
            self::ENTITY_PRICE_CALCULATION_PARAMETER_UPDATE,
            self::ENTITY_PRODUCTION_ORDER_CREATE_DOCUMENTS,
            self::ENTITY_PRODUCTION_ORDER_DELETE,
            self::ENTITY_PRODUCTION_ORDER_IMPORT,
            self::ENTITY_PRODUCTION_ORDER_READ,
            self::ENTITY_PRODUCTION_ORDER_SETTINGS,
            self::ENTITY_PRODUCTION_ORDER_UPDATE,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_DELETE,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_IMPORT,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_READ,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_UPDATE,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_DELETE,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_IMPORT,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_READ,
            self::ENTITY_PRODUCTION_WORK_SCHEDULE_ASSIGNMENT_UPDATE,
            self::ENTITY_PROJECT_DELETE,
            self::ENTITY_PROJECT_READ,
            self::ENTITY_PROJECT_READ_ALL,
            self::ENTITY_PROJECT_UPDATE,
            self::ENTITY_PROJECT_UPDATE_PUBLIC_PAGE_UUID,
            self::ENTITY_PURCHASE_INVOICE_CANCEL,
            self::ENTITY_PURCHASE_INVOICE_DELETE,
            self::ENTITY_PURCHASE_INVOICE_DELETE_DOCUMENTS,
            self::ENTITY_PURCHASE_INVOICE_IMPORT,
            self::ENTITY_PURCHASE_INVOICE_READ,
            self::ENTITY_PURCHASE_INVOICE_SETTINGS,
            self::ENTITY_PURCHASE_INVOICE_UPDATE,
            self::ENTITY_PURCHASE_OPEN_ITEM_CREATE,
            self::ENTITY_PURCHASE_OPEN_ITEM_CREATE_DOCUMENTS,
            self::ENTITY_PURCHASE_OPEN_ITEM_DELETE,
            self::ENTITY_PURCHASE_OPEN_ITEM_EXPORT,
            self::ENTITY_PURCHASE_OPEN_ITEM_READ,
            self::ENTITY_PURCHASE_OPEN_ITEM_UPDATE,
            self::ENTITY_PURCHASE_ORDER_CREATE_DOCUMENTS,
            self::ENTITY_PURCHASE_ORDER_DELETE,
            self::ENTITY_PURCHASE_ORDER_READ,
            self::ENTITY_PURCHASE_ORDER_SETTINGS,
            self::ENTITY_PURCHASE_ORDER_UPDATE,
            self::ENTITY_PURCHASE_ORDER_UPDATE_PURCHASE_ORDER_TYPE_TRIANGULAR,
            self::ENTITY_PURCHASE_ORDER_REQUEST_CREATE_DOCUMENTS,
            self::ENTITY_PURCHASE_ORDER_REQUEST_DELETE,
            self::ENTITY_PURCHASE_ORDER_REQUEST_READ,
            self::ENTITY_PURCHASE_ORDER_REQUEST_SETTINGS,
            self::ENTITY_PURCHASE_ORDER_REQUEST_UPDATE,
            self::ENTITY_PURCHASE_ORDER_REQUEST_UPDATE_PUBLIC_PAGE_UUID,
            self::ENTITY_PURCHASE_REQUISITION_DELETE,
            self::ENTITY_PURCHASE_REQUISITION_READ,
            self::ENTITY_PURCHASE_REQUISITION_SETTINGS,
            self::ENTITY_PURCHASE_REQUISITION_UPDATE,
            self::ENTITY_QUOTATION_CREATE_DOCUMENTS,
            self::ENTITY_QUOTATION_DELETE,
            self::ENTITY_QUOTATION_IMPORT,
            self::ENTITY_QUOTATION_READ,
            self::ENTITY_QUOTATION_SETTINGS,
            self::ENTITY_QUOTATION_UPDATE,
            self::ENTITY_QUOTATION_UPDATE_PUBLIC_PAGE_UUID,
            self::ENTITY_REASON_OF_ABSENCE_DELETE,
            self::ENTITY_REASON_OF_ABSENCE_READ,
            self::ENTITY_REASON_OF_ABSENCE_UPDATE,
            self::ENTITY_RECORD_EMAILING_RULE_DELETE,
            self::ENTITY_RECORD_EMAILING_RULE_READ,
            self::ENTITY_RECORD_EMAILING_RULE_UPDATE,
            self::ENTITY_RECURRING_INVOICE_DELETE,
            self::ENTITY_RECURRING_INVOICE_DELETE_DOCUMENTS,
            self::ENTITY_RECURRING_INVOICE_READ,
            self::ENTITY_RECURRING_INVOICE_SETTINGS,
            self::ENTITY_RECURRING_INVOICE_UPDATE,
            self::ENTITY_REGION_DELETE,
            self::ENTITY_REGION_READ,
            self::ENTITY_REGION_UPDATE,
            self::ENTITY_REMOTE_PRINT_CONFIGURATION_DELETE,
            self::ENTITY_REMOTE_PRINT_CONFIGURATION_READ,
            self::ENTITY_REMOTE_PRINT_CONFIGURATION_UPDATE,
            self::ENTITY_REMOTE_PRINT_JOB_DELETE,
            self::ENTITY_REMOTE_PRINT_JOB_READ,
            self::ENTITY_REMOTE_PRINT_JOB_READ_ALL,
            self::ENTITY_REMOTE_PRINT_JOB_UPDATE,
            self::ENTITY_SALES_INVOICE_CANCEL,
            self::ENTITY_SALES_INVOICE_CREATE_DOCUMENTS,
            self::ENTITY_SALES_INVOICE_DELETE,
            self::ENTITY_SALES_INVOICE_DELETE_DOCUMENTS,
            self::ENTITY_SALES_INVOICE_EXPORT,
            self::ENTITY_SALES_INVOICE_IMPORT,
            self::ENTITY_SALES_INVOICE_READ,
            self::ENTITY_SALES_INVOICE_RECREATE_DOCUMENTS,
            self::ENTITY_SALES_INVOICE_SETTINGS,
            self::ENTITY_SALES_INVOICE_UPDATE,
            self::ENTITY_SALES_OPEN_ITEM_CREATE,
            self::ENTITY_SALES_OPEN_ITEM_CREATE_DOCUMENTS,
            self::ENTITY_SALES_OPEN_ITEM_DELETE,
            self::ENTITY_SALES_OPEN_ITEM_EXPORT,
            self::ENTITY_SALES_OPEN_ITEM_READ,
            self::ENTITY_SALES_OPEN_ITEM_UPDATE,
            self::ENTITY_SALES_ORDER_CREATE_ORDER_CONFIRMATION,
            self::ENTITY_SALES_ORDER_DELETE,
            self::ENTITY_SALES_ORDER_IMPORT,
            self::ENTITY_SALES_ORDER_MANAGE_ALL_PROJECT_ORDER_TASKS,
            self::ENTITY_SALES_ORDER_READ,
            self::ENTITY_SALES_ORDER_READ_SHIPPED_QUANTITY,
            self::ENTITY_SALES_ORDER_SETTINGS,
            self::ENTITY_SALES_ORDER_UPDATE,
            self::ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_ADVANCE_PAYMENT,
            self::ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_COUNTER_SALES,
            self::ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_PART_PAYMENT,
            self::ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_PREPAYMENT,
            self::ENTITY_SALES_ORDER_UPDATE_PAYMENT_TYPE_STANDARD,
            self::ENTITY_SALES_STAGE_DELETE,
            self::ENTITY_SALES_STAGE_READ,
            self::ENTITY_SALES_STAGE_UPDATE,
            self::ENTITY_SALES_TEAM_DELETE,
            self::ENTITY_SALES_TEAM_READ,
            self::ENTITY_SALES_TEAM_UPDATE,
            self::ENTITY_SECTOR_DELETE,
            self::ENTITY_SECTOR_READ,
            self::ENTITY_SECTOR_UPDATE,
            self::ENTITY_SEPA_DIRECT_DEBIT_MANDATE_DELETE,
            self::ENTITY_SEPA_DIRECT_DEBIT_MANDATE_EXPORT,
            self::ENTITY_SEPA_DIRECT_DEBIT_MANDATE_IMPORT,
            self::ENTITY_SEPA_DIRECT_DEBIT_MANDATE_READ,
            self::ENTITY_SEPA_DIRECT_DEBIT_MANDATE_SETTINGS,
            self::ENTITY_SEPA_DIRECT_DEBIT_MANDATE_UPDATE,
            self::ENTITY_SHIPMENT_CREATE_LABEL,
            self::ENTITY_SHIPMENT_CREATE_WITHOUT_SALES_ORDER,
            self::ENTITY_SHIPMENT_DELETE,
            self::ENTITY_SHIPMENT_EXPORT,
            self::ENTITY_SHIPMENT_READ,
            self::ENTITY_SHIPMENT_SETTINGS,
            self::ENTITY_SHIPMENT_UPDATE,
            self::ENTITY_SHIPMENT_METHOD_DELETE,
            self::ENTITY_SHIPMENT_METHOD_READ,
            self::ENTITY_SHIPMENT_METHOD_UPDATE,
            self::ENTITY_SHIPPING_CARRIER_DELETE,
            self::ENTITY_SHIPPING_CARRIER_READ,
            self::ENTITY_SHIPPING_CARRIER_UPDATE,
            self::ENTITY_SHOUTBOX_TEMPLATE_DELETE,
            self::ENTITY_SHOUTBOX_TEMPLATE_READ,
            self::ENTITY_SHOUTBOX_TEMPLATE_UPDATE,
            self::ENTITY_STAGED_MONEY_TRANSACTION_DELETE,
            self::ENTITY_STAGED_MONEY_TRANSACTION_READ,
            self::ENTITY_STAGED_MONEY_TRANSACTION_UPDATE,
            self::ENTITY_STORAGE_PLACE_BLOCKING_REASON_DELETE,
            self::ENTITY_STORAGE_PLACE_BLOCKING_REASON_READ,
            self::ENTITY_STORAGE_PLACE_BLOCKING_REASON_UPDATE,
            self::ENTITY_STORAGE_PLACE_SIZE_DELETE,
            self::ENTITY_STORAGE_PLACE_SIZE_READ,
            self::ENTITY_STORAGE_PLACE_SIZE_UPDATE,
            self::ENTITY_TAG_CREATE,
            self::ENTITY_TAG_DELETE,
            self::ENTITY_TAG_READ,
            self::ENTITY_TAG_UPDATE,
            self::ENTITY_TASK_DELETE,
            self::ENTITY_TASK_DELETE_PRIVATE_AS_WATCHER,
            self::ENTITY_TASK_READ,
            self::ENTITY_TASK_UPDATE,
            self::ENTITY_TASK_UPDATE_PRIVATE_AS_WATCHER,
            self::ENTITY_TASK_TEMPLATE_DELETE,
            self::ENTITY_TASK_TEMPLATE_READ,
            self::ENTITY_TASK_TEMPLATE_UPDATE,
            self::ENTITY_TASK_TOPIC_DELETE,
            self::ENTITY_TASK_TOPIC_READ,
            self::ENTITY_TASK_TOPIC_UPDATE,
            self::ENTITY_TASK_TYPE_DELETE,
            self::ENTITY_TASK_TYPE_READ,
            self::ENTITY_TASK_TYPE_UPDATE,
            self::ENTITY_TAX_DELETE,
            self::ENTITY_TAX_READ,
            self::ENTITY_TAX_UPDATE,
            self::ENTITY_TAX_DETERMINATION_RULE_DELETE,
            self::ENTITY_TAX_DETERMINATION_RULE_READ,
            self::ENTITY_TAX_DETERMINATION_RULE_UPDATE,
            self::ENTITY_TERM_OF_PAYMENT_DELETE,
            self::ENTITY_TERM_OF_PAYMENT_READ,
            self::ENTITY_TERM_OF_PAYMENT_UPDATE,
            self::ENTITY_TICKET_DELETE,
            self::ENTITY_TICKET_READ,
            self::ENTITY_TICKET_READ_ALL,
            self::ENTITY_TICKET_SETTINGS,
            self::ENTITY_TICKET_UPDATE,
            self::ENTITY_TICKET_UPDATE_ADVANCED,
            self::ENTITY_TICKET_UPDATE_DELETE_TICKET_RATING,
            self::ENTITY_TICKET_UPDATE_PRINT,
            self::ENTITY_TICKET_UPDATE_PUBLIC_PAGE_UUID,
            self::ENTITY_TICKET_ASSIGNMENT_RULE_DELETE,
            self::ENTITY_TICKET_ASSIGNMENT_RULE_READ,
            self::ENTITY_TICKET_ASSIGNMENT_RULE_UPDATE,
            self::ENTITY_TICKET_CATEGORY_IMPORT,
            self::ENTITY_TICKET_CATEGORY_READ,
            self::ENTITY_TICKET_CATEGORY_UPDATE,
            self::ENTITY_TICKET_CHANNEL_DELETE,
            self::ENTITY_TICKET_CHANNEL_READ,
            self::ENTITY_TICKET_CHANNEL_UPDATE,
            self::ENTITY_TICKET_FAQ_DELETE,
            self::ENTITY_TICKET_FAQ_READ,
            self::ENTITY_TICKET_FAQ_UPDATE,
            self::ENTITY_TICKET_MAIL_TEMPLATE_DELETE,
            self::ENTITY_TICKET_MAIL_TEMPLATE_READ,
            self::ENTITY_TICKET_MAIL_TEMPLATE_UPDATE,
            self::ENTITY_TICKET_POOLING_GROUP_DELETE,
            self::ENTITY_TICKET_POOLING_GROUP_READ,
            self::ENTITY_TICKET_POOLING_GROUP_UPDATE,
            self::ENTITY_TICKET_PRIORITY_DELETE,
            self::ENTITY_TICKET_PRIORITY_READ,
            self::ENTITY_TICKET_PRIORITY_UPDATE,
            self::ENTITY_TICKET_SERVICE_LEVEL_AGREEMENT_DELETE,
            self::ENTITY_TICKET_SERVICE_LEVEL_AGREEMENT_READ,
            self::ENTITY_TICKET_SERVICE_LEVEL_AGREEMENT_UPDATE,
            self::ENTITY_TICKET_STATUS_DELETE,
            self::ENTITY_TICKET_STATUS_READ,
            self::ENTITY_TICKET_STATUS_UPDATE,
            self::ENTITY_TICKET_TYPE_DELETE,
            self::ENTITY_TICKET_TYPE_READ,
            self::ENTITY_TICKET_TYPE_UPDATE,
            self::ENTITY_TIME_RECORD_CREATE,
            self::ENTITY_TIME_RECORD_DELETE,
            self::ENTITY_TIME_RECORD_MOVE,
            self::ENTITY_TIME_RECORD_READ,
            self::ENTITY_TIME_RECORD_READ_ALL_PROJECT,
            self::ENTITY_TIME_RECORD_RESOURCE_CALENDAR,
            self::ENTITY_TIME_RECORD_SETTINGS,
            self::ENTITY_TIME_RECORD_UPDATE,
            self::ENTITY_TIME_RECORD_UPDATE_HOURLY_RATE_PROJECT,
            self::ENTITY_TIME_RECORD_UPDATE_HOURLY_RATE_TICKET,
            self::ENTITY_TIME_RECORD_UPDATE_USER,
            self::ENTITY_TRANSLATION_DELETE,
            self::ENTITY_TRANSLATION_EXPORT,
            self::ENTITY_TRANSLATION_IMPORT,
            self::ENTITY_TRANSLATION_READ,
            self::ENTITY_TRANSLATION_UPDATE,
            self::ENTITY_TRANSPORTATION_ORDER_CREATE_PICKING_ORDER,
            self::ENTITY_TRANSPORTATION_ORDER_DELETE,
            self::ENTITY_TRANSPORTATION_ORDER_READ,
            self::ENTITY_TRANSPORTATION_ORDER_UPDATE,
            self::ENTITY_UNIT_DELETE,
            self::ENTITY_UNIT_READ,
            self::ENTITY_UNIT_UPDATE,
            self::ENTITY_USER_DELETE,
            self::ENTITY_USER_EXPORT,
            self::ENTITY_USER_IMPORT,
            self::ENTITY_USER_UPDATE,
            self::ENTITY_USER_ROLE_DELETE,
            self::ENTITY_USER_ROLE_READ,
            self::ENTITY_USER_ROLE_UPDATE,
            self::ENTITY_USER_ROLE_UPDATE_PERMISSIONS,
            self::ENTITY_VARIANT_ARTICLE_DELETE,
            self::ENTITY_VARIANT_ARTICLE_READ,
            self::ENTITY_VARIANT_ARTICLE_UPDATE,
            self::ENTITY_VIBRANT_REPORT_DELETE,
            self::ENTITY_VIBRANT_REPORT_READ,
            self::ENTITY_VIBRANT_REPORT_UPDATE,
            self::ENTITY_WAREHOUSE_DELETE,
            self::ENTITY_WAREHOUSE_READ,
            self::ENTITY_WAREHOUSE_UPDATE,
            self::ENTITY_WAREHOUSE_STOCK_READ,
            self::ENTITY_WAREHOUSE_STOCK_MOVEMENT_READ,
            self::ENTITY_WAREHOUSE_STOCK_MOVEMENT_UPDATE,
            self::ENTITY_WEB2_LEAD_CONFIG_DELETE,
            self::ENTITY_WEB2_LEAD_CONFIG_READ,
            self::ENTITY_WEB2_LEAD_CONFIG_UPDATE,
            self::ENTITY_WEB2_TICKET_CONFIG_DELETE,
            self::ENTITY_WEB2_TICKET_CONFIG_READ,
            self::ENTITY_WEB2_TICKET_CONFIG_UPDATE,
            self::ENTITY_WEBHOOK_DELETE,
            self::ENTITY_WEBHOOK_READ,
            self::ENTITY_WEBHOOK_UPDATE,
            self::ENTITY_WECLAPP_OS_DELETE,
            self::ENTITY_WECLAPP_OS_READ,
            self::ENTITY_WECLAPP_OS_UPDATE,
            self::FEATURE_ACCOUNTING_EXPORT_EXECUTE,
            self::FEATURE_ACTIVITY_LOG_READ,
            self::FEATURE_AMAZON_BETA_DELIVERY,
            self::FEATURE_COMMISSION_READ,
            self::FEATURE_COMMISSION_SETTINGS,
            self::FEATURE_COMMISSION_UPDATE,
            self::FEATURE_CONTRACT_REPORTS_READ,
            self::FEATURE_CUSTOM_REPORT_EXECUTE,
            self::FEATURE_CUSTOM_REPORT_UPDATE,
            self::FEATURE_DATA_TRANSFER_EXPORT_FULL_ZIP,
            self::FEATURE_ECOMMERCE_AMAZON_EXPORT,
            self::FEATURE_ECOMMERCE_AMAZON_IMPORT,
            self::FEATURE_ECOMMERCE_E_BAY_LISTINGS,
            self::FEATURE_ECOMMERCE_ECOMMERCE_CENTER,
            self::FEATURE_HELPDESK_REPORTS_READ,
            self::FEATURE_MASTER_DATA_REPORTS_READ,
            self::FEATURE_REDUCTION_ADDITION_UPDATE,
            self::FEATURE_REPORTS_READ,
            self::FEATURE_REVENUE_REPORTS_READ,
            self::FEATURE_SALES_COST_READ,
            self::FEATURE_SALES_COST_UPDATE,
            self::FEATURE_TABLE_EXPORT_EXECUTE,
            self::FEATURE_TRANSACTION_DATA_REPORTS_READ,
            self::FEATURE_WAREHOUSE_REPORTS_READ,
            self::FEATURE_WECLAPP_ADMIN,
            self::FEATURE_WECLAPP_MASS_ACTIONS,
            self::FEATURE_WECLAPP_TO_WECLAPP_BETA_USER,
            self::FEATURE_XT_COMMERCE_BETA_USER,
            self::SETTINGS_ACCOUNTING_INITIALIZE,
            self::SETTINGS_ACCOUNTING_RESET,
            self::SETTINGS_ACCOUNTING_UPDATE,
            self::SETTINGS_FIELDSET_CONFIGURATION_UPDATE,
            self::SETTINGS_FORM_UPDATE,
            self::SETTINGS_MAIL2_TICKET_UPDATE,
            self::SETTINGS_MENU_ITEM_CONFIGURATION_UPDATE,
            self::SETTINGS_ORGANIZER_UPDATE,
            self::SETTINGS_PURCHASE_UPDATE,
            self::SETTINGS_SALES_UPDATE,
            self::SETTINGS_SALES_CHANNEL_UPDATE,
            self::SETTINGS_VIEW_UPDATE,
            self::SETTINGS_WAREHOUSE_UPDATE,
            self::SETTINGS_WAREHOUSE_UPDATE_LOCATION_TYPE_SETTINGS
        ];
    }
}


