<?php

use App\Constants\Attribute;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEspecie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Attribute::TB_ESPECIE, function (Blueprint $table) {
            $table
                ->bigIncrements(Attribute::CD_ESPECIE)
                ->comment('Código chave da tabela PK, Identity');
            $table
                ->string(Attribute::NO_ESPECIE,250)
                ->comment('Nome da especie do veiculo');
            $table
                ->string(Attribute::DS_ESPECIE,250)
                ->nullable()
                ->comment('Descrição da especie do veiculo');
            $table
                ->timestamp(Attribute::TS_CRIADO)
                ->comment('Data e hora de criação do registro');
            $table
                ->timestamp(Attribute::TS_ATUALIZADO)
                ->nullable()
                ->comment('Data e hora de atualização do registro');
            $table
                ->softDeletes(Attribute::TS_REMOVIDO)
                ->comment('Data e hora de atualização do registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Attribute::TB_ESPECIE);
    }
}
