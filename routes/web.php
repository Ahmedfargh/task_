<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcessTask;
Route::get('/', function () {
    return view('index');
});
Route::post("/process/checklist/",[ProcessTask::class,"process"])->name("process_check_list");