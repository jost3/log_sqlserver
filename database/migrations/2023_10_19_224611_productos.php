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
        //
        schema::create('productos1',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('precio');
            $table->string('categoria');
            $table->string('proveedor');
            $table->string('existencias');
            $table->string('descripcion');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
