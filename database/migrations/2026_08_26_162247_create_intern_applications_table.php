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
        Schema::create('intern_applications', function (Blueprint $table) {
            $table->id();
            
        $table->string('full_name');
        $table->string('email');
        $table->string('phone_number');
        $table->string('institution');
        $table->string('program');
        $table->string('area');
        $table->text('reason');
        $table->string('document');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intern_applications');
    }
};
