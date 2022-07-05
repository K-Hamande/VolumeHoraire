<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributions', function (Blueprint $table) {
            $table->id();
            $table->integer('VH_CoursMagistral');
            $table->integer('VH_TravauxDiriges');
            $table->float('CM_ApresAbattement');
            $table->float('TD_ApresAbattement');
            $table->integer('VCM_confie')->nullable();
            $table->integer('VTD_confie')->nullable();
            $table->float('Estimation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributions');
    }
};
