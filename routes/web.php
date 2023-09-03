<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\AdminPlaceController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CommentController;



// Public routes
Route::view('/', 'pages.home')->name('home');
Route::view('/home', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contacts', 'pages.contacts')->name('contacts');
Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');





Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');

Route::get('/comments', 'CommentController@showComments')->name('comments.show');
Route::get('/comments', [CommentController::class, 'index'])->name('comments');
Route::get('/comments', function () {
    return view('comments.index');
})->name('comments.index');





Route::view('post', 'pages.post')->name('post');
Route::view('comments', 'pages.comments')->name('comments');
Route::view('posts', 'pages.posts')->name('posts');
Route::view('listing', 'pages.listing')->name('listing');
Route::view('katedra', 'pages.katedra')->name('katedra');
Route::view('uzupis', 'pages.uzupis')->name('uzupis');
Route::view('stiklo', 'pages.stiklo')->name('stiklo');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::view('mo', 'pages.mo')->name('mo');
Route::view('okupaciju', 'pages.okupaciju')->name('okupaciju');
Route::view('literatu', 'pages.literatu')->name('literatu');
Route::view('lukiskes', 'pages.lukiskes')->name('lukiskes');
Route::view('valdovu', 'pages.valdovu')->name('valdovu');
Route::view('onos', 'pages.onos')->name('onos');



Route::middleware(['auth', 'admin'])->group(function () {
    // Other routes...
    
    
    // Other routes...
});




// Weather route
Route::get('/weather', [WeatherController::class, 'getWeather'])->name('weather');

// Place routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::resource('places', AdminPlaceController::class);
Route::get('places/create', [AdminPlaceController::class, 'create']) ->name('admin.places.show');
Route::get('places/{place}',[AdminPlaceController::class, 'show'])->name('admin.places.show');
Route::get('places/{place}/edit', [AdminPlaceController::class, 'edit'])->name('admin.places.edit');
Route::delete('places/{place}', [AdminPlaceController::class, 'destroy'])->name('admin.places.destroy');
Route::put('places/{place}',[AdminPlaceController::class, 'update'])->name('admin.places.update');
Route::post('/places', [AdminPlaceController::class, 'store'])->name('admin.places.store');
});


// Authenticated user routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin routes



// User administration routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/make-admin/{id}', [UserController::class, 'makeUserAdmin'])->name('make.admin');
});

// Other admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('users', UsersController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('dashboard', DashboardController::class);
});

// Individual user administration routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UsersController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{id}', [UsersController::class, 'show'])->name('admin.users.show');
    Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::patch('/admin/users/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
});

// Individual role administration routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/roles', [RolesController::class, 'index'])->name('admin.roles.index');
    Route::get('/admin/roles/create', [RolesController::class, 'create'])->name('admin.roles.create');
    Route::post('/admin/roles', [RolesController::class, 'store'])->name('admin.roles.store');
    Route::get('/admin/roles/{id}', [RolesController::class, 'show'])->name('admin.roles.show');
    Route::get('/admin/roles/{id}/edit', [RolesController::class, 'edit'])->name('admin.roles.edit');
    Route::patch('/admin/roles/{id}', [RolesController::class, 'update'])->name('admin.roles.update');
    Route::delete('/admin/roles/{id}', [RolesController::class, 'destroy'])->name('admin.roles.destroy');
});

// Individual category administration routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/categories', [CategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categories/create', [CategoriesController::class, 'create'])->name('admin.categories.create');
    Route::post('/admin/categories', [CategoriesController::class, 'store'])->name('admin.categories.store');
    Route::get('/admin/categories/{id}', [CategoriesController::class, 'show'])->name('admin.categories.show');
    Route::get('/admin/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::patch('/admin/categories/{id}', [CategoriesController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{id}', [CategoriesController::class, 'destroy'])->name('admin.categories.destroy');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('places', AdminPlaceController::class);
    Route::get('places/create', [AdminPlaceController::class, 'create'])->name('admin.places.create');
    Route::get('places/{place}', [AdminPlaceController::class, 'show'])->name('admin.places.show');
    Route::delete('places/{place}', [AdminPlaceController::class, 'destroy'])->name('admin.places.destroy');
    Route::put('places/{place}', [AdminPlaceController::class, 'update'])->name('admin.places.update');
    Route::post('/places', [AdminPlaceController::class, 'store'])->name('admin.places.store');
    Route::get('places', [AdminPlaceController::class, 'index'])->name('admin.places.index');

});

// Individual dashboard administration routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/dashboard/create', [DashboardController::class, 'create'])->name('admin.dashboard.create');
    Route::post('/admin/dashboard', [DashboardController::class, 'store'])->name('admin.dashboard.store');
    Route::get('/admin/dashboard/{id}', [DashboardController::class, 'show'])->name('admin.dashboard.show');
    Route::get('/admin/dashboard/{id}/edit', [DashboardController::class, 'edit'])->name('admin.dashboard.edit');
    Route::patch('/admin/dashboard/{id}', [DashboardController::class, 'update'])->name('admin.dashboard.update');
    Route::delete('/admin/dashboard/{id}', [DashboardController::class, 'destroy'])->name('admin.dashboard.destroy');
});
