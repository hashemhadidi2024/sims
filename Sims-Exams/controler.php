public function store(Request $request, Post $post)
{
    $request->validate([
        'comment' => 'required'
    ]);

    $post->comments()->create([
        'user_id' => auth()->id(),
        'comment' => $request->comment
    ]);

    return redirect()->back();
}
