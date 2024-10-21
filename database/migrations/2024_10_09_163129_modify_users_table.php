<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the 'status' column
            $table->dropColumn('dob');

            // Add the 'img_path' column
            $table->string('img')->nullable(); // Use nullable if you want this field to be optional
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the 'img_path' column
            $table->dropColumn('img');
        });
    }
}
