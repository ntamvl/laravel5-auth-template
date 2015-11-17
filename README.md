# Laravel 5.1 Auth Template

Copy views folder to views Laravel App

```
app/resources/views
```

Add route code to file

```
app\Http\routes.php
```

```
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
```
