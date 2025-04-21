<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/pdf/inventory-slip', [PDFController::class, 'generateInventoryPDF']);
Route::get('/pdf/journal-entry', [PDFController::class, 'generateJournalEntryPDF']);
Route::get('/pdf/office-supplies', [PDFController::class, 'generateOfficeSuppliesPDF']);
Route::get('/pdf/pta-rata', [PDFController::class, 'generatePtaRataPDF']);
Route::get('/pdf/ppcldo-assistance', [PDFController::class, 'generatePPCLDOAssistancePDF']);
Route::get('/pdf/honoraria-bac', [PDFController::class, 'generateHONORARIABacPDF']);
Route::get('/pdf/overtime-pay', [PDFController::class, 'generateOvertimePayPDF']);
Route::get('/pdf/monetization-leave', [PDFController::class, 'generateMonetizationLeavePDF']);
Route::get('/pdf/loyalty-pay', [PDFController::class, 'generateLoyaltyPayPDF']);
Route::get('/pdf/release-retention', [PDFController::class, 'generateReleaseRetentionPDF']);
Route::get('/pdf/first-salary', [PDFController::class, 'generateFirstSalaryPDF']);
Route::get('/pdf/honoraria', [PDFController::class, 'generateHonorariaPDF']);
Route::get('/pdf/insurance_expenses', [PDFController::class, 'generateInsuranceExpensesPDF']);
Route::get('/pdf/wmr', [PDFController::class, 'generateWMRPDF']);
Route::get('/pdf/rsmi', [PDFController::class, 'generateRSMIPDF']);
Route::get('/pdf/check_register', [PDFController::class, 'generateCheckRegisterPDF']);
Route::get('/pdf/iot', [PDFController::class, 'generateIOTPDF']);
Route::get('/pdf/cj', [PDFController::class, 'generateCJPDF']);
Route::get('/pdf/checkdj', [PDFController::class, 'generateCheckDJPDF']);
Route::get('/pdf/cashdj', [PDFController::class, 'generateCashDJPDF']);
Route::get('/pdf/rci38', [PDFController::class, 'generateRCI38PDF']);
Route::get('/pdf/rci46', [PDFController::class, 'generateRCI46PDF']);
Route::get('/pdf/checkdr', [PDFController::class, 'generateCheckDRPDF']);
