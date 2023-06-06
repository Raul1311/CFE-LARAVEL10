<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\homecontroller;


Route::get('',[homecontroller::class,'index']); 