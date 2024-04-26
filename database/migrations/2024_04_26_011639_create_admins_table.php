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
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('adminid')->autoIncrement();
            $table->string('nama',255);
            $table->string('alamat',255);
            $table->string('telpon',13);
            $table->string('username',255);
            $table->string('password',255);
            $table->enum('akses',['admin','petugas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
