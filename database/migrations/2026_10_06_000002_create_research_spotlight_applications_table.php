<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('research_spotlight_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 50);
            $table->string('institution');
            $table->string('position');
            $table->string('country', 120);
            $table->string('research_title', 500);
            $table->string('focus_area');
            $table->text('research_summary');
            $table->text('motivation');
            $table->string('profile_link', 1000)->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('research_spotlight_applications');
    }
};
