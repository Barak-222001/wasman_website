<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('gender', 50);
            $table->string('phone', 30);
            $table->string('email');
            $table->string('address', 500);
            $table->string('occupation');
            $table->string('institution');
            $table->string('expertise');
            $table->string('education', 100);
            $table->string('join_as', 50);
            $table->string('join_as_other')->nullable();
            $table->string('membership_type')->nullable();
            $table->text('interest');
            $table->json('contribution')->nullable();
            $table->string('contribution_other', 500)->nullable();
            $table->boolean('declaration')->default(false);
            $table->string('status', 30)->default('Pending');
            $table->timestamps();

            $table->index('email');
            $table->index('join_as');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('membership_applications');
    }
};
