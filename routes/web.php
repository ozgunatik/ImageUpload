<?php

use Illuminate\Support\Facades\Route;

Route::get('/ajax_upload', 'AjaxUploadController@index');
Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');