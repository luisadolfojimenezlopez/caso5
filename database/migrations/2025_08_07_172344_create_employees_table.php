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
        Schema::create('employees', function (Blueprint $table) {
        $table->increments('id');
        $table->string('id_empleado')->unique(); 
        $table->string('name'); 
        $table->string('address')->unique(); 
        $table->string('telephone')->nullable();
        $table->date('email')->nullable(); 
        $table->decimal('profession', 8, 2)->default(0); 
        $table->string('entry_date'); 
        $table->string('ID_document')->unique();
        $table->string('country')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
