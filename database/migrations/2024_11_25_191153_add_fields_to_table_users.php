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
        Schema::table('users', function (Blueprint $table) {

            if (!Schema::hasColumn('users', 'surname')) {
                $table->string('surname')->nullable();
            }

            if (!Schema::hasColumn('users', 'nick')) {
                $table->string('nick')->nullable();
            }

            if (!Schema::hasColumn('users', 'image')) {
                $table->string('image')->nullable();
            }

            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->nullable();
            }
            // if (!Schema::hasColumn('users', 'remember_token')) {
            //     $table->remeberToken();
            // }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname', 'nick', 'image', 'remember_token');
        });
    }
};
