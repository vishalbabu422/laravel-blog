<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Pest\Arch\Blueprint as ArchBlueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post',function(Blueprint $table){
            $table->id();
            $table->string('title',200);
            $table->string('description',500);
            $table->string('image_path');
            $table->bigInteger('cateogory_fk');
            $table->boolean('priority')->nullable();
            $table->integer('priority_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }

};
