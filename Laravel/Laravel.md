# Laravel Overview

## 1. Request Lifecycle

1. **Entry Point**: Request directed to `public/index.php`.
2. **HTTP Kernel**: Handles request via middlewares (`app/Http/Kernel.php`).
3. **Service Providers**: Registers and bootstraps services.
4. **Routing**: Matches request URL to route (`routes/web.php` or `routes/api.php`).
5. **Controller**: Route sends request to controller method.
6. **Middleware**: Request passes through route-specific middleware.
7. **Controller Action**: Processes request and returns response.
8. **Response**: Sent back through middleware stack.
9. **Output**: Response sent to user's browser.

## 2. Facades

Laravel facades provide a "`static`" interface to classes in the service container, offering a terse, expressive syntax.

### Example

```php
use Illuminate\Support\Facades\Cache;

Cache::put('key', 'value', $minutes);
$value = Cache::get('key');
```

Common Facades
* Cache: Interface to caching system.
* Config: Access configuration values.
* DB: Run database queries.
* Log: Log messages.
* Queue: Interact with queue system.
* Route: Register routes.
* URL: Generate URLs.
3. Laravel Routing
Routing defines routes associated with controller actions or closures.

```php
Basic Routing
----------------
Route::get('/', function () {
    return view('welcome');
});
----------------
Route Parameters
----------------
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
----------------
Named Routes
----------------
Route::get('user/profile', function () {
    // Route logic...
})->name('profile');
----------------
Route Groups
----------------
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Uses Auth Middleware
    });
    Route::get('/account', function () {
        // Uses Auth Middleware
    });
});
----------------
Resource Controllers
----------------
Route::resource('photos', PhotoController::class);
----------------
Middleware
----------------
Route::get('admin/profile', function () {
    // Uses Admin Middleware
})->middleware('admin');
