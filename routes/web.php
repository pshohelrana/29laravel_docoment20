<?php

use App\Http\Controllers\LoanactiveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoanapplicantController;
use App\Http\Controllers\DipositController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoansystemController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::resources([
    'users' => UserController::class,
    'roles' => RoleController::class,
    'loanactives'=>LoanactiveController::class,
    'loanapplicants'=>LoanapplicantController::class,
    'diposits'=>DipositController::class,
    'withdraws'=>WithdrawController::class,
    'expenses'=>ExpenseController::class,
    'incomes'=>IncomeController::class,
    'members'=>MemberController::class,
    'customers'=>CustomerController::class,
    'products' => ProductController::class,
    'actives' => ActiveController::class,
    'loansystems' => LoansystemController::class
   
]);

Route::get("/roles/delete/{id}",[RoleController::class,"delete"]);
Route::get("/loanactives/delete/{id}",[LoanactiveController::class,"delete"]);
Route::get("/loanapplicants/delete/{id}",[LoanapplicantController::class,"delete"]);
Route::get("/diposits/delete/{id}",[DipositController::class,"delete"]);
Route::get("/members/delete/{id}",[MemberController::class,"delete"]);
Route::get("/incomes/delete/{id}",[IncomeController::class,"delete"]);
Route::get("/expenses/delete/{id}",[ExpenseController::class,"delete"]);
Route::get("/withdraws/delete/{id}",[WithdrawController::class,"delete"]);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
