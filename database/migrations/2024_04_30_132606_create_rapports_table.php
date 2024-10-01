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
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->dateTime('DateDebut');
            $table->dateTime('DateFin');
            $table->string('Etat_machine');
            $table->string('Description');
            $table->foreignId('entreprise_id')->constrained('entreprises');
            $table->foreignId('machine_id')->constrained('machines');
            $table->foreignId('employé_id')->constrained('employés');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapports');
    }
};
