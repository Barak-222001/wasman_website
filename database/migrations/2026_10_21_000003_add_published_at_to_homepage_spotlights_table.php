<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration {
    public function up(): void
    {
        Schema::table('homepage_spotlights', function (Blueprint $table) {
            $table->timestamp('published_at')->nullable()->index();
        });
        DB::table('homepage_spotlights')->where('is_featured', true)
            ->whereNull('published_at')->update(['published_at' => now()]);
    }
    public function down(): void
    {
        Schema::table('homepage_spotlights', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
};
