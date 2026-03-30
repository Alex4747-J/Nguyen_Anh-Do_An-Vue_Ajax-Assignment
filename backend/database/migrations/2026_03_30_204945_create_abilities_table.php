<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
    * Creates the abilities table to store Valorant ability data.
    * Each ability belongs to an agent via the agent_id foreign key.
     */
    public function up(): void
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->id();
            
            // Foreign key to agents — if an agent is deleted,
            // their abilities are automatically removed too
            $table->foreignId('agent_id')
                    ->constrained('agents')
                    ->onDelete('cascade');

            $table->string('name');
            $table->string('type');
            $table->text('description')->nullable();
            $table->string('key_bind')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abilities');
    }
};
