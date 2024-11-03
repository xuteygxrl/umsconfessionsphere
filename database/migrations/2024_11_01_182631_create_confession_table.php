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
        Schema::create('confession', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('content');
            $table->integer('userId');
            $table->string('confessionCategoryId', 50);
            $table->char('status', 1);
            $table->integer('adminId')->nullable();
            $table->integer('isDeleted')->nullable();
            $table->integer('commentSwitch')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confession');
    }
};
