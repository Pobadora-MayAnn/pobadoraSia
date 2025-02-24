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
        Schema::create('reading', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("admin_id");
            $table->foreign("admin_id")->references("id")->on("admin")->onDelete("cascade");
            $table->string("customerName");
            $table->date("reading_date");
            $table->date("previous_reading");
            $table->date("current_reading");
            $table->integer("usage_use");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading');
    }
};
