<?php

use App\Http\Resources\Api\V1\ActivityLogCollection;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

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

Route::get('/', function (\App\Services\PlayStoreService $playStoreService) {
    $items = Activity::all()->map(function ($item) {
        $item['created_at'] = $item->created_at->format('Y-m-d');
        return $item;
    });
    dd($items);
    $list = new ActivityLogCollection(Activity::all());
    return view('welcome');
});
