<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partner_applications', function (Blueprint $table) {

            $table->id();

            $table->string('organization_name');

            $table->string('contact_person');

            $table->string('email');

            $table->string('phone_number')->nullable();

            $table->string('country')->nullable();

            $table->string('partnership_type');

            $table->text('partnership_message');

            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('partner_applications');
    }
};