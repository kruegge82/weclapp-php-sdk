<?php
/**
 * DistributionChannel
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
 * DistributionChannel Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DistributionChannel
{
    /**
     * Possible values of this enum
     */
    public const GROSS1 = 'GROSS1';

    public const GROSS10 = 'GROSS10';

    public const GROSS100 = 'GROSS100';

    public const GROSS101 = 'GROSS101';

    public const GROSS102 = 'GROSS102';

    public const GROSS103 = 'GROSS103';

    public const GROSS104 = 'GROSS104';

    public const GROSS105 = 'GROSS105';

    public const GROSS106 = 'GROSS106';

    public const GROSS107 = 'GROSS107';

    public const GROSS108 = 'GROSS108';

    public const GROSS109 = 'GROSS109';

    public const GROSS11 = 'GROSS11';

    public const GROSS110 = 'GROSS110';

    public const GROSS111 = 'GROSS111';

    public const GROSS112 = 'GROSS112';

    public const GROSS113 = 'GROSS113';

    public const GROSS114 = 'GROSS114';

    public const GROSS115 = 'GROSS115';

    public const GROSS116 = 'GROSS116';

    public const GROSS117 = 'GROSS117';

    public const GROSS118 = 'GROSS118';

    public const GROSS119 = 'GROSS119';

    public const GROSS12 = 'GROSS12';

    public const GROSS120 = 'GROSS120';

    public const GROSS121 = 'GROSS121';

    public const GROSS122 = 'GROSS122';

    public const GROSS123 = 'GROSS123';

    public const GROSS124 = 'GROSS124';

    public const GROSS125 = 'GROSS125';

    public const GROSS126 = 'GROSS126';

    public const GROSS127 = 'GROSS127';

    public const GROSS128 = 'GROSS128';

    public const GROSS129 = 'GROSS129';

    public const GROSS13 = 'GROSS13';

    public const GROSS130 = 'GROSS130';

    public const GROSS131 = 'GROSS131';

    public const GROSS132 = 'GROSS132';

    public const GROSS133 = 'GROSS133';

    public const GROSS134 = 'GROSS134';

    public const GROSS135 = 'GROSS135';

    public const GROSS136 = 'GROSS136';

    public const GROSS137 = 'GROSS137';

    public const GROSS138 = 'GROSS138';

    public const GROSS139 = 'GROSS139';

    public const GROSS14 = 'GROSS14';

    public const GROSS140 = 'GROSS140';

    public const GROSS141 = 'GROSS141';

    public const GROSS142 = 'GROSS142';

    public const GROSS143 = 'GROSS143';

    public const GROSS144 = 'GROSS144';

    public const GROSS145 = 'GROSS145';

    public const GROSS146 = 'GROSS146';

    public const GROSS147 = 'GROSS147';

    public const GROSS148 = 'GROSS148';

    public const GROSS149 = 'GROSS149';

    public const GROSS15 = 'GROSS15';

    public const GROSS150 = 'GROSS150';

    public const GROSS151 = 'GROSS151';

    public const GROSS152 = 'GROSS152';

    public const GROSS153 = 'GROSS153';

    public const GROSS154 = 'GROSS154';

    public const GROSS155 = 'GROSS155';

    public const GROSS156 = 'GROSS156';

    public const GROSS157 = 'GROSS157';

    public const GROSS158 = 'GROSS158';

    public const GROSS159 = 'GROSS159';

    public const GROSS16 = 'GROSS16';

    public const GROSS160 = 'GROSS160';

    public const GROSS161 = 'GROSS161';

    public const GROSS162 = 'GROSS162';

    public const GROSS163 = 'GROSS163';

    public const GROSS164 = 'GROSS164';

    public const GROSS165 = 'GROSS165';

    public const GROSS166 = 'GROSS166';

    public const GROSS167 = 'GROSS167';

    public const GROSS168 = 'GROSS168';

    public const GROSS169 = 'GROSS169';

    public const GROSS17 = 'GROSS17';

    public const GROSS170 = 'GROSS170';

    public const GROSS171 = 'GROSS171';

    public const GROSS172 = 'GROSS172';

    public const GROSS173 = 'GROSS173';

    public const GROSS174 = 'GROSS174';

    public const GROSS175 = 'GROSS175';

    public const GROSS176 = 'GROSS176';

    public const GROSS177 = 'GROSS177';

    public const GROSS178 = 'GROSS178';

    public const GROSS179 = 'GROSS179';

    public const GROSS18 = 'GROSS18';

    public const GROSS180 = 'GROSS180';

    public const GROSS181 = 'GROSS181';

    public const GROSS182 = 'GROSS182';

    public const GROSS183 = 'GROSS183';

    public const GROSS184 = 'GROSS184';

    public const GROSS185 = 'GROSS185';

    public const GROSS186 = 'GROSS186';

    public const GROSS187 = 'GROSS187';

    public const GROSS188 = 'GROSS188';

    public const GROSS189 = 'GROSS189';

    public const GROSS19 = 'GROSS19';

    public const GROSS190 = 'GROSS190';

    public const GROSS191 = 'GROSS191';

    public const GROSS192 = 'GROSS192';

    public const GROSS193 = 'GROSS193';

    public const GROSS194 = 'GROSS194';

    public const GROSS195 = 'GROSS195';

    public const GROSS196 = 'GROSS196';

    public const GROSS197 = 'GROSS197';

    public const GROSS198 = 'GROSS198';

    public const GROSS199 = 'GROSS199';

    public const GROSS2 = 'GROSS2';

    public const GROSS20 = 'GROSS20';

    public const GROSS200 = 'GROSS200';

    public const GROSS201 = 'GROSS201';

    public const GROSS202 = 'GROSS202';

    public const GROSS203 = 'GROSS203';

    public const GROSS204 = 'GROSS204';

    public const GROSS205 = 'GROSS205';

    public const GROSS206 = 'GROSS206';

    public const GROSS207 = 'GROSS207';

    public const GROSS208 = 'GROSS208';

    public const GROSS209 = 'GROSS209';

    public const GROSS21 = 'GROSS21';

    public const GROSS210 = 'GROSS210';

    public const GROSS211 = 'GROSS211';

    public const GROSS212 = 'GROSS212';

    public const GROSS213 = 'GROSS213';

    public const GROSS214 = 'GROSS214';

    public const GROSS215 = 'GROSS215';

    public const GROSS216 = 'GROSS216';

    public const GROSS217 = 'GROSS217';

    public const GROSS218 = 'GROSS218';

    public const GROSS219 = 'GROSS219';

    public const GROSS22 = 'GROSS22';

    public const GROSS220 = 'GROSS220';

    public const GROSS221 = 'GROSS221';

    public const GROSS222 = 'GROSS222';

    public const GROSS223 = 'GROSS223';

    public const GROSS224 = 'GROSS224';

    public const GROSS225 = 'GROSS225';

    public const GROSS226 = 'GROSS226';

    public const GROSS227 = 'GROSS227';

    public const GROSS228 = 'GROSS228';

    public const GROSS229 = 'GROSS229';

    public const GROSS23 = 'GROSS23';

    public const GROSS230 = 'GROSS230';

    public const GROSS231 = 'GROSS231';

    public const GROSS232 = 'GROSS232';

    public const GROSS233 = 'GROSS233';

    public const GROSS234 = 'GROSS234';

    public const GROSS235 = 'GROSS235';

    public const GROSS236 = 'GROSS236';

    public const GROSS237 = 'GROSS237';

    public const GROSS238 = 'GROSS238';

    public const GROSS239 = 'GROSS239';

    public const GROSS24 = 'GROSS24';

    public const GROSS240 = 'GROSS240';

    public const GROSS241 = 'GROSS241';

    public const GROSS242 = 'GROSS242';

    public const GROSS243 = 'GROSS243';

    public const GROSS244 = 'GROSS244';

    public const GROSS245 = 'GROSS245';

    public const GROSS246 = 'GROSS246';

    public const GROSS247 = 'GROSS247';

    public const GROSS248 = 'GROSS248';

    public const GROSS249 = 'GROSS249';

    public const GROSS25 = 'GROSS25';

    public const GROSS250 = 'GROSS250';

    public const GROSS251 = 'GROSS251';

    public const GROSS252 = 'GROSS252';

    public const GROSS253 = 'GROSS253';

    public const GROSS254 = 'GROSS254';

    public const GROSS255 = 'GROSS255';

    public const GROSS256 = 'GROSS256';

    public const GROSS257 = 'GROSS257';

    public const GROSS258 = 'GROSS258';

    public const GROSS259 = 'GROSS259';

    public const GROSS26 = 'GROSS26';

    public const GROSS260 = 'GROSS260';

    public const GROSS261 = 'GROSS261';

    public const GROSS262 = 'GROSS262';

    public const GROSS263 = 'GROSS263';

    public const GROSS264 = 'GROSS264';

    public const GROSS265 = 'GROSS265';

    public const GROSS266 = 'GROSS266';

    public const GROSS267 = 'GROSS267';

    public const GROSS268 = 'GROSS268';

    public const GROSS269 = 'GROSS269';

    public const GROSS27 = 'GROSS27';

    public const GROSS270 = 'GROSS270';

    public const GROSS271 = 'GROSS271';

    public const GROSS272 = 'GROSS272';

    public const GROSS273 = 'GROSS273';

    public const GROSS274 = 'GROSS274';

    public const GROSS275 = 'GROSS275';

    public const GROSS276 = 'GROSS276';

    public const GROSS277 = 'GROSS277';

    public const GROSS278 = 'GROSS278';

    public const GROSS279 = 'GROSS279';

    public const GROSS28 = 'GROSS28';

    public const GROSS280 = 'GROSS280';

    public const GROSS281 = 'GROSS281';

    public const GROSS282 = 'GROSS282';

    public const GROSS283 = 'GROSS283';

    public const GROSS284 = 'GROSS284';

    public const GROSS285 = 'GROSS285';

    public const GROSS286 = 'GROSS286';

    public const GROSS287 = 'GROSS287';

    public const GROSS288 = 'GROSS288';

    public const GROSS289 = 'GROSS289';

    public const GROSS29 = 'GROSS29';

    public const GROSS290 = 'GROSS290';

    public const GROSS291 = 'GROSS291';

    public const GROSS292 = 'GROSS292';

    public const GROSS293 = 'GROSS293';

    public const GROSS294 = 'GROSS294';

    public const GROSS295 = 'GROSS295';

    public const GROSS296 = 'GROSS296';

    public const GROSS297 = 'GROSS297';

    public const GROSS298 = 'GROSS298';

    public const GROSS299 = 'GROSS299';

    public const GROSS3 = 'GROSS3';

    public const GROSS30 = 'GROSS30';

    public const GROSS300 = 'GROSS300';

    public const GROSS31 = 'GROSS31';

    public const GROSS32 = 'GROSS32';

    public const GROSS33 = 'GROSS33';

    public const GROSS34 = 'GROSS34';

    public const GROSS35 = 'GROSS35';

    public const GROSS36 = 'GROSS36';

    public const GROSS37 = 'GROSS37';

    public const GROSS38 = 'GROSS38';

    public const GROSS39 = 'GROSS39';

    public const GROSS4 = 'GROSS4';

    public const GROSS40 = 'GROSS40';

    public const GROSS41 = 'GROSS41';

    public const GROSS42 = 'GROSS42';

    public const GROSS43 = 'GROSS43';

    public const GROSS44 = 'GROSS44';

    public const GROSS45 = 'GROSS45';

    public const GROSS46 = 'GROSS46';

    public const GROSS47 = 'GROSS47';

    public const GROSS48 = 'GROSS48';

    public const GROSS49 = 'GROSS49';

    public const GROSS5 = 'GROSS5';

    public const GROSS50 = 'GROSS50';

    public const GROSS51 = 'GROSS51';

    public const GROSS52 = 'GROSS52';

    public const GROSS53 = 'GROSS53';

    public const GROSS54 = 'GROSS54';

    public const GROSS55 = 'GROSS55';

    public const GROSS56 = 'GROSS56';

    public const GROSS57 = 'GROSS57';

    public const GROSS58 = 'GROSS58';

    public const GROSS59 = 'GROSS59';

    public const GROSS6 = 'GROSS6';

    public const GROSS60 = 'GROSS60';

    public const GROSS61 = 'GROSS61';

    public const GROSS62 = 'GROSS62';

    public const GROSS63 = 'GROSS63';

    public const GROSS64 = 'GROSS64';

    public const GROSS65 = 'GROSS65';

    public const GROSS66 = 'GROSS66';

    public const GROSS67 = 'GROSS67';

    public const GROSS68 = 'GROSS68';

    public const GROSS69 = 'GROSS69';

    public const GROSS7 = 'GROSS7';

    public const GROSS70 = 'GROSS70';

    public const GROSS71 = 'GROSS71';

    public const GROSS72 = 'GROSS72';

    public const GROSS73 = 'GROSS73';

    public const GROSS74 = 'GROSS74';

    public const GROSS75 = 'GROSS75';

    public const GROSS76 = 'GROSS76';

    public const GROSS77 = 'GROSS77';

    public const GROSS78 = 'GROSS78';

    public const GROSS79 = 'GROSS79';

    public const GROSS8 = 'GROSS8';

    public const GROSS80 = 'GROSS80';

    public const GROSS81 = 'GROSS81';

    public const GROSS82 = 'GROSS82';

    public const GROSS83 = 'GROSS83';

    public const GROSS84 = 'GROSS84';

    public const GROSS85 = 'GROSS85';

    public const GROSS86 = 'GROSS86';

    public const GROSS87 = 'GROSS87';

    public const GROSS88 = 'GROSS88';

    public const GROSS89 = 'GROSS89';

    public const GROSS9 = 'GROSS9';

    public const GROSS90 = 'GROSS90';

    public const GROSS91 = 'GROSS91';

    public const GROSS92 = 'GROSS92';

    public const GROSS93 = 'GROSS93';

    public const GROSS94 = 'GROSS94';

    public const GROSS95 = 'GROSS95';

    public const GROSS96 = 'GROSS96';

    public const GROSS97 = 'GROSS97';

    public const GROSS98 = 'GROSS98';

    public const GROSS99 = 'GROSS99';

    public const NET1 = 'NET1';

    public const NET10 = 'NET10';

    public const NET100 = 'NET100';

    public const NET101 = 'NET101';

    public const NET102 = 'NET102';

    public const NET103 = 'NET103';

    public const NET104 = 'NET104';

    public const NET105 = 'NET105';

    public const NET106 = 'NET106';

    public const NET107 = 'NET107';

    public const NET108 = 'NET108';

    public const NET109 = 'NET109';

    public const NET11 = 'NET11';

    public const NET110 = 'NET110';

    public const NET111 = 'NET111';

    public const NET112 = 'NET112';

    public const NET113 = 'NET113';

    public const NET114 = 'NET114';

    public const NET115 = 'NET115';

    public const NET116 = 'NET116';

    public const NET117 = 'NET117';

    public const NET118 = 'NET118';

    public const NET119 = 'NET119';

    public const NET12 = 'NET12';

    public const NET120 = 'NET120';

    public const NET121 = 'NET121';

    public const NET122 = 'NET122';

    public const NET123 = 'NET123';

    public const NET124 = 'NET124';

    public const NET125 = 'NET125';

    public const NET126 = 'NET126';

    public const NET127 = 'NET127';

    public const NET128 = 'NET128';

    public const NET129 = 'NET129';

    public const NET13 = 'NET13';

    public const NET130 = 'NET130';

    public const NET131 = 'NET131';

    public const NET132 = 'NET132';

    public const NET133 = 'NET133';

    public const NET134 = 'NET134';

    public const NET135 = 'NET135';

    public const NET136 = 'NET136';

    public const NET137 = 'NET137';

    public const NET138 = 'NET138';

    public const NET139 = 'NET139';

    public const NET14 = 'NET14';

    public const NET140 = 'NET140';

    public const NET141 = 'NET141';

    public const NET142 = 'NET142';

    public const NET143 = 'NET143';

    public const NET144 = 'NET144';

    public const NET145 = 'NET145';

    public const NET146 = 'NET146';

    public const NET147 = 'NET147';

    public const NET148 = 'NET148';

    public const NET149 = 'NET149';

    public const NET15 = 'NET15';

    public const NET150 = 'NET150';

    public const NET151 = 'NET151';

    public const NET152 = 'NET152';

    public const NET153 = 'NET153';

    public const NET154 = 'NET154';

    public const NET155 = 'NET155';

    public const NET156 = 'NET156';

    public const NET157 = 'NET157';

    public const NET158 = 'NET158';

    public const NET159 = 'NET159';

    public const NET16 = 'NET16';

    public const NET160 = 'NET160';

    public const NET161 = 'NET161';

    public const NET162 = 'NET162';

    public const NET163 = 'NET163';

    public const NET164 = 'NET164';

    public const NET165 = 'NET165';

    public const NET166 = 'NET166';

    public const NET167 = 'NET167';

    public const NET168 = 'NET168';

    public const NET169 = 'NET169';

    public const NET17 = 'NET17';

    public const NET170 = 'NET170';

    public const NET171 = 'NET171';

    public const NET172 = 'NET172';

    public const NET173 = 'NET173';

    public const NET174 = 'NET174';

    public const NET175 = 'NET175';

    public const NET176 = 'NET176';

    public const NET177 = 'NET177';

    public const NET178 = 'NET178';

    public const NET179 = 'NET179';

    public const NET18 = 'NET18';

    public const NET180 = 'NET180';

    public const NET181 = 'NET181';

    public const NET182 = 'NET182';

    public const NET183 = 'NET183';

    public const NET184 = 'NET184';

    public const NET185 = 'NET185';

    public const NET186 = 'NET186';

    public const NET187 = 'NET187';

    public const NET188 = 'NET188';

    public const NET189 = 'NET189';

    public const NET19 = 'NET19';

    public const NET190 = 'NET190';

    public const NET191 = 'NET191';

    public const NET192 = 'NET192';

    public const NET193 = 'NET193';

    public const NET194 = 'NET194';

    public const NET195 = 'NET195';

    public const NET196 = 'NET196';

    public const NET197 = 'NET197';

    public const NET198 = 'NET198';

    public const NET199 = 'NET199';

    public const NET2 = 'NET2';

    public const NET20 = 'NET20';

    public const NET200 = 'NET200';

    public const NET201 = 'NET201';

    public const NET202 = 'NET202';

    public const NET203 = 'NET203';

    public const NET204 = 'NET204';

    public const NET205 = 'NET205';

    public const NET206 = 'NET206';

    public const NET207 = 'NET207';

    public const NET208 = 'NET208';

    public const NET209 = 'NET209';

    public const NET21 = 'NET21';

    public const NET210 = 'NET210';

    public const NET211 = 'NET211';

    public const NET212 = 'NET212';

    public const NET213 = 'NET213';

    public const NET214 = 'NET214';

    public const NET215 = 'NET215';

    public const NET216 = 'NET216';

    public const NET217 = 'NET217';

    public const NET218 = 'NET218';

    public const NET219 = 'NET219';

    public const NET22 = 'NET22';

    public const NET220 = 'NET220';

    public const NET221 = 'NET221';

    public const NET222 = 'NET222';

    public const NET223 = 'NET223';

    public const NET224 = 'NET224';

    public const NET225 = 'NET225';

    public const NET226 = 'NET226';

    public const NET227 = 'NET227';

    public const NET228 = 'NET228';

    public const NET229 = 'NET229';

    public const NET23 = 'NET23';

    public const NET230 = 'NET230';

    public const NET231 = 'NET231';

    public const NET232 = 'NET232';

    public const NET233 = 'NET233';

    public const NET234 = 'NET234';

    public const NET235 = 'NET235';

    public const NET236 = 'NET236';

    public const NET237 = 'NET237';

    public const NET238 = 'NET238';

    public const NET239 = 'NET239';

    public const NET24 = 'NET24';

    public const NET240 = 'NET240';

    public const NET241 = 'NET241';

    public const NET242 = 'NET242';

    public const NET243 = 'NET243';

    public const NET244 = 'NET244';

    public const NET245 = 'NET245';

    public const NET246 = 'NET246';

    public const NET247 = 'NET247';

    public const NET248 = 'NET248';

    public const NET249 = 'NET249';

    public const NET25 = 'NET25';

    public const NET250 = 'NET250';

    public const NET251 = 'NET251';

    public const NET252 = 'NET252';

    public const NET253 = 'NET253';

    public const NET254 = 'NET254';

    public const NET255 = 'NET255';

    public const NET256 = 'NET256';

    public const NET257 = 'NET257';

    public const NET258 = 'NET258';

    public const NET259 = 'NET259';

    public const NET26 = 'NET26';

    public const NET260 = 'NET260';

    public const NET261 = 'NET261';

    public const NET262 = 'NET262';

    public const NET263 = 'NET263';

    public const NET264 = 'NET264';

    public const NET265 = 'NET265';

    public const NET266 = 'NET266';

    public const NET267 = 'NET267';

    public const NET268 = 'NET268';

    public const NET269 = 'NET269';

    public const NET27 = 'NET27';

    public const NET270 = 'NET270';

    public const NET271 = 'NET271';

    public const NET272 = 'NET272';

    public const NET273 = 'NET273';

    public const NET274 = 'NET274';

    public const NET275 = 'NET275';

    public const NET276 = 'NET276';

    public const NET277 = 'NET277';

    public const NET278 = 'NET278';

    public const NET279 = 'NET279';

    public const NET28 = 'NET28';

    public const NET280 = 'NET280';

    public const NET281 = 'NET281';

    public const NET282 = 'NET282';

    public const NET283 = 'NET283';

    public const NET284 = 'NET284';

    public const NET285 = 'NET285';

    public const NET286 = 'NET286';

    public const NET287 = 'NET287';

    public const NET288 = 'NET288';

    public const NET289 = 'NET289';

    public const NET29 = 'NET29';

    public const NET290 = 'NET290';

    public const NET291 = 'NET291';

    public const NET292 = 'NET292';

    public const NET293 = 'NET293';

    public const NET294 = 'NET294';

    public const NET295 = 'NET295';

    public const NET296 = 'NET296';

    public const NET297 = 'NET297';

    public const NET298 = 'NET298';

    public const NET299 = 'NET299';

    public const NET3 = 'NET3';

    public const NET30 = 'NET30';

    public const NET300 = 'NET300';

    public const NET31 = 'NET31';

    public const NET32 = 'NET32';

    public const NET33 = 'NET33';

    public const NET34 = 'NET34';

    public const NET35 = 'NET35';

    public const NET36 = 'NET36';

    public const NET37 = 'NET37';

    public const NET38 = 'NET38';

    public const NET39 = 'NET39';

    public const NET4 = 'NET4';

    public const NET40 = 'NET40';

    public const NET41 = 'NET41';

    public const NET42 = 'NET42';

    public const NET43 = 'NET43';

    public const NET44 = 'NET44';

    public const NET45 = 'NET45';

    public const NET46 = 'NET46';

    public const NET47 = 'NET47';

    public const NET48 = 'NET48';

    public const NET49 = 'NET49';

    public const NET5 = 'NET5';

    public const NET50 = 'NET50';

    public const NET51 = 'NET51';

    public const NET52 = 'NET52';

    public const NET53 = 'NET53';

    public const NET54 = 'NET54';

    public const NET55 = 'NET55';

    public const NET56 = 'NET56';

    public const NET57 = 'NET57';

    public const NET58 = 'NET58';

    public const NET59 = 'NET59';

    public const NET6 = 'NET6';

    public const NET60 = 'NET60';

    public const NET61 = 'NET61';

    public const NET62 = 'NET62';

    public const NET63 = 'NET63';

    public const NET64 = 'NET64';

    public const NET65 = 'NET65';

    public const NET66 = 'NET66';

    public const NET67 = 'NET67';

    public const NET68 = 'NET68';

    public const NET69 = 'NET69';

    public const NET7 = 'NET7';

    public const NET70 = 'NET70';

    public const NET71 = 'NET71';

    public const NET72 = 'NET72';

    public const NET73 = 'NET73';

    public const NET74 = 'NET74';

    public const NET75 = 'NET75';

    public const NET76 = 'NET76';

    public const NET77 = 'NET77';

    public const NET78 = 'NET78';

    public const NET79 = 'NET79';

    public const NET8 = 'NET8';

    public const NET80 = 'NET80';

    public const NET81 = 'NET81';

    public const NET82 = 'NET82';

    public const NET83 = 'NET83';

    public const NET84 = 'NET84';

    public const NET85 = 'NET85';

    public const NET86 = 'NET86';

    public const NET87 = 'NET87';

    public const NET88 = 'NET88';

    public const NET89 = 'NET89';

    public const NET9 = 'NET9';

    public const NET90 = 'NET90';

    public const NET91 = 'NET91';

    public const NET92 = 'NET92';

    public const NET93 = 'NET93';

    public const NET94 = 'NET94';

    public const NET95 = 'NET95';

    public const NET96 = 'NET96';

    public const NET97 = 'NET97';

    public const NET98 = 'NET98';

    public const NET99 = 'NET99';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROSS1,
            self::GROSS10,
            self::GROSS100,
            self::GROSS101,
            self::GROSS102,
            self::GROSS103,
            self::GROSS104,
            self::GROSS105,
            self::GROSS106,
            self::GROSS107,
            self::GROSS108,
            self::GROSS109,
            self::GROSS11,
            self::GROSS110,
            self::GROSS111,
            self::GROSS112,
            self::GROSS113,
            self::GROSS114,
            self::GROSS115,
            self::GROSS116,
            self::GROSS117,
            self::GROSS118,
            self::GROSS119,
            self::GROSS12,
            self::GROSS120,
            self::GROSS121,
            self::GROSS122,
            self::GROSS123,
            self::GROSS124,
            self::GROSS125,
            self::GROSS126,
            self::GROSS127,
            self::GROSS128,
            self::GROSS129,
            self::GROSS13,
            self::GROSS130,
            self::GROSS131,
            self::GROSS132,
            self::GROSS133,
            self::GROSS134,
            self::GROSS135,
            self::GROSS136,
            self::GROSS137,
            self::GROSS138,
            self::GROSS139,
            self::GROSS14,
            self::GROSS140,
            self::GROSS141,
            self::GROSS142,
            self::GROSS143,
            self::GROSS144,
            self::GROSS145,
            self::GROSS146,
            self::GROSS147,
            self::GROSS148,
            self::GROSS149,
            self::GROSS15,
            self::GROSS150,
            self::GROSS151,
            self::GROSS152,
            self::GROSS153,
            self::GROSS154,
            self::GROSS155,
            self::GROSS156,
            self::GROSS157,
            self::GROSS158,
            self::GROSS159,
            self::GROSS16,
            self::GROSS160,
            self::GROSS161,
            self::GROSS162,
            self::GROSS163,
            self::GROSS164,
            self::GROSS165,
            self::GROSS166,
            self::GROSS167,
            self::GROSS168,
            self::GROSS169,
            self::GROSS17,
            self::GROSS170,
            self::GROSS171,
            self::GROSS172,
            self::GROSS173,
            self::GROSS174,
            self::GROSS175,
            self::GROSS176,
            self::GROSS177,
            self::GROSS178,
            self::GROSS179,
            self::GROSS18,
            self::GROSS180,
            self::GROSS181,
            self::GROSS182,
            self::GROSS183,
            self::GROSS184,
            self::GROSS185,
            self::GROSS186,
            self::GROSS187,
            self::GROSS188,
            self::GROSS189,
            self::GROSS19,
            self::GROSS190,
            self::GROSS191,
            self::GROSS192,
            self::GROSS193,
            self::GROSS194,
            self::GROSS195,
            self::GROSS196,
            self::GROSS197,
            self::GROSS198,
            self::GROSS199,
            self::GROSS2,
            self::GROSS20,
            self::GROSS200,
            self::GROSS201,
            self::GROSS202,
            self::GROSS203,
            self::GROSS204,
            self::GROSS205,
            self::GROSS206,
            self::GROSS207,
            self::GROSS208,
            self::GROSS209,
            self::GROSS21,
            self::GROSS210,
            self::GROSS211,
            self::GROSS212,
            self::GROSS213,
            self::GROSS214,
            self::GROSS215,
            self::GROSS216,
            self::GROSS217,
            self::GROSS218,
            self::GROSS219,
            self::GROSS22,
            self::GROSS220,
            self::GROSS221,
            self::GROSS222,
            self::GROSS223,
            self::GROSS224,
            self::GROSS225,
            self::GROSS226,
            self::GROSS227,
            self::GROSS228,
            self::GROSS229,
            self::GROSS23,
            self::GROSS230,
            self::GROSS231,
            self::GROSS232,
            self::GROSS233,
            self::GROSS234,
            self::GROSS235,
            self::GROSS236,
            self::GROSS237,
            self::GROSS238,
            self::GROSS239,
            self::GROSS24,
            self::GROSS240,
            self::GROSS241,
            self::GROSS242,
            self::GROSS243,
            self::GROSS244,
            self::GROSS245,
            self::GROSS246,
            self::GROSS247,
            self::GROSS248,
            self::GROSS249,
            self::GROSS25,
            self::GROSS250,
            self::GROSS251,
            self::GROSS252,
            self::GROSS253,
            self::GROSS254,
            self::GROSS255,
            self::GROSS256,
            self::GROSS257,
            self::GROSS258,
            self::GROSS259,
            self::GROSS26,
            self::GROSS260,
            self::GROSS261,
            self::GROSS262,
            self::GROSS263,
            self::GROSS264,
            self::GROSS265,
            self::GROSS266,
            self::GROSS267,
            self::GROSS268,
            self::GROSS269,
            self::GROSS27,
            self::GROSS270,
            self::GROSS271,
            self::GROSS272,
            self::GROSS273,
            self::GROSS274,
            self::GROSS275,
            self::GROSS276,
            self::GROSS277,
            self::GROSS278,
            self::GROSS279,
            self::GROSS28,
            self::GROSS280,
            self::GROSS281,
            self::GROSS282,
            self::GROSS283,
            self::GROSS284,
            self::GROSS285,
            self::GROSS286,
            self::GROSS287,
            self::GROSS288,
            self::GROSS289,
            self::GROSS29,
            self::GROSS290,
            self::GROSS291,
            self::GROSS292,
            self::GROSS293,
            self::GROSS294,
            self::GROSS295,
            self::GROSS296,
            self::GROSS297,
            self::GROSS298,
            self::GROSS299,
            self::GROSS3,
            self::GROSS30,
            self::GROSS300,
            self::GROSS31,
            self::GROSS32,
            self::GROSS33,
            self::GROSS34,
            self::GROSS35,
            self::GROSS36,
            self::GROSS37,
            self::GROSS38,
            self::GROSS39,
            self::GROSS4,
            self::GROSS40,
            self::GROSS41,
            self::GROSS42,
            self::GROSS43,
            self::GROSS44,
            self::GROSS45,
            self::GROSS46,
            self::GROSS47,
            self::GROSS48,
            self::GROSS49,
            self::GROSS5,
            self::GROSS50,
            self::GROSS51,
            self::GROSS52,
            self::GROSS53,
            self::GROSS54,
            self::GROSS55,
            self::GROSS56,
            self::GROSS57,
            self::GROSS58,
            self::GROSS59,
            self::GROSS6,
            self::GROSS60,
            self::GROSS61,
            self::GROSS62,
            self::GROSS63,
            self::GROSS64,
            self::GROSS65,
            self::GROSS66,
            self::GROSS67,
            self::GROSS68,
            self::GROSS69,
            self::GROSS7,
            self::GROSS70,
            self::GROSS71,
            self::GROSS72,
            self::GROSS73,
            self::GROSS74,
            self::GROSS75,
            self::GROSS76,
            self::GROSS77,
            self::GROSS78,
            self::GROSS79,
            self::GROSS8,
            self::GROSS80,
            self::GROSS81,
            self::GROSS82,
            self::GROSS83,
            self::GROSS84,
            self::GROSS85,
            self::GROSS86,
            self::GROSS87,
            self::GROSS88,
            self::GROSS89,
            self::GROSS9,
            self::GROSS90,
            self::GROSS91,
            self::GROSS92,
            self::GROSS93,
            self::GROSS94,
            self::GROSS95,
            self::GROSS96,
            self::GROSS97,
            self::GROSS98,
            self::GROSS99,
            self::NET1,
            self::NET10,
            self::NET100,
            self::NET101,
            self::NET102,
            self::NET103,
            self::NET104,
            self::NET105,
            self::NET106,
            self::NET107,
            self::NET108,
            self::NET109,
            self::NET11,
            self::NET110,
            self::NET111,
            self::NET112,
            self::NET113,
            self::NET114,
            self::NET115,
            self::NET116,
            self::NET117,
            self::NET118,
            self::NET119,
            self::NET12,
            self::NET120,
            self::NET121,
            self::NET122,
            self::NET123,
            self::NET124,
            self::NET125,
            self::NET126,
            self::NET127,
            self::NET128,
            self::NET129,
            self::NET13,
            self::NET130,
            self::NET131,
            self::NET132,
            self::NET133,
            self::NET134,
            self::NET135,
            self::NET136,
            self::NET137,
            self::NET138,
            self::NET139,
            self::NET14,
            self::NET140,
            self::NET141,
            self::NET142,
            self::NET143,
            self::NET144,
            self::NET145,
            self::NET146,
            self::NET147,
            self::NET148,
            self::NET149,
            self::NET15,
            self::NET150,
            self::NET151,
            self::NET152,
            self::NET153,
            self::NET154,
            self::NET155,
            self::NET156,
            self::NET157,
            self::NET158,
            self::NET159,
            self::NET16,
            self::NET160,
            self::NET161,
            self::NET162,
            self::NET163,
            self::NET164,
            self::NET165,
            self::NET166,
            self::NET167,
            self::NET168,
            self::NET169,
            self::NET17,
            self::NET170,
            self::NET171,
            self::NET172,
            self::NET173,
            self::NET174,
            self::NET175,
            self::NET176,
            self::NET177,
            self::NET178,
            self::NET179,
            self::NET18,
            self::NET180,
            self::NET181,
            self::NET182,
            self::NET183,
            self::NET184,
            self::NET185,
            self::NET186,
            self::NET187,
            self::NET188,
            self::NET189,
            self::NET19,
            self::NET190,
            self::NET191,
            self::NET192,
            self::NET193,
            self::NET194,
            self::NET195,
            self::NET196,
            self::NET197,
            self::NET198,
            self::NET199,
            self::NET2,
            self::NET20,
            self::NET200,
            self::NET201,
            self::NET202,
            self::NET203,
            self::NET204,
            self::NET205,
            self::NET206,
            self::NET207,
            self::NET208,
            self::NET209,
            self::NET21,
            self::NET210,
            self::NET211,
            self::NET212,
            self::NET213,
            self::NET214,
            self::NET215,
            self::NET216,
            self::NET217,
            self::NET218,
            self::NET219,
            self::NET22,
            self::NET220,
            self::NET221,
            self::NET222,
            self::NET223,
            self::NET224,
            self::NET225,
            self::NET226,
            self::NET227,
            self::NET228,
            self::NET229,
            self::NET23,
            self::NET230,
            self::NET231,
            self::NET232,
            self::NET233,
            self::NET234,
            self::NET235,
            self::NET236,
            self::NET237,
            self::NET238,
            self::NET239,
            self::NET24,
            self::NET240,
            self::NET241,
            self::NET242,
            self::NET243,
            self::NET244,
            self::NET245,
            self::NET246,
            self::NET247,
            self::NET248,
            self::NET249,
            self::NET25,
            self::NET250,
            self::NET251,
            self::NET252,
            self::NET253,
            self::NET254,
            self::NET255,
            self::NET256,
            self::NET257,
            self::NET258,
            self::NET259,
            self::NET26,
            self::NET260,
            self::NET261,
            self::NET262,
            self::NET263,
            self::NET264,
            self::NET265,
            self::NET266,
            self::NET267,
            self::NET268,
            self::NET269,
            self::NET27,
            self::NET270,
            self::NET271,
            self::NET272,
            self::NET273,
            self::NET274,
            self::NET275,
            self::NET276,
            self::NET277,
            self::NET278,
            self::NET279,
            self::NET28,
            self::NET280,
            self::NET281,
            self::NET282,
            self::NET283,
            self::NET284,
            self::NET285,
            self::NET286,
            self::NET287,
            self::NET288,
            self::NET289,
            self::NET29,
            self::NET290,
            self::NET291,
            self::NET292,
            self::NET293,
            self::NET294,
            self::NET295,
            self::NET296,
            self::NET297,
            self::NET298,
            self::NET299,
            self::NET3,
            self::NET30,
            self::NET300,
            self::NET31,
            self::NET32,
            self::NET33,
            self::NET34,
            self::NET35,
            self::NET36,
            self::NET37,
            self::NET38,
            self::NET39,
            self::NET4,
            self::NET40,
            self::NET41,
            self::NET42,
            self::NET43,
            self::NET44,
            self::NET45,
            self::NET46,
            self::NET47,
            self::NET48,
            self::NET49,
            self::NET5,
            self::NET50,
            self::NET51,
            self::NET52,
            self::NET53,
            self::NET54,
            self::NET55,
            self::NET56,
            self::NET57,
            self::NET58,
            self::NET59,
            self::NET6,
            self::NET60,
            self::NET61,
            self::NET62,
            self::NET63,
            self::NET64,
            self::NET65,
            self::NET66,
            self::NET67,
            self::NET68,
            self::NET69,
            self::NET7,
            self::NET70,
            self::NET71,
            self::NET72,
            self::NET73,
            self::NET74,
            self::NET75,
            self::NET76,
            self::NET77,
            self::NET78,
            self::NET79,
            self::NET8,
            self::NET80,
            self::NET81,
            self::NET82,
            self::NET83,
            self::NET84,
            self::NET85,
            self::NET86,
            self::NET87,
            self::NET88,
            self::NET89,
            self::NET9,
            self::NET90,
            self::NET91,
            self::NET92,
            self::NET93,
            self::NET94,
            self::NET95,
            self::NET96,
            self::NET97,
            self::NET98,
            self::NET99
        ];
    }
}


