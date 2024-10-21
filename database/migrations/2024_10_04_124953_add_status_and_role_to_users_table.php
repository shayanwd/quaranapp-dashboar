<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->default('active'); // Adding the 'status' column with a default value of 'active'
            $table->string('role')->default('user');     // Adding the 'role' column with a default value of 'user'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status'); // Dropping the 'status' column
            $table->dropColumn('role');   // Dropping the 'role' column
        });
    }
};
