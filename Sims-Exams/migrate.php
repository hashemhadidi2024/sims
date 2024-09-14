public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('user'); // Default role is user
    });
}
