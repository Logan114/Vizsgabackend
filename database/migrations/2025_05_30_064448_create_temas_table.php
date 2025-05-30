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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('temanev');
            $table->timestamps();
        });
        DB::table('temas')->insert(
            array(
                'temanev' => 'muszaki',
                
            ),
            array(
                'temanev' => 'szuksegletek'
            )
            );
            DB::table('temas')->insert(     
                array(
                    'temanev' => 'valoElet'
                )
                );
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};
