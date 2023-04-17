<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimplePayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/superl0g1n','App\Http\Controllers\Admin\AdminLoginController@login');
Route::post('/authlogin','App\Http\Controllers\Admin\AdminLoginController@authLogin');

Route::get('/admin/dashboard','App\Http\Controllers\Admin\AdminController@dashboard');

Route::get('/admin/categories','App\Http\Controllers\Admin\CategoryController@categories');
Route::get('/admin/category/add','App\Http\Controllers\Admin\CategoryController@categoryAdd');
Route::post('/admin/category/store','App\Http\Controllers\Admin\CategoryController@categoryStore');
Route::post('/admin/category/delete','App\Http\Controllers\Admin\CategoryController@categoryDelete');
Route::get('/admin/category/edit/{category_id}','App\Http\Controllers\Admin\CategoryController@categoryEdit');
Route::post('/admin/category/update','App\Http\Controllers\Admin\CategoryController@categoryUpdate');

Route::get('/admin/blog','App\Http\Controllers\Admin\BlogController@blog');
Route::get('/admin/blog/add','App\Http\Controllers\Admin\BlogController@blogAdd');
Route::post('/admin/blog/store','App\Http\Controllers\Admin\BlogController@blogStore');
Route::post('/admin/blog/delete','App\Http\Controllers\Admin\BlogController@blogDelete');
Route::get('/admin/blog/edit/{blog_id}','App\Http\Controllers\Admin\BlogController@blogEdit');
Route::post('/admin/blog/update','App\Http\Controllers\Admin\BlogController@blogUpdate');

Route::get('/admin/report','App\Http\Controllers\Admin\ReportController@report');
Route::get('/admin/report/add','App\Http\Controllers\Admin\ReportController@reportAdd');
Route::post('/admin/report/store','App\Http\Controllers\Admin\ReportController@reportStore');
Route::post('/admin/report/delete','App\Http\Controllers\Admin\ReportController@reportDelete');
Route::get('/admin/report/edit/{report_id}','App\Http\Controllers\Admin\ReportController@reportEdit');
Route::post('/admin/report/update','App\Http\Controllers\Admin\ReportController@reportUpdate');

Route::get('/admin/pagelist/','App\Http\Controllers\Admin\PageController@pageList');
Route::get('/admin/page/mbanking/edit','App\Http\Controllers\Admin\AdminMBankingController@mbanking');
Route::post('/admin/mbanking/banner/update','App\Http\Controllers\Admin\AdminMBankingController@mbankingBanner');
Route::post('/admin/mbanking/tagline/update','App\Http\Controllers\Admin\AdminMBankingController@mbankingTagline');
Route::post('/admin/mbanking/fact/update','App\Http\Controllers\Admin\AdminMBankingController@mbankingFact');

Route::get('/admin/exchange-rate','App\Http\Controllers\Admin\ExchangeController@index');
Route::get('/admin/exchange-rate/edit','App\Http\Controllers\Admin\ExchangeController@editExchange');
Route::post('/admin/exchange/store','App\Http\Controllers\Admin\ExchangeController@updateExchange');

Route::get('/admin/logout','App\Http\Controllers\Admin\AdminController@logout');

Route::get('/share-post', 'App\Http\Controllers\SharePostController@share');

Route::get('/mobile-banking','App\Http\Controllers\Digital\MobileBankingController@mbindex');
Route::get('/internet-banking','App\Http\Controllers\Digital\InternetBankingController@index');
Route::get('/debit-card','App\Http\Controllers\Digital\DebitCardController@index');
Route::get('/credit-card','App\Http\Controllers\Digital\CreditCardController@index');
Route::get('/ecommerce','App\Http\Controllers\Digital\EcommerceController@index');
Route::get('/sms-alert','App\Http\Controllers\Digital\SMSAlertController@index');
Route::get('/prepaid-card','App\Http\Controllers\Digital\PrepaidCardController@index');
Route::get('/simple-pay','App\Http\Controllers\Digital\SimplePayController@index');
Route::get('/reset-pin','App\Http\Controllers\Digital\ResetPinController@index');
Route::get('/corporate-internet-banking','App\Http\Controllers\Digital\CorporateInternetBankingController@index');
Route::get('/digital-secure','App\Http\Controllers\Digital\DigitalSecureController@index');
Route::get('/frequently-used-digital','App\Http\Controllers\Digital\FrequentlyUsedDigitalController@index');
Route::get('/pos','App\Http\Controllers\Digital\POSController@index');
Route::get('/aya-pay','App\Http\Controllers\Digital\AyaPayController@index');
Route::get('/atm','App\Http\Controllers\Digital\ATMController@index');

// Personal
Route::get('/insurance/health','App\Http\Controllers\Insurance\HealthInsuranceController@index');
Route::get('/insurance/motor','App\Http\Controllers\Insurance\MotorInsuranceController@index');
Route::get('/insurance/fire','App\Http\Controllers\Insurance\FireInsuranceController@index');
Route::get('/insurance/personal-accident','App\Http\Controllers\Insurance\PAInsuranceController@index');
Route::get('/insurance/travel/aya-go','App\Http\Controllers\Insurance\AYAGOInsuranceController@index');
Route::get('/insurance/travel/aya-joy','App\Http\Controllers\Insurance\AYAJoyInsuranceController@index');
Route::get('/insurance/life/universal','App\Http\Controllers\Insurance\LifeInsuranceController@universalIndex');
Route::get('/insurance/life/education','App\Http\Controllers\Insurance\LifeInsuranceController@educationIndex');
Route::get('/insurance/life/one-health-solution-individual-plan','App\Http\Controllers\Insurance\LifeInsuranceController@oneHealthIndex');
Route::get('/insurance/life/short-term','App\Http\Controllers\Insurance\LifeInsuranceController@shorttermIndex');

Route::get('/account-saving/call-deposit','App\Http\Controllers\AccountSaving\CallDepositController@index');
Route::get('/account-saving/call-deposit/premium-call-deposit','App\Http\Controllers\AccountSaving\CallDepositController@premiumIndex');
Route::get('/account-saving/call-deposit/new-business-call','App\Http\Controllers\AccountSaving\CallDepositController@newBusinessCallIndex');
Route::get('/account-saving/current-deposit','App\Http\Controllers\AccountSaving\CurrentDepositController@index');
Route::get('/account-saving/current-deposit/regular-current-account','App\Http\Controllers\AccountSaving\CurrentDepositController@RegularIndex');
Route::get('/account-saving/current-deposit/new-business-current-account','App\Http\Controllers\AccountSaving\CurrentDepositController@newBusinessIndex');
Route::get('/account-saving/current-deposit/seafarer-acount','App\Http\Controllers\AccountSaving\CurrentDepositController@seafererIndex');
Route::get('/account-saving/current-deposit/retail-fca-current','App\Http\Controllers\AccountSaving\CurrentDepositController@retailFCAIndex');
Route::get('/account-saving/fixed-deposit','App\Http\Controllers\AccountSaving\FixedDepositController@index');
Route::get('/account-saving/saving-deposit','App\Http\Controllers\AccountSaving\SavingDepositController@index');
Route::get('/account-saving/saving-deposit/aya-regular-saving','App\Http\Controllers\AccountSaving\SavingDepositController@regularSavingIndex');
Route::get('/account-saving/saving-deposit/aya-maximizer-saving','App\Http\Controllers\AccountSaving\SavingDepositController@maximizerSavingIndex');
Route::get('/account-saving/saving-deposit/aya-loyal-saving','App\Http\Controllers\AccountSaving\SavingDepositController@loyalSavingIndex');
Route::get('/account-saving/saving-deposit/ngwe-toe-mae-shwe-o','App\Http\Controllers\AccountSaving\SavingDepositController@shweOindex');
Route::get('/account-saving/saving-deposit/aya-su-buu','App\Http\Controllers\AccountSaving\SavingDepositController@suBuuIndex');

Route::get('/premium-banking','App\Http\Controllers\PremiumBankingController@index');

Route::get('/remittance/local','App\Http\Controllers\RemittanceController@localIndex');
Route::get('/remittance/international','App\Http\Controllers\RemittanceController@interIndex');
Route::get('/remittance/payment','App\Http\Controllers\RemittanceController@paymentIndex');

Route::get('/borrowing/hire-purchase/auto-loan','App\Http\Controllers\Borrowing\HirePurchaseController@autoLoanIndex');
Route::get('/borrowing/hire-purchase/c2c-auto-loan','App\Http\Controllers\Borrowing\HirePurchaseController@C2CAutoLoanIndex');
Route::get('/borrowing/hire-purchase/education-loan','App\Http\Controllers\Borrowing\HirePurchaseController@educationLoanIndex');
Route::get('/borrowing/hire-purchase/construction-loan','App\Http\Controllers\Borrowing\HirePurchaseController@constructionLoanIndex');
Route::get('/borrowing/hire-purchase/home-loan','App\Http\Controllers\Borrowing\HirePurchaseController@homeLoanIndex');

Route::get('/other-services/foreign-currency-exchange-service','App\Http\Controllers\OtherServicesController@foreignCurrencyIndex');
Route::get('/other-services/safe-deposit','App\Http\Controllers\OtherServicesController@safeDepositIndex');

// Busineess
Route::get('/business/account-saving/call-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@callDepositIndex');
Route::get('/business/account-saving/saving-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@savingDepositIndex');
Route::get('/business/account-saving/current-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@currentDepositIndex');
Route::get('/business/account-saving/fixed-deposit','App\Http\Controllers\Business\AccountSaving\CallDepositController@fixedDepositIndex');

Route::get('/business/remittance-payments/local-payments','App\Http\Controllers\Business\RemittanceController@localPaymentsIndex');
Route::get('/business/remittance-payments/international-payments','App\Http\Controllers\Business\RemittanceController@internationalPaymentsIndex');

Route::get('/business/borrowing/corporate-business-loan','App\Http\Controllers\Business\BorrowingController@corporateBusinessLoanIndex');
Route::get('/business/borrowing/hire-purchase','App\Http\Controllers\Business\BorrowingController@hirePurchaseIndex');
Route::get('/business/borrowing/sme','App\Http\Controllers\Business\BorrowingController@SMEIndex');

Route::get('/business/trade/trade-financing','App\Http\Controllers\Business\TradeController@tradeFinancingIndex');
Route::get('/business/trade/trade-services','App\Http\Controllers\Business\TradeController@tradeServicesIndex');

Route::get('/business/cash-management','App\Http\Controllers\Business\CashManagementController@CMIndex');

Route::get('/business/insurance/domestic-marine-cargo','App\Http\Controllers\Business\InsuranceController@domesticMarineCargoIndex');
Route::get('/business/insurance/oversea-marine-cargo','App\Http\Controllers\Business\InsuranceController@overseaMarineCargoIndex');
Route::get('/business/insurance/domestic-inland-transit','App\Http\Controllers\Business\InsuranceController@domesticInlandTransitIndex');
Route::get('/business/insurance/car-ear','App\Http\Controllers\Business\InsuranceController@CAREARIndex');
Route::get('/business/insurance/industrial-all-risk-insurance','App\Http\Controllers\Business\InsuranceController@IARIndex');
Route::get('/business/insurance/group-life-insurance','App\Http\Controllers\Business\InsuranceController@groupLifeIndex');

// contact-us