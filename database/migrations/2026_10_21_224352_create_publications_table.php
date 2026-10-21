
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('author')->nullable();
            $table->text('description');
            $table->string('category')->nullable();
            $table->date('publication_date')->nullable();

            $table->string('pdf_path');
            $table->string('cover_path');

            $table->boolean('is_published')->default(false)->index();
            $table->boolean('is_featured')->default(false)->index();

            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
