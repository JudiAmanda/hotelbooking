<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Models\Hotel;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\RoomController;

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

Route::get('/', function () {
    $hotels = Hotel::with(['state'])->limit(3)->get();
    return view('welcome', ['hotels' => $hotels]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'throttle:3, 1'
])->group(function () {
    Route::get('/dashboard', function () {  

    //Grab the logged in User's reservations info
    //for display on the dashboard
    $authenticated_user = Auth::user();
    $user_reservations =$authenticated_user
    ->reservation()
    ->limit(10)
    ->get();
   
    $hotels = Hotel::with(['state'])->limit(3)->get();

    return view('dashboard', ['user' => $authenticated_user,
'reservations' => $user_reservations, 
    'hotels' => $hotels]);


    })->name('dashboard');
});


Route::group(['prefix'=>'admin','middleware'=>['admin:admin', 'throttle:3, 1']],function(){
 Route::get('/login', [AdminController::class, 'loginForm']);
 Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');

// State addition form route from admin area
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/add-state', [StateController::class, 'stateForm'])->name('add_state');

// Route for handling state submission form
Route::middleware(['auth:sanctum,admin', 'verified'])->post('/admin/submit-state', [StateController::class, 'submitStateForm'])->name('submit_state');


// Hotel addition form route in admin area
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/add-hotel', [HotelController::class, 'hotelForm'])->name('add_hotel');

// Route for handling hotel submission form
Route::middleware(['auth:sanctum,admin', 'verified'])->post('/admin/submit-hotel', [HotelController::class, 'submitHotelForm'])->name('submit_hotel');

// Room addition form route in admin area
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/add-room', [RoomController::class, 'roomForm'])->name('add_room');

// Route for handling room submission form
Route::middleware(['auth:sanctum,admin', 'verified'])->post('/admin/submit-room', [RoomController::class, 'submitRoomForm'])->name('submit_room');

Route::get('/hotels', [HotelController::class, 'index'])->name('hotels');


Route::get('/hotels/{hotelId}', [HotelController::class, 'hotelDetails'])->name('hotels.detail');

Route::get('/hotel-search', [HotelController::class, 'hotelSearch'])->name('search.detail');

//rate limiting number of reviews submitted per minute to three
Route::middleware(['throttle:3, 1'])->post('/save-review', [ReviewController::class, 'saveReview'])->name('save_review');

//display reservation form
Route::get('/reservation/{hotelId}', [ReservationController::class, 'index'])->name('reservation');

//Save reservation
Route::post('/save-reservation', [ReservationController::class, 'saveReservation'])->name('reservation.save');

//manage reservations
Route::get('/manage-booking/{userId}', [ReservationController::class, 'manageReservation'])->name('reservation.manage');

//display user reservation for editing
Route::get('/edit-booking/{id}', [ReservationController::class, 'editReservation'])->name('reservation.edit');

//update reservation
Route::post('/update-booking/{id}', [ReservationController::class, 'updateReservation'])->name('reservation.update');

//delete reservation
Route::get('/delete-booking/{id}', [ReservationController::class, 'deleteReservation'])->name('reservation.delete');
