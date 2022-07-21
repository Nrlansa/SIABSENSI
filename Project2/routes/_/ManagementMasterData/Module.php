<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\ModuleController;

Route::post('module/add-role',[ModuleController::class, 'addRole']);
Route::get('module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('module', ModuleController::class); 