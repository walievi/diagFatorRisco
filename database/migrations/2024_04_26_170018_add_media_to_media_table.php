<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */

    public function up(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('media_path'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->dropColumn('media_path');
        });
    }
};
