<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BillGroupController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\OweController;

Route::group(['prefix' => 'v1'], function () {

    Route::get('/health-check', function () {
        return [
            'timestamp' => date('Y-m-d H:i:s'),
            'env' => config('app.env'),
            'status' => true,
            'data' => request()->all()
        ];
    });

    Route::resource('bill-groups', BillGroupController::class);
    Route::resource('bills', BillController::class);
    Route::resource('owed', OweController::class);
});