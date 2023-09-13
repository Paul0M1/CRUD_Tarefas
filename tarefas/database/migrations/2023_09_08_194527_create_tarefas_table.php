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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descricao');
            $table->dateTime('data_vencimento');
            $table->enum('status', ['Pendente', 'Completa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};



//ADCIONAR DADOS NA TABELAS
//INSERT INTO `tarefas`(`titulo`, `descricao`, `data_vencimento`, `status`, `created_at`, `update_at`)
//VALUES ('lavar-carro','dasddasd','12/08/2023','pendente', 'now()', 'now()')