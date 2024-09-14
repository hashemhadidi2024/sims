Route::post('posts/{post}/comments', [CommentController::class, 'store'])->middleware('auth');
