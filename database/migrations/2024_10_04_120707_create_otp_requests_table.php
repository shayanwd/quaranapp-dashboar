<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtpRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('otp_requests', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->index(); // Store the phone number
            $table->string('otp'); // Store the generated OTP
            $table->boolean('is_verified')->default(false); // Verification status
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('otp_requests');
    }
}
