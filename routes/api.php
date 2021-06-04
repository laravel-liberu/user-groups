<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\UserGroups\Http\Controllers\Create;
use LaravelEnso\UserGroups\Http\Controllers\Destroy;
use LaravelEnso\UserGroups\Http\Controllers\Edit;
use LaravelEnso\UserGroups\Http\Controllers\ExportExcel;
use LaravelEnso\UserGroups\Http\Controllers\InitTable;
use LaravelEnso\UserGroups\Http\Controllers\Options;
use LaravelEnso\UserGroups\Http\Controllers\Store;
use LaravelEnso\UserGroups\Http\Controllers\TableData;
use LaravelEnso\UserGroups\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/userGroups')
    ->as('administration.userGroups.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{userGroup}/edit', Edit::class)->name('edit');
        Route::patch('{userGroup}', Update::class)->name('update');
        Route::delete('{userGroup}', Destroy::class)->name('destroy');
        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');
        Route::get('exportExcel', ExportExcel::class)->name('exportExcel');
        Route::get('options', Options::class)->name('options');
    });
