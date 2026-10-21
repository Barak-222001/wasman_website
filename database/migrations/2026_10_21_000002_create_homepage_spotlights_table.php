<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('homepage_spotlights', function (Blueprint $table) {
            $table->id();
            $table->string('heading', 200);
            $table->text('intro');
            $table->string('title', 255);
            $table->string('authors', 255);
            $table->text('description');
            $table->string('flyer_path');
            $table->string('article_path');
            $table->boolean('is_featured')->default(false)->index();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('homepage_spotlights'); }
};
