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
        Schema::table('articles', function (Blueprint $table) {
            //rename Thumbnail
            $table->renameColumn('thumbnail', 'thumbnail_small');
            //add new Thumbnail columns
            $table->string('thumbnail_medium')->nullable()->after('thumbnail_small');
            $table->string('thumbnail_large')->nullable()->after('thumbnail_medium');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->renameColumn('thumbnail_small', 'thumbnail');
            $table->dropColumn('thumbnail_medium');
            $table->dropColumn('thumbnail_large');
        });
    }
};
