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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("reading_id");
            $table->foreign("reading_id")->references("id")->on("reading")->onDelete("cascade");
            $table->string("name");
   $table->string("email");
   $table->string("phone");
   $table->string("address");
   $table->string("customerName");
   $table->enum("status",["single","merried"]);
   $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
