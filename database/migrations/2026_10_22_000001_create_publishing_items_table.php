<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('publishing_items', function (Blueprint $table) {
            $table->id();
            $table->string('section', 50)->index();
            $table->string('title');
            $table->text('summary')->nullable();
            $table->longText('body')->nullable();
            $table->string('category',100)->nullable();
            $table->string('author')->nullable();
            $table->date('event_date')->nullable();
            $table->string('cover_path')->nullable();
            $table->string('file_path')->nullable();
            $table->string('video_url',2048)->nullable();
            $table->boolean('is_published')->default(false)->index();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->index(['section','is_published','published_at']);
        });
    }
    public function down(): void { Schema::dropIfExists('publishing_items'); }
};
