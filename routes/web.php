<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
//use App\Http\Controllers\EnderecoController;
//use App\Http\Controllers\TelefoneController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('/app')->group(function () {
   
    //Clientes
    Route::get('/clients', [ClientController::class, 'index'])->name('app.clients.index');
    Route::get('/clients/{id}/show/', [ClientController::class, 'show'])->name('app.clients.show');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('app.clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('app.clients.store');
    Route::get('/clients/{id}/edit/', [ClientController::class, 'edit'])->name('app.clients.edit');
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('app.clients.update');
    Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('app.clients.destroy');    

    //Produtos
    Route::get('/products', [ProductController::class, 'index'])->name('app.products.index');
    Route::get('/products/{id}/show/', [ProductController::class, 'show'])->name('app.products.show');
    Route::get('/products/create', [ProductController::class, 'create'])->name('app.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('app.products.store');
    Route::get('/products/{id}/edit/', [ProductController::class, 'edit'])->name('app.products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('app.products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('app.products.destroy');
    
    //Faturas 
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('app.invoices.index');
    Route::get('/invoices/{id}/show/', [InvoiceController::class, 'show'])->name('app.invoices.show');
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('app.invoices.create');
    Route::post('/invoices', [InvoiceController::class, 'store'])->name('app.invoices.store');
    Route::get('/invoices/{id}/edit/', [InvoiceController::class, 'edit'])->name('app.invoices.edit');
    Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('app.invoices.update');
    Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('app.invoices.destroy');    
});

// Route::prefix('v1')->group(function () {
//     //Authenticate
//     Route::post('login', [AuthController::class, 'login']);
// });

//Route::prefix('/app')->middleware('jwt.auth')->group(function () {
    //Auth
    // Route::post('me', [AuthController::class, 'me']);
    // Route::post('refresh', [AuthController::class, 'refresh']);
    // Route::post('logout', [AuthController::class, 'logout']);

    //Users    
    // Route::post('users/signup', [UserController::class, 'signup']);

    //Clientes
    // Route::get('clients', [ClientController::class, 'index']);
    // Route::get('clients/{id}', [ClientController::class, 'show']);
    // Route::post('clients/store', [ClientController::class, 'store']);
    // Route::put('clients/update/{id}', [ClientController::class, 'update']);
    // Route::delete('clients/delete/{id}', [ClientController::class, 'delete']);

    //Telefones
    // Route::post('telefones/store', [TelefoneController::class, 'store']);
    // Route::put('telefones/update/{id}', [TelefoneController::class, 'update']);
    // Route::delete('telefones/delete/{id}', [TelefoneController::class, 'delete']);

    //Endereços
    // Route::post('enderecos/store', [EnderecoController::class, 'store']);
    // Route::put('enderecos/update/{id}', [EnderecoController::class, 'update']);
    // Route::delete('enderecos/delete/{id}', [EnderecoController::class, 'delete']);

    //Produtos
    // Route::get('products', [ProductController::class, 'index']);
    // Route::get('products/{id}', [ProductController::class, 'show']);
    // Route::post('products/store', [ProductController::class, 'store']);
    // Route::put('products/update/{id}', [ProductController::class, 'update']);
    // Route::delete('products/delete/{id}', [ProductController::class, 'delete']);

    //Faturas 
    //Route::post('invoices/store', [InvoiceController::class, 'store']);
//});
