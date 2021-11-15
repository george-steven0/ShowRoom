<?php

use App\Models\BuyBill;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ReNewController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\BuyBillController;
use App\Http\Controllers\TaxBillController;
use App\Http\Controllers\SellBillController;
use App\Http\Controllers\FinishBillController;

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



Route::Get('/',[DataController::class,'index'])->name('allData');


//Dealer Routes
Route::POST('/store/dealer',[DealerController::class,'store'])->name('store.dealer');
Route::POST('/update/dealer',[DealerController::class,'update'])->name('update.dealer');
Route::POST('/delete/dealer/{id}',[DealerController::class,'destroy'])->name('delete.dealer');
Route::GET('/edit/dealer/{id}',[DealerController::class,'edit'])->name('edit.dealer');


//Client Routes
Route::POST('/store/client',[ClientController::class,'store'])->name('store.client');
Route::GET('/edit/client/{id}',[ClientController::class,'edit'])->name('edit.client');
Route::POST('/update/client',[ClientController::class,'update'])->name('update.client');
Route::POST('/delete/client/{id}',[ClientController::class,'destroy'])->name('delete.client');
Route::GET('/getClientId/{selected}',[ClientController::class,'getId']);


//buyBill Routes
Route::POST('/store/buybill',[BuyBillController::class,'store'])->name('store.buybill');
Route::GET('/edit/buybill/{id}',[BuyBillController::class,'edit'])->name('edit.buybill');
Route::POST('/update/buybill',[BuyBillController::class,'update'])->name('update.buybill');
Route::POST('/delete/buybill/{id}',[BuyBillController::class,'destroy'])->name('delete.buybill');
Route::GET('/getChaseInfo/{selected}',[BuyBillController::class,'chaseInfo']);


//sellBill Routes
Route::POST('/store/sellbill',[SellBillController::class,'store'])->name('store.sellbill');
Route::GET('/edit/sellbill/{id}',[SellBillController::class,'edit'])->name('edit.sellbill');
Route::POST('/update/sellbill/{id}',[SellBillController::class,'update'])->name('update.sellbill');
Route::POST('/delete/sellbill',[SellBillController::class,'destroy'])->name('delete.sellbill');
Route::GET('/Show/sellbill/{sellbill}',[SellBillController::class,'show'])->name('show.sellbill');
Route::GET('/sellBillBycInfo/{id}',[SellBillController::class,'getSellBillBycInfo'])->name('info.sellbillbyc');
Route::GET('/sellBillCarInfo/{id}',[SellBillController::class,'getSellBillCarInfo'])->name('info.sellbillcar');



//TaxBill Routes
Route::POST('/store/taxbillbyc',[TaxBillController::class,'storeByc'])->name('store.taxBillByc');
Route::GET('/show/taxbillbyc/{id}',[TaxBillController::class,'showByc'])->name('show.taxBillByc');
Route::GET('/edit/taxbillbyc/{id}',[TaxBillController::class,'editByc'])->name('edit.taxBillByc');
Route::GET('/edit/taxbillcar/{id}',[TaxBillController::class,'editCar'])->name('edit.taxBillCar');
Route::POST('/store/taxbillcar',[TaxBillController::class,'storeCar'])->name('store.taxBillCar');
Route::POST('/delete/taxbillbyc/{id}',[TaxBillController::class,'deleteByc'])->name('delete.taxBillByc');
Route::POST('/delete/taxbillCar/{id}',[TaxBillController::class,'deleteCar'])->name('delete.taxBillCar');
Route::GET('/show/taxbillcar/{id}',[TaxBillController::class,'showCar'])->name('show.taxBillCar');
Route::POST('/update/taxbillbyc/{id}',[TaxBillController::class,'updateByc'])->name('update.taxBillByc');
Route::POST('/update/taxbillcar/{id}',[TaxBillController::class,'updateCar'])->name('update.taxBillCar');



//Renew Routes
Route::GET('/renew/getinfo/{id}',[ReNewController::class,'getInfo']);
Route::POST('/store/renew',[ReNewController::class,'store'])->name('store.renew');
Route::GET('/edit/renew/{id}',[RenewController::class,'editRenew'])->name('edit.renew');
Route::POST('/update/renew/{id}',[RenewController::class,'update'])->name('update.renew');
Route::POST('/delete/renew/{id}',[RenewController::class,'destroy'])->name('delete.renew');


//Finish Route
Route::POST('/store/finish',[FinishBillController::class,'store'])->name('store.finish');
Route::GET('/edit/finish/{id}',[FinishBillController::class,'edit'])->name('edit.finish');
Route::POST('/update/finish/{id}',[FinishBillController::class,'update'])->name('update.finish');
Route::POST('/delete/finish/{id}',[FinishBillController::class,'destroy'])->name('delete.finish');


Route::GET('/downloadPdf/{sellbill}',[DataController::class,'downloadPdf'])->name('downloadPdf');
Route::GET('/showPdf',[DataController::class,'showPdf']);
Route::GET('/pdf',[DataController::class,'test']);

