<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('research_assistant_applications', function (Blueprint $table) {

            $table->id();

            $table->string('full_name');

            $table->string('email');

            $table->string('institution')->nullable();

            $table->string('research_topic');

            $table->string('research_area');

            $table->string('timeline')->nullable();

            $table->text('research_needs');

            $table->string('document')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('research_assistant_applications');
    }
};