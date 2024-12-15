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
        Schema::create('fahxoxo', function (Blueprint $table) {
            $table->increments('user_id'); // คอลัมน์ integer, primary key
            $table->float('price', 8, 2)->nullable(); // คอลัมน์ float, 8 หลักทั้งหมด 2 ตำแหน่งทศนิยม
            $table->string('name', 100)->nullable(); // คอลัมน์ string, ความยาวสูงสุด 100 ตัวอักษร
            $table->date('birthday')->nullable(); // คอลัมน์ date
            $table->text('description')->nullable(); // คอลัมน์ text
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fahxoxo');
    }
};
