<?php

use App\Models\User;
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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('number', 8)->nullable()->unique();
            $table->string('description', 200)->nullable();
            $table->string('type', 5)->nullable();
            $table->unsignedInteger('price')->nullable()->default(0);
            $table->unsignedInteger('qty')->nullable()->default(0);
            $table->string('location', 100)->nullable();
            $table->string('attachment', 100)->nullable();
            $table->string('user');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
