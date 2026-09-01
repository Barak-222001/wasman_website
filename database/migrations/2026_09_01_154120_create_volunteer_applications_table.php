<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteer_applications', function (Blueprint $table) {

            $table->id();

            $table->string('full_name');

            $table->string('email');

            $table->string('phone_number')->nullable();

            $table->string('country')->nullable();

            $table->string('volunteer_area');

            $table->string('availability');

            $table->text('reason');

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('volunteer_applications');
    }
};