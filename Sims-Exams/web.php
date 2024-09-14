Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('posts', PostController::class);
});
