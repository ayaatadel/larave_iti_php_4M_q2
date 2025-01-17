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
        Schema::table('students', function (Blueprint $table) {
            //
            // $table->unsignedBigInteger('track_id');

            // $table->foreign('track_id')->references('id')->on('tracks');

                /**
                 * alter table add column track_id foreignkey refrence(id) on (tracks)
                 */


            $table->foreignId('track_id')->nullable()->constrained()->onDelete('cascade')->cascadeOnUpdate();
            //cascadeOnUpdate()
            // cascadeOnDelete()
            // onUpdate('cascade')
            // onDelete('cascade')


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
