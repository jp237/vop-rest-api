# SwaggerClient-php
Rest API-Endpoint

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/jp237/RestAPI.git"
    }
  ],
  "require": {
    "jp237/RestAPI": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: apiAuth
$config = VOP\Rest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new VOP\Rest\Api\BonigatewayBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bonigatewayBusinessGetProductListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BonigatewayBusinessApi->bonigatewayBusinessGetProductListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://rest.eaponline.de*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BonigatewayBusinessApi* | [**bonigatewayBusinessGetProductListGet**](docs/Api/BonigatewayBusinessApi.md#bonigatewaybusinessgetproductlistget) | **GET** /bonigateway/Business/getProductList | 
*BonigatewayaddresscheckApi* | [**bonigatewayAddresscheckGetPostDirektPost**](docs/Api/BonigatewayaddresscheckApi.md#bonigatewayaddresscheckgetpostdirektpost) | **POST** /bonigateway/addresscheck/getPostDirekt | 
*BonigatewayblacklistApi* | [**bonigatewayBlacklistSetBlacklistPost**](docs/Api/BonigatewayblacklistApi.md#bonigatewayblacklistsetblacklistpost) | **POST** /bonigateway/blacklist/setBlacklist | 
*BonigatewaybusinessApi* | [**bonigatewayBusinessGetBusinessListPost**](docs/Api/BonigatewaybusinessApi.md#bonigatewaybusinessgetbusinesslistpost) | **POST** /bonigateway/business/getBusinessList | 
*BonigatewaybusinessApi* | [**bonigatewayBusinessGetBusinessReportProductAccountIdIdReasonResellingGet**](docs/Api/BonigatewaybusinessApi.md#bonigatewaybusinessgetbusinessreportproductaccountididreasonresellingget) | **GET** /bonigateway/business/getBusinessReport/{product}/{accountId}/{id}/{reason}/{reselling} | 
*BonigatewaybusinessApi* | [**bonigatewayBusinessGetRequestBusinessGetDocumentResellingPost**](docs/Api/BonigatewaybusinessApi.md#bonigatewaybusinessgetrequestbusinessgetdocumentresellingpost) | **POST** /bonigateway/business/getRequestBusiness/{getDocument}/{reselling} | 
*BonigatewayconfigurationApi* | [**bonigatewayConfigurationGetAccountListGet**](docs/Api/BonigatewayconfigurationApi.md#bonigatewayconfigurationgetaccountlistget) | **GET** /bonigateway/configuration/getAccountList | 
*BonigatewayconfigurationApi* | [**bonigatewayConfigurationGetProjectInformationGet**](docs/Api/BonigatewayconfigurationApi.md#bonigatewayconfigurationgetprojectinformationget) | **GET** /bonigateway/configuration/getProjectInformation | 
*BonigatewayconfigurationApi* | [**bonigatewayConfigurationGetResellingPriceListGet**](docs/Api/BonigatewayconfigurationApi.md#bonigatewayconfigurationgetresellingpricelistget) | **GET** /bonigateway/configuration/getResellingPriceList | 
*BonigatewaycustomerApi* | [**bonigatewayCustomerGetRequestCustomerGetDocumentPost**](docs/Api/BonigatewaycustomerApi.md#bonigatewaycustomergetrequestcustomergetdocumentpost) | **POST** /bonigateway/customer/getRequestCustomer/{getDocument} | 
*BonigatewaycustomerApi* | [**bonigatewayCustomerGetRequestCustomerResellingPost**](docs/Api/BonigatewaycustomerApi.md#bonigatewaycustomergetrequestcustomerresellingpost) | **POST** /bonigateway/customer/getRequestCustomerReselling | 
*BonigatewaycustomerApi* | [**bonigatewayCustomerVerifyAgeGetDocumentPost**](docs/Api/BonigatewaycustomerApi.md#bonigatewaycustomerverifyagegetdocumentpost) | **POST** /bonigateway/customer/verifyAge/{getDocument} | 
*BonigatewayorderApi* | [**bonigatewayOrderCompleteOrderPost**](docs/Api/BonigatewayorderApi.md#bonigatewayordercompleteorderpost) | **POST** /bonigateway/order/completeOrder | 
*BonigatewayresultApi* | [**bonigatewayResultGetResponseDataByIdIdGet**](docs/Api/BonigatewayresultApi.md#bonigatewayresultgetresponsedatabyididget) | **GET** /bonigateway/result/getResponseDataById/{id} | 
*BonigatewayresultApi* | [**bonigatewayResultGetResponseDataByOrderNumberOrderNumberGet**](docs/Api/BonigatewayresultApi.md#bonigatewayresultgetresponsedatabyordernumberordernumberget) | **GET** /bonigateway/result/getResponseDataByOrderNumber/{orderNumber} | 
*BonigatewayresultApi* | [**bonigatewayResultGetResponseDocumentByIdIdTypeGet**](docs/Api/BonigatewayresultApi.md#bonigatewayresultgetresponsedocumentbyididtypeget) | **GET** /bonigateway/result/getResponseDocumentById/{id}/{type} | 
*DebitconnectcaseApi* | [**debitconnectCaseGetCaseDocumentByIdPost**](docs/Api/DebitconnectcaseApi.md#debitconnectcasegetcasedocumentbyidpost) | **POST** /debitconnect/case/getCaseDocumentById | 
*DebitconnectcaseApi* | [**debitconnectCaseGetCaseInformationPost**](docs/Api/DebitconnectcaseApi.md#debitconnectcasegetcaseinformationpost) | **POST** /debitconnect/case/getCaseInformation | 
*DebitconnectcaseApi* | [**debitconnectCasePushMessagePost**](docs/Api/DebitconnectcaseApi.md#debitconnectcasepushmessagepost) | **POST** /debitconnect/case/pushMessage | 
*DebitconnectcaseApi* | [**debitconnectCaseSubmitDocumentPost**](docs/Api/DebitconnectcaseApi.md#debitconnectcasesubmitdocumentpost) | **POST** /debitconnect/case/submitDocument | 
*DebitconnectexampleApi* | [**debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet**](docs/Api/DebitconnectexampleApi.md#debitconnectexamplegetexampledocumentbyidsecuritytokenidget) | **GET** /debitconnect/example/getExampleDocumentById/{securitytoken}/{id} | 
*DebitconnectexampleApi* | [**debitconnectExampleGetExampleListSecuritytokenGet**](docs/Api/DebitconnectexampleApi.md#debitconnectexamplegetexamplelistsecuritytokenget) | **GET** /debitconnect/example/getExampleList/{securitytoken} | 
*DebitconnectfinAPIApi* | [**debitconnectFinAPIGetTokenPost**](docs/Api/DebitconnectfinAPIApi.md#debitconnectfinapigettokenpost) | **POST** /debitconnect/finAPI/getToken | 
*DebitconnectorderApi* | [**debitconnectOrderEmailPaymentPromptPost**](docs/Api/DebitconnectorderApi.md#debitconnectorderemailpaymentpromptpost) | **POST** /debitconnect/order/emailPaymentPrompt | 
*DebitconnectorderApi* | [**debitconnectOrderGetCatalogueNumbersGet**](docs/Api/DebitconnectorderApi.md#debitconnectordergetcataloguenumbersget) | **GET** /debitconnect/order/getCatalogueNumbers/ | 
*DebitconnectorderApi* | [**debitconnectOrderNewOrderPost**](docs/Api/DebitconnectorderApi.md#debitconnectorderneworderpost) | **POST** /debitconnect/order/newOrder | 
*DebitconnectpaymentApi* | [**debitconnectPaymentGetPaymentTransactionDetailsPost**](docs/Api/DebitconnectpaymentApi.md#debitconnectpaymentgetpaymenttransactiondetailspost) | **POST** /debitconnect/payment/getPaymentTransactionDetails | 
*DebitconnectregisterApi* | [**debitconnectRegisterActivateCustomerGet**](docs/Api/DebitconnectregisterApi.md#debitconnectregisteractivatecustomerget) | **GET** /debitconnect/register/activateCustomer | 
*DebitconnectregisterApi* | [**debitconnectRegisterRegisterCustomerSecuritytokenPost**](docs/Api/DebitconnectregisterApi.md#debitconnectregisterregistercustomersecuritytokenpost) | **POST** /debitconnect/register/registerCustomer/{securitytoken} | 
*DebitconnectregisterApi* | [**debitconnectRegisterResendConfirmationEmailGet**](docs/Api/DebitconnectregisterApi.md#debitconnectregisterresendconfirmationemailget) | **GET** /debitconnect/register/resendConfirmationEmail | 
*DebitconnectsyncApi* | [**debitconnectSyncCaseGetSyncListGet**](docs/Api/DebitconnectsyncApi.md#debitconnectsynccasegetsynclistget) | **GET** /debitconnect/sync/case/getSyncList | 
*DebitconnectsyncApi* | [**debitconnectSyncCaseGetSyncPost**](docs/Api/DebitconnectsyncApi.md#debitconnectsynccasegetsyncpost) | **POST** /debitconnect/sync/case/getSync | 
*DebitconnectsyncApi* | [**debitconnectSyncCasePushSyncPost**](docs/Api/DebitconnectsyncApi.md#debitconnectsynccasepushsyncpost) | **POST** /debitconnect/sync/case/pushSync | 
*DebitconnectsyncApi* | [**debitconnectSyncCompareVersionPost**](docs/Api/DebitconnectsyncApi.md#debitconnectsynccompareversionpost) | **POST** /debitconnect/sync/compareVersion | 
*DebitflexApi* | [**debitflexGetInformationSecuritytokenGet**](docs/Api/DebitflexApi.md#debitflexgetinformationsecuritytokenget) | **GET** /debitflex/getInformation/{securitytoken} | 
*OauthApi* | [**oauthTokenPost**](docs/Api/OauthApi.md#oauthtokenpost) | **POST** /oauth/token | 

## Documentation For Models

 - [ActivateCustomerResponseParameters](docs/Model/ActivateCustomerResponseParameters.md)
 - [AddressData](docs/Model/AddressData.md)
 - [ApiError](docs/Model/ApiError.md)
 - [BoniGatewayResultResponse](docs/Model/BoniGatewayResultResponse.md)
 - [BookedInvoice](docs/Model/BookedInvoice.md)
 - [CaseContactPerson](docs/Model/CaseContactPerson.md)
 - [CaseHistoryInformation](docs/Model/CaseHistoryInformation.md)
 - [CaseInformation](docs/Model/CaseInformation.md)
 - [CasePaymentDetails](docs/Model/CasePaymentDetails.md)
 - [CasePaymentInformation](docs/Model/CasePaymentInformation.md)
 - [CatalogueNumber](docs/Model/CatalogueNumber.md)
 - [CompanySearchResult](docs/Model/CompanySearchResult.md)
 - [CompareVersionInputParameters](docs/Model/CompareVersionInputParameters.md)
 - [CompareVersionResponseParameters](docs/Model/CompareVersionResponseParameters.md)
 - [CompleteOrderInputParameters](docs/Model/CompleteOrderInputParameters.md)
 - [CustomDataResponse](docs/Model/CustomDataResponse.md)
 - [CustomerAddressInformation](docs/Model/CustomerAddressInformation.md)
 - [CustomerContactInformation](docs/Model/CustomerContactInformation.md)
 - [DebitConnectLoginParameters](docs/Model/DebitConnectLoginParameters.md)
 - [DebtorInformation](docs/Model/DebtorInformation.md)
 - [DocumentResponse](docs/Model/DocumentResponse.md)
 - [EmailPaymentPromptInputParameters](docs/Model/EmailPaymentPromptInputParameters.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ExampleDocument](docs/Model/ExampleDocument.md)
 - [GatewayRequestParameters](docs/Model/GatewayRequestParameters.md)
 - [GetAccountListResponseParameters](docs/Model/GetAccountListResponseParameters.md)
 - [GetBusinessListInputParameters](docs/Model/GetBusinessListInputParameters.md)
 - [GetBusinessListResponseParameters](docs/Model/GetBusinessListResponseParameters.md)
 - [GetCaseDocumentByIdInputParameters](docs/Model/GetCaseDocumentByIdInputParameters.md)
 - [GetCaseDocumentByIdResponseParameters](docs/Model/GetCaseDocumentByIdResponseParameters.md)
 - [GetCaseInformationInputParameters](docs/Model/GetCaseInformationInputParameters.md)
 - [GetCaseInformationResponseParameters](docs/Model/GetCaseInformationResponseParameters.md)
 - [GetCatalogueNumbersResponseParameters](docs/Model/GetCatalogueNumbersResponseParameters.md)
 - [GetExampleDocumentByIdResponseParameters](docs/Model/GetExampleDocumentByIdResponseParameters.md)
 - [GetExampleListResponseParameters](docs/Model/GetExampleListResponseParameters.md)
 - [GetInformationResponseParameters](docs/Model/GetInformationResponseParameters.md)
 - [GetPaymentTransactionDetailsInputParameters](docs/Model/GetPaymentTransactionDetailsInputParameters.md)
 - [GetPaymentTransactionDetailsResponseParameters](docs/Model/GetPaymentTransactionDetailsResponseParameters.md)
 - [GetPostDirektInputParameters](docs/Model/GetPostDirektInputParameters.md)
 - [GetProductListResponseParameters](docs/Model/GetProductListResponseParameters.md)
 - [GetProjectInformationResponseParameters](docs/Model/GetProjectInformationResponseParameters.md)
 - [GetRequestBusinessInputParameters](docs/Model/GetRequestBusinessInputParameters.md)
 - [GetRequestCustomerInputParameters](docs/Model/GetRequestCustomerInputParameters.md)
 - [GetRequestCustomerResellingInputParameters](docs/Model/GetRequestCustomerResellingInputParameters.md)
 - [GetResellingPriceListResponseParameters](docs/Model/GetResellingPriceListResponseParameters.md)
 - [GetSyncInputParameters](docs/Model/GetSyncInputParameters.md)
 - [GetSyncListResponseParameters](docs/Model/GetSyncListResponseParameters.md)
 - [GetSyncResponseParameters](docs/Model/GetSyncResponseParameters.md)
 - [GetTokenInputParameters](docs/Model/GetTokenInputParameters.md)
 - [GetTokenResponseParameters](docs/Model/GetTokenResponseParameters.md)
 - [LoginParameters](docs/Model/LoginParameters.md)
 - [NewOrderInputParameters](docs/Model/NewOrderInputParameters.md)
 - [OrderInformationData](docs/Model/OrderInformationData.md)
 - [PaymentTransactionDetail](docs/Model/PaymentTransactionDetail.md)
 - [PrivatIdentityFlags](docs/Model/PrivatIdentityFlags.md)
 - [ProjectInformation](docs/Model/ProjectInformation.md)
 - [PushMessageInputParameters](docs/Model/PushMessageInputParameters.md)
 - [PushSyncInputParameters](docs/Model/PushSyncInputParameters.md)
 - [RegisterCustomerInputParameters](docs/Model/RegisterCustomerInputParameters.md)
 - [RegisterCustomerResponseParameters](docs/Model/RegisterCustomerResponseParameters.md)
 - [RequestParametersBusiness](docs/Model/RequestParametersBusiness.md)
 - [RequestParametersPrivate](docs/Model/RequestParametersPrivate.md)
 - [ResendConfirmationEmailInputParameters](docs/Model/ResendConfirmationEmailInputParameters.md)
 - [SchufaAccounts](docs/Model/SchufaAccounts.md)
 - [ScoreInformation](docs/Model/ScoreInformation.md)
 - [SetBlacklistInputParameters](docs/Model/SetBlacklistInputParameters.md)
 - [SubmitDocumentInputParameters](docs/Model/SubmitDocumentInputParameters.md)
 - [SuccessResponse](docs/Model/SuccessResponse.md)
 - [SyncData](docs/Model/SyncData.md)
 - [TokenInputParameters](docs/Model/TokenInputParameters.md)
 - [TokenResponseParameters](docs/Model/TokenResponseParameters.md)
 - [ValueDescription](docs/Model/ValueDescription.md)
 - [VerifyAgeInputParameters](docs/Model/VerifyAgeInputParameters.md)
 - [VopInvoice](docs/Model/VopInvoice.md)
 - [VopInvoiceDetail](docs/Model/VopInvoiceDetail.md)

## Documentation For Authorization


## apiAuth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - ****: 


## Author



